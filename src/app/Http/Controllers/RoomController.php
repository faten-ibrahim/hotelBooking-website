<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    /**
     * get Available Rooms
     *
     * @return void
     */
    public function getAvailableRooms()
    {
        $rooms = Room::available()->paginate();
        return view('rooms.available', compact('rooms'));
    }


}
