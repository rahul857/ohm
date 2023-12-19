<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Oldage;
use App\Models\Staff;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        $persons = Oldage::count();
        $staffs = Staff::count();
        $donations = Donation::count();
        return view('pages.dashboard',compact('persons','staffs','donations'));
    }
    
    
}
