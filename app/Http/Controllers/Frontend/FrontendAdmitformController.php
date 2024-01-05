<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendAdmitformController extends Controller
{
    //Backend:
    public function admitRecordfille(){
        $data = Admit::all();
        
        return view('pages.Admit', compact('data'));
    }

    //Frontend:

    public function admitform(){
        //     $data = Donation::all();
        //    return view('Frontend.Partials.Donation', compact('data'));
        return view('Frontend.Partials.FrontendAdmit');
        }

        public function frontendadmitForm(){
            return view('Frontend.Partials.AdmitForm');
        }
        
        public function admitstore(Request $request){


            //dd($request->all());
             //return redirect()->back();
             Admit::create([
                 'Name'=>$request->name,
                 'Age'=>$request->age,
                 'Gender'=>$request->gender,
                 'Relationship'=>$request->relationship,
                 'Mobile_No'=>$request->mobile_no, 
                 'Address'=>$request->address,             
                 'Photo'=>$request->photo,             
            
             ]);
             notify()->success('Registration success.');
             return redirect()->route('admit.form');
     }
}
