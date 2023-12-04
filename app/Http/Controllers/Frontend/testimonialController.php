<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testimonialController extends Controller
{
    public function testimonial(){
        return view('Frontend.Partials.Testimonial');
     }
}
