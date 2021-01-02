<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Ticket;
use App\Models\FilesUpload;
use App\Http\Requests\TicketRequest;
use App\Http\Requests\TicketRequestReply;
use App\Models\comment;
use App\Models\User;
use App\Notifications\AddNewticket;
use App\Notifications\AddNewticket1;
use App\Notifications\NewNotificationReplay;
use Illuminate\Support\Str;
use Redirect;
use DB;
use Illuminate\Support\Facades\Notification;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $services=Services::where('id','<>',5)->get();

        return view('user.ticket.create_ticket')->with('services', $services);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Services::where('id','<>',5)->get();

        return view('user.ticket.create_ticket')->with('services', $services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(TicketRequest $request)
    public function store(TicketRequest $request)
  {


    // for (User user : users) {
    //     if (user.email().equals($request->email)) {
    //         return user;
    //     }
    // }
    // return null;

    // if(  $tickete=User::whereIn('email',[$request->email])->first()){
    //     $aa=  $tickete->email;
    // }
    // else{
    //     $aa=  null;

    // }


    //   if ($aa){
    //     return redirect()->route('ticket')->with(['alert.error' => 'اسم المستخدم '.$request->email .' بالفعل مسجل في موقعنا  يمكنك الدخول الي حسابك وطلب تذكره  اهلا وسهلا بك  في موقعنا  ' ]);


    //  }
    //   elseif($aa ==''){

    $ticket= new Ticket();
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
             foreach($filess as $file){
                 $extension =$file->getClientOriginalExtension();

                     $filename=rand(100,999999).time().'.'.$extension;

                     $path=$files_path.$filename;
                     $file->move(public_path("ticket\\files\\".$id), $filename);
                         $data=array('ticket_id'=> $id,'filename'=>$filename);
                         DB::table('files_uploads')->insert($data);
                        }}


                        $email1= $ticket->email;
                        Notification::route('mail', $email1)
                        ->notify(new AddNewticket1($ticket));
                        $user=User::whereIn('role',['admin'])->get();
                        if($user){
                                  Notification::send($user, new AddNewticket($ticket));
                                 }
        return redirect()->route('ticket')->with(['success' => 'تم اضافة تذكره رقم'.$ticket->id .' بنجاج وسيتم  التعامل معك والرد في القريب العاجل ' ]);


//}


}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $ticket =$id;
       $comment = comment::where('ticket_id' , $id)
                          ->where('isadmin', true)
                        //  ->where('status', 'New')
                          ->get();


       return view('websites.viewticket', compact(['comment','ticket']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function createreplayuser(TicketRequestReply $request)
    {
//return $request;
// $request->validation([
// 'replaytecket' => 'required|string|max:255|min:8'

// ]);




        $teckit_id = $request->post('aaa');
        $comment = comment::create([
            'replaytecket' => $request->post('adminreplay'),
            'ticket_id' => $teckit_id,
        ]);
        $teckit=Ticket::find($teckit_id);
        $user=User::whereIn('role',['admin'])->get();
        if($user){
                  Notification::send($user, new NewNotificationReplay($teckit));
                 }
        return redirect()
            ->back()
            ->with('success', "تم  اضافة ردك علي  التذكره رقم\"{$teckit_id}\" : بنجاح   ");

    }



}
