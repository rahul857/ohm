<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trusteeController extends Controller
{
    public function trustee(){
        return view ('Pages.Trustee');
    }
}
