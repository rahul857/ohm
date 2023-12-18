<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Housekeeping;
use Illuminate\Http\Request;

class BackendserviceController extends Controller
{
    public function services(){
        return view('pages.Services');
    }

    //PersonalCare:

    public function PersonalCares(){
        return view('pages.PersonalCares');
    }

    //Transport:
    public function Transport(){
        return view('pages.Transport');
    }


    public function meal(){
        $meals=Meal::all();
        return view('pages.MealsBend',compact('meals'));
    }

    public function mealForm(){
        return view('Backend.MealForm');
    }

    public function store(Request $request){


    //    dd($request->all());
        // return redirect()->back();

        Meal::create([
            'Date'=>$request->date,
            'Day'=>$request->day,
            'Morning'=>$request->morning,
            'Noon'=>$request->noon,
            'Night'=>$request->night,
            'Action'=>'',
            
        ]);

        return redirect()->route('meal.Bend');
    }

//Housekeeping:
public function housekeepings(){
    $housekeepings =Housekeeping::all();
    return view('pages.HousekeepingBend',compact('housekeepings')); 
}

public function housekeepingForm(){
    return view('Backend.HousekeepingForm');
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

