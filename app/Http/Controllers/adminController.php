<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
        $admindata=Admin::paginate(2);
        return view('pages.Admin',compact('admindata'));
    }

    public function adminForm(){
        return view('Backend.adminForm');
    }

    public function store(Request $request){
        Admin::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>$request->password,
            'present_address'=>$request->present_address,
            'permanent_address'=>$request->permanent_address,
            'city'=>$request->city,
            'state'=>$request->state,
            'zip_form'=>$request->zip_form,
        ]);

        return redirect()->back();
        
    }


}
