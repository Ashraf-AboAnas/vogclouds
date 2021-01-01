<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class MangmentInvoice extends Controller
{

public function addinvoice(Ticket $ticket){

//return $ticket;
return view('invoices._form_edit',compact('ticket'));
}
public function updateinvoice(Ticket $ticket){

}

}
