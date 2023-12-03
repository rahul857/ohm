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
        $data = Donation::all();
       return view('Frontend.Partials.Donation', compact('data'));
    }
    public function donationForm(){
        return view('Frontend.Partials.DonationForm');
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
