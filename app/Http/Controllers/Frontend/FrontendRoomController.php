<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class FrontendRoomController extends Controller
{
    public function frontendroom()
    {
        $rooms =Room::all();

        // dd('Hello');
        return view('Frontend.Partials.FrontendRoom',compact('rooms'));

    }
}
