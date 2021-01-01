<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserdashboardController extends Controller
{
    public function index(){

        if(Auth::user()->role=='admin')
        {
        //    dd(Auth::user()->usertype);
        $user = User::latest()->get();

       // dd($user);
        return view('admin.index', ['user' => $user]);
       }else {
       $user= Auth::user()->role;
        return redirect()
      ->route('user.index')
      ->with('alert.error'," YOU ARE  ({$user})  NoT ALLoW To YoU... \"DoNT TrY THiS ...\" !");
       }
    }
    public function destroy($id){
        //return"fswfsdgfsdg";
        $user=User::find($id);
        if($user && $user->role!='admin'){
        $user->delete();
        return redirect()
        ->route('user.index')
        ->with('success', "تم حذف المستخدم رقم\"{$user->id}\" : بنجاح   ");
    }else{return redirect()
        ->route('user.index')
        ->with('alert.error', " لايمكن حذف المستخدم ");}
    }

}
