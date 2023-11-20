<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration(){
        return view('Frontend.Partials.Registration');
    }
    public function store(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'customer',
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->back();


        

    }

     //Login Part
     
    public function login(){
            return view('Frontend.Partials.login');
        }
}
