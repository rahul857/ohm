<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class oldageController extends Controller
{
    public function oldage(){
        return view('Pages.Old_Age');
    }



    public function oldageForm(){
        return view('Backend.OldageForm');
    }

}
