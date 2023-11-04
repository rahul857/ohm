<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
        return view('pages.Admin');
    }

    public function adminForm(){
        return view('Backend.adminForm');
    }

    public function store(Request $request){
        //dd($request);
        Admin::create([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
    }


}
