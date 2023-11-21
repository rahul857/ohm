<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class staffController extends Controller
{
    public function staff(){
        $staffdata=Staff::all();
        return view('pages.Staff',compact('staffdata'));
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
    //Doctor er jonno
    public function doctor(){
        return view('Pages.Doctor');
    }
    public function doctorForm(){
        return view('Backend.doctorForm');
    }
}
