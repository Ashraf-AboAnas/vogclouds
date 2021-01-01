<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function editprofile()
    {

        $user = User::findOrfail(auth()->user()->id);
        //dd($admin);
        return view('profiles.edit', [
            'user' => $user,

        ]);
    }
    public function updataprofile(ProfileRequest $request)
    {

        try {
              $user = User::findOrfail(auth()->user()->id);

                        if ($request->filled('password','password_confirmation')) {

                            $request ->merge([
                                            'password'=>bcrypt($request->post('password'))
                                            ]);


                            $user->update($request->all());
                        }
                        else{
                            $user->update($request->except('password','password_confirmation'));
                        }


                        return redirect()->back()->with(['success'=>'تم التحديث بنجاح']);
                    }catch (\Exception $ex){

                        return redirect()->back()->with(['alert.error'=>'هناك خطأ ما']);
                    }
    }
}
