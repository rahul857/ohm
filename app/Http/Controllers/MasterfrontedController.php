<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterfrontedController extends Controller
{
    public function master(){
        return view('Frontend.Master');
    }
}
