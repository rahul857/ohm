<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Meal;
use App\Models\Housekeeping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class serviceController extends Controller
{
    //Personal Care:
    public function PersonalCare()
    {
        return view('Frontend.Partials.PersonalCare');
    }

    //Meals: 
    public function meals()
    {
        $meals = Meal::all();
        return view('Frontend.Partials.Meals', compact('meals'));
    }

    public function housekeeping()
    {
        $housekeepings =Housekeeping::all();

        // dd('Hello');
        return view('Frontend.Partials.Housekeeping',compact('housekeepings'));

    }
    public function storehk(Request $request){


        //dd($request->all());
         //return redirect()->back();
         Housekeeping::create([
             'Name'=>$request->name,
             'User_Id'=>$request->user_id,
             'Mobile_No'=>$request->mobile_no,
             'Gender'=>$request->gender,
             'Work_Time'=>$request->work_time,
             
         ]);
 
         return redirect()->route('housekeeping.Bend');
 }
}
