<?php

namespace App\Http\Controllers;

use App\Models\Oldage;
use Illuminate\Http\Request;

class oldageController extends Controller
{
    public function oldage(){
        $oldages=Oldage::all();
        // dd($oldages->toarray());

        return view('Pages.Old_Age',compact('oldages'));
    }

//View er jonno:
    public function view($id){
        $oldages=Oldage::find($id);
        return view('backend.oldageview',compact('oldages'));
    }
//Edit er jonno:
public function edit($id){
    $oldages=Oldage::find($id);
    return view('backend.oldageedit',compact('oldages'));
}

//Delete er jonno:

public function delete($id)
    {
      $oldages=Oldage::find($id);
      if($oldages)
      {
        $oldages->delete();
      }

      notify()->success('Deleted Successfully.');
      return redirect()->back();
    }


//Update er Code
public function update(Request $request,$id)
    {
        $oldages=Oldage::find($id);

        if($oldages)
        {

          $fileName=$oldages->image;
          if($request->hasFile('photo'))
          {
              $file=$request->file('photo');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

              $file->storeAs('/uploads',$fileName);

              
          }
          $oldages->update([
    
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$fileName,
            
        ]);
        return redirect()->route('Old.Age');
        }}
        



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
