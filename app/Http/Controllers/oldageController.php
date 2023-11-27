<?php

namespace App\Http\Controllers;

use App\Models\Oldage;
use Illuminate\Http\Request;

class oldageController extends Controller
{
    public function oldage(){
        $oldages=Oldage::all();
        return view('Pages.Old_Age',compact('oldages'));
    }



    public function oldageForm(){
        return view('Backend.OldageForm');
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

        Oldage::create([
            'name'=>$request->name,
            'email'=>$request->email,
             'password'=>$request->password,
             'image'=>$fileName,
          ]);
          
          return redirect()->back();
 
        }
}
