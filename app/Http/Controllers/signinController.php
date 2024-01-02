<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Hash;

class signinController extends Controller
{
    public function sign()
    {
        return view('sign');
    }
    public function signUp()
    {
        return view('signUp');
    }
    public function register(Request $request)
    {

        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email|unique:signins',
                'password'=>'required',
                'confirm'=>'required|same:password'

            ]
            );
         $sign=new User();
         $sign->name=$request['name'];
         $sign->email=$request['email'];
         $sign->password=Hash::make($request['password']);
         $sign->save();
         return redirect('/sign')->withSuccess("SuccessFully Registerd");
     }
     public function signIn(Request $request)
     {

        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
            );

            $credentials=$request->only('email','password');
            if(Auth::attempt( $credentials))
            {
                return redirect('/view');
            }
            else
            {
                return back()->withSuccess('Invalid user Id or Password');
            }
        //  $sign= signin::where('email','=',$request->email)->first();
        //  if($sign){
        //     if(($sign->password)==($request->password))
        //     {
        //         return redirect('/view');
        //     }
        //     else
        //     {
        //         return back()->withSuccess('Invalid Password');
        //     }
        //  }
        //  else{
        //     return back()->withSuccess('The Email id not registerd');
        //  }


     }
}
