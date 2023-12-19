<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class ReportController extends Controller
{
public function donationReport(){
    $data= Donation::all();
    return view('Pages.Reportdonation', compact('data'));
}
}
