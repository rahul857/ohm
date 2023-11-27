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
        $fileName=null;
        if($request->hasFile('photo'))
        {
            $file=$request->file('photo');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads',$fileName);

        }


    
        Staff::create([
           'name'=>$request->name,
           'email'=>$request->email,
            'password'=>$request->password,
            'image'=>$fileName,
         ]);
         return redirect()->back();

    }
    //Doctor er jonno
    public function doctor(){
        $doctors=Staff::all();
        return view('Pages.Doctor', compact('doctors'));
    }
    public function doctorForm(){
        return view('Backend.doctorForm');
    }
}
