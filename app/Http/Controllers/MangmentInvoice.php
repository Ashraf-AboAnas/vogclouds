<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MangmentInvoice extends Controller
{

    public function addinvoice(Ticket $ticket)
    {
        $year = date("Y");
        $rand = Str::random(4);
        $uniquee = '#' . $year . $rand;
        $date = Carbon::now();
        return view('invoices._form_edit', compact('ticket', 'uniquee', 'date'));
    }

    public function updateinvoice(Ticket $ticket, Request $request)
    {

//return $request;


            $ticket->update([
                'status' => 'close',
                'Recivedby2' => Auth::user()->id,
                'RecivedDate2' => Carbon::now(),

            ]);

            Invoice::create([
                'ticket_id' => $request->ticket_id,
                'user_id' => $request->ticket_user,

                'ticket_code' => $request->ticket_code,
                'price' => $request->price,
            ]);

            return redirect()
                ->route('SuspendedTicket')
                ->with('success', "تم إنشاء  فاتوره     \"  $request->ticket_code \" : بنجاح   ");


    }
    public function showinviose()
    {
       //return view('404');
        if (Auth::user()->role == 'admin') {
            $ticket = Ticket::whereIn('status', ['close'])->orderBy('id', 'DESC')->paginate(15);
        } elseif (Auth::user()->role == 'client')
               //return view('404');
        {

              $ticket = Ticket:: with('invoice')->where('user_id', Auth::id())
                              ->where('status', 'close')
                               ->orderBy('id', 'DESC')->paginate(15);

        //    $invoice=Invoice::where('user_id', Auth::id())
        //                    ->where('ticket_id',$ticket->id)->get();

                        }
        return view('invoices.index', compact('ticket'));
    }
    // if(  $tickete=User::whereIn('email',[$request->email])->first()){
    //     $aa=  $tickete->email;
    // }
    // else{
    //     $aa=  null;

    // }
    public function ticket_ok($id){
        $invoice = Invoice::where('ticket_id',$id);
        $invoice->update(['client_ok'=>1]);
        return redirect()
        ->back()
        ->with('success', "تم تأكيد الفاتوره رقم '{$id}' من قبلك  بنجاح   ");

    }
}
