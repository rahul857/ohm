<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        return view('pages.dashboard');
    }
    
    public function dashboardForm(){
        return view('Backend.dashboardForm');
    }
}
