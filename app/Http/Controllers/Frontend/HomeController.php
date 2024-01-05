<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function master()
    {
        return view('Frontend.Partials.home');   
    }



    //Search er jonno

    public function search(Request $request)
    {
        // dd(request()->all())

        if($request->search)
        {
            $donation=Donation::where('User_ID','LIKE','%'.$request->search.'%')->get();
            //select * from products where name like % akash %;
        }else{
            $donation=Donation::all();
        }



        return view("Frontend.Partials.Search",compact('donation'));
    }
}
