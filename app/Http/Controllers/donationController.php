<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donationController extends Controller
{
    public function donation(){
        return view('pages.donation');
    }
    public function donationForm(){
        return view('Backend.donationForm');
    }
}
