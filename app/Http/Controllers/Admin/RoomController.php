<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    function add(){
        $types = Type::all();

       return view('admin.add_room', compact('types'));

    }


    function store(Request $request){

        Room::create([

            'room_no' => $request-> room_no,
            'type_id' => $request-> type_id,
        ]);

        return back();
    }


    function all(Request $request){

        $types = Type::all();
        $rooms = Room::all();

        return view('admin.all_room', compact('rooms', 'types'));

    }


    function edit($room_id){

        $types = Type::all();
        $rooms = Room::where('id', $room_id)->first();

        return view('admin.edit_room', compact('rooms', 'types'));

    }

    function update(Request $request, $room_id){
        #get the rooms here
        $room = Room::where('id', $room_id)->first();
        $room-> room_no = $request->room_no;
        $room-> type_id= $request->type_id;

        $room->save();
        return back();
    }
}
