<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class MangmentTiket extends Controller
{
    public function index()
    {

        $ticket = Ticket::orderBy('id', 'DESC')->paginate(15);

        return view('ticket.index',compact('ticket'));
    }
  
}
