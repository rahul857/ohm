<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function room(){
        $rooms =Room::all();
     return view('pages.Room',compact('rooms'));
    }

    public function roomForm(){
        return view('Backend.RoomForm');
    }

    public function storeR(Request $request){


        //dd($request->all());
         //return redirect()->back();
         Room::create([
             'Name'=>$request->name,
             'User_Id'=>$request->user_id,
             'Room_No'=>$request->room_no,
             'Seat_No'=>$request->seat_no,
             'Gender'=>$request->gender,             
         ]);
 
         return redirect()->route('seat.room');
 }
}
