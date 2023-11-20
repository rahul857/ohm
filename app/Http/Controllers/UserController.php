<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginForm(){
        return view('pages.login.list');
    }
    public function loginPost(Request $request){
        

        $val=Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
            ]);

            if($val->fails())
            {
                return redirect()->back()->withErrors($val);
            }
            // $credentials=$request->only('email','password');
            
            // dd($request->all());
            $data = Auth::attempt($request->only('email', 'password'));
            // dd($data);

            if($data)
             {   
            //    dd('hello');
            return redirect()->route('dashboard');
             }

           return redirect()->back()->withErrors('invalid user email or password');



    }
    public function logoutForm(){
        auth()->logout();
        return redirect()->route('pages.login');
    }


    
}
