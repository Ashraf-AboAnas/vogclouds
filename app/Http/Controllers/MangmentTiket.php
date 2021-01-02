<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Http\Requests\TicketRequestReply;
use App\Models\comment;
use App\Models\Ticket;
use App\Models\User;
use App\Notifications\SendMassageReplay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Models\Services;
use App\Notifications\AddNewticket;
use App\Notifications\AddNewticket1;
use App\Notifications\CancelTicket;
use App\Notifications\PendingTicket;
use App\Notifications\SendPassword;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Author;
use Throwable;

class MangmentTiket extends Controller
{
    public function NewTicket()
    {
        if(Auth::user()->role =='admin')

        $ticket = Ticket::whereIn('status', ['New'])->orderBy('id', 'DESC')->paginate(15);


     elseif(Auth::user()->role =='client')
    //return view('404');
        $ticket = Ticket::where('user_id', Auth::id())->orderBy('id', 'DESC')->paginate(15);

      return view('ticket.index', compact('ticket'));
    }
    public function SuspendedTicket()
    {

        $ticket = Ticket::whereIn('status', ['Suspended'])->orderBy('id', 'DESC')->paginate(7);

        return view('ticket.suspended', compact('ticket'));
    }


    public function tosuspended(Ticket $ticket )
     {

        //  DB::beginTransaction();
        //  try{
    // $tickets = Ticket::where('user_id','!=','null');

        $tex = Ticket::where('user_id',$ticket->user_id)->first();

         if(!$tex->user_id )
          {
          // return' null user ';
           $password = Str::random(12);//VTI8FASNZ49A
          // dd($password);
          $c_user= User::create([
          'name' => $ticket->name,
          'email' => $ticket->email,
          'role'=>'employe',
          'password' => Hash::make($password),
          ]);

          $ticket->update([
            'status' => 'Suspended',
            'Recivedby'=> Auth::user()->id,
            'RecivedDate'=>Carbon::now(),
            'user_id'=>$c_user->id,

        ]);

        $ticket=Ticket::find($ticket->id);
        // $data =[
        //     'ticket'=>$ticket,
        //     'password'=>$password
        // ];
    //   Mail::to($emails)->send(new MailSend($data));
     //  Mail::to( $ticket->email)->send(new SendPassword($data[]));


            Notification::route('mail', $tex->email)
            ->notify(new SendPassword($tex,$password));
            return redirect()
            ->route('NewTicket')
            ->with('success', "تم استلام التذكره وإشاء مستخدم جديد رقم\"  $ticket->id \" : بنجاح   ");
    }
    else{
     // return $ticket->user_id;
            $ticket->update([
            'status' => 'Suspended',
            'Recivedby'=> Auth::user()->id,
            'RecivedDate'=>Carbon::now()

        ]);

        Notification::route('mail', $tex->email)
        ->notify(new PendingTicket($tex));
        return redirect()
        ->route('NewTicket')
        ->with('success', "تم استلام التذكره رقم\"{  $ticket->id}\" : بنجاح   ");

    }
    //   $ticket=Ticket::find($ticket->id);

    //     Notification::route('mail', $ticket->email)
    //     ->notify(new SendPassword($ticket));
      // DB::commit();

    // }catch(Throwable $e){
    //     DB::rollBack();
    //    return redirect()
    //           ->route('NewTicket')
    //         //   $e->getMessage()
    //           ->with('alert.error','لا يمكنك استلام الرساله بسبب   وجود الاميل  مسبقا لمستخدم اخر');
    //           throw $e;
    //      }


}
    public function addreplytoticket($id)
    {
         //   return  $tickte_ids = Ticket::where('status', 'New')->pluck('id')->toArray();

        $ticket = Ticket::find($id);
       //  return $ticket;
        if($ticket->status ==='New'||$ticket->status ==='Suspended'){
       $comment = comment::where('ticket_id' , $id)
                            ->where('isadmin', false)
                            ->get();
                           // $comment=$ticket->comments;
        return view('ticket.addReplay', compact(['ticket','comment']));
        }
        return view('404');
    }

    public function createreplay(TicketRequestReply $request)
    {
//return $request;
// $request->validate([

//     'adminreplay' => 'required|string|max:255|min:8'

//     ]);
        $teckit_id = $request->post('aaa');
        $comment = comment::create([
            'replaytecket' => $request->post('adminreplay'),
            'user_id' => Auth::user()->id,
            'ticket_id' => $teckit_id,
           'isadmin'=>true

        ]);
        $comment = Ticket::find($teckit_id );

        $email1=$comment->email;

       Notification::route('mail', $email1)
       ->notify(new SendMassageReplay($comment));

        return redirect()
            ->route('NewTicket')
            ->with('success', "تم الرد علي  التذكره رقم\"{$teckit_id}\" : بنجاح   ");

    }

    /***************************** */
    public function search($id){
        $ticket = $id;
       // $comment = comment::where('ticket_id' , $id)->get();

       dd($ticket);
      //  return view('websites.viewticket', compact('comment'));

        // return view('admin.posts.index' , [
        //     'comment' =>$comment
        // ]);
    }
   /*************client_add_ticket*********************** */
   public function client_create_ticket(){
    $services=Services::where('id','<>',5)->get();
    $user = User::findOrfail(auth()->user()->id);
    return view('ticket.client_add',compact(['services','user']));//->with('services', $services);
   }
   public function store(TicketRequest $request)
   {
     $ticket= new Ticket();
         $ticket->user_id=Auth::user()->id;
         $ticket->name = $request->name;
         $ticket->services_id = $request->services_id;
         $ticket->email = $request->email;
         $ticket->subject = $request->subject;
         $ticket->message = $request->message;
         $ticket->phone = $request->phone;
         $ticket->ticket_id = Str::random(12);
         $ticket->status =  "New";
         $ticket->advance_budget = $request->advance_budget;
         $ticket->save();
          if ($request->hasFile('filesname'))
          {
              $id =$ticket->id;
              $files_path = public_path('ticket\files\\'. $id);// upload path

              $filess=$request->file('filesname');
              // loop through each image to save and upload
              foreach($filess as $file)
              {
                       $extension =$file->getClientOriginalExtension();

                      $filename=rand(100,999999).time().'.'.$extension;

                      $path=$files_path.$filename;
                      $file->move(public_path("ticket\\files\\".$id), $filename);
                          $data=array('ticket_id'=> $id,'filename'=>$filename);
                          DB::table('files_uploads')->insert($data);
              }
          }
                         $email1= $ticket->email;
                         Notification::route('mail', $email1)
                         ->notify(new AddNewticket1($ticket));
                         $user=User::whereIn('role',['admin'])->get();
                         if($user){
                                   Notification::send($user, new AddNewticket($ticket));
                                  }
         return redirect()->route('clientaddticket')->with(['success' => 'تم اضافة تذكره رقم'.$ticket->id .' بنجاج وسيتم  التعامل معك والرد في القريب العاجل ' ]);


 }

 public function ticketcancel (Ticket $ticket){

    $ticket->update([
        'status' => 'Cancel',
        'Recivedby2'=> Auth::user()->id,
        'RecivedDate2'=>Carbon::now()

    ]);
    Notification::route('mail', $ticket->email)
    ->notify(new CancelTicket($ticket));


    return redirect()
    ->route('SuspendedTicket')
    ->with('success', "تم إلغاء  التذكرة  رقم     \"  $ticket->id \" : بنجاح   ");


 }

}
