<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class staffController extends Controller
{
    public function staff(){
        return view('pages.Staff');
    }

    public function staffForm(){
        return view('Backend.staffForm');
    }

    public function store(Request $request){
        //dd($request);
    
        Staff::create([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
    }
}
