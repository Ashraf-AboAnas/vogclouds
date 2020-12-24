<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use App\Models\Ticket;
use Illuminate\Http\Request;

class MangmentTiket extends Controller
{
    public function NewTicket()
    {

        $ticket = Ticket::whereIn('status',['New'])->orderBy('id', 'DESC')->paginate(15);

        return view('ticket.index',compact('ticket'));
    }
    public function SuspendedTicket()
    {

        $ticket = Ticket::whereIn('status',['Suspended'])->orderBy('id', 'DESC')->paginate(7);

        return view('ticket.suspended',compact('ticket'));
    }

public function tosuspended(Ticket $tiket)
{

$tiket->update(['status'=>'Suspended']);


return redirect()
      ->route('NewTicket')
      ->with('success',"تم اعتماد التذكره رقم\"{$tiket->id}\" : بنجاح   ");

}
public function addreplytoticket($id){
$ticket= Ticket::find($id);
  //  return $ticket;
   return view('ticket.addReplay',compact('ticket'));
    // return View::make('ticket.addReplay',
    // [
    //     'ticket' => $ticket,

    // ]);



}

}
