<?php

namespace App\Http\Controllers;
use  App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifactionController extends Controller
{
   public function read($id){

       $user=Auth::user();
       $notification=$user->notifications()->findOrfail($id); //Relation user and notfications
       $notification->markAsRead();
       return redirect()->to($notification->data['action']);


   }
}
