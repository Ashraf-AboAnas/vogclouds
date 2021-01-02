<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class MangmentInvoice extends Controller
{

public function addinvoice(Ticket $ticket){
    $year =date("Y");
    $rand =Str::random(4);
    $uniquee ='#'.$year .$rand;
    $date=Carbon::now();
return view('invoices._form_edit',compact('ticket','uniquee','date'));
}

public function updateinvoice(Ticket $ticket, Request $request){

//return $request;
if(Auth::user()->role =='admin'){

    $ticket->update([
        'status' => 'close',
        'Recivedby2'=>Auth::user()->id,
        'RecivedDate2'=>Carbon::now()

    ]);

   Invoice::create([
    'ticket_id'=>$request->ticket_id ,
    'user_id'=>$request->ticket_user  ,

    'ticket_code'=>$request->ticket_code  ,
    'price'=>$request->price,
    ]);

    return redirect()
    ->route('SuspendedTicket')
    ->with('success', "تم إنشاء  فاتوره     \"  $request->ticket_code \" : بنجاح   ");
}

}

}
