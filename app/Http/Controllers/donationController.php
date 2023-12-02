<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class donationController extends Controller
{
    public function donation(){
        $data = Donation::all();
        
        return view('pages.donation', compact('data'));
    }

    //Frontend er:
    public function donationList(){
       return view('Frontend.Partials.Donation');
    }
    public function donationForm(){
        return view('Frontend.Partials.donationForm');
    }
    public function store(Request $request){

        Donation::create([
            'Name'=>$request->name,
            'Amount'=>$request->amount,
             'Payment_Method'=>$request->payment_method,
             'Receiver_Account'=>$request->receiver_account,
             'Transaction_ID'=>$request->transaction_id,
             'Receipt'=>$request->receipt,
             'Action'=>$request->action,
    
          ]);
          return redirect()->back();

    }


    


}
