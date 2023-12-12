<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Library\SslCommerz\SslCommerzNotification;

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

       $data= Donation::create([
            'Name'=>$request->name,
            'Amount'=>$request->amount,
             'Payment_Method'=>$request->payment_method,
             'Receiver_Account'=>$request->receiver_account,
             'Transaction_ID'=>$request->transaction_id,
             'Receipt'=>$request->receipt,
             'Action'=>$request->action,
    
          ]);

          $this->online_pay($data);
          return redirect()->route('donation.list');

         

          return redirect()->back();

    }

    public function online_pay($payment)
    {
        // dd($order);
        $post_data = array();
        $post_data['total_amount'] = $payment->Amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";
 
        // dd($post_data);
        

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }


    
    }

}
