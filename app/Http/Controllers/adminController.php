<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validate = Validator::make($request->all(),[

            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'mobile_no'=>'required',


        ]);
        if ($validate->fails()){
            return redirect()->back();
        
        }
        
        Admin::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'mobile_no'=>$request->mobile_no,
            'present_address'=>$request->present_address,
            'permanent_address'=>$request->permanent_address,
            'city'=>$request->city,
            'state'=>$request->state,
            'zip_form'=>$request->zip_form,
        ]);

        return redirect()->route('admin');
        
    }


}
