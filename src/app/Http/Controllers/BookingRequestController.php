<?php

namespace App\Http\Controllers;

use App\Enums\BookingRequestStatus;
use App\Enums\RoomStatus;
use App\Models\BookingRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingRequests = BookingRequest::paginate();
        return view('bookingRequests.index', compact('bookingRequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!empty($request->roomId)){
            BookingRequest::create([
                'status'  => BookingRequestStatus::Pending,
                'user_id' => auth()->user()->id,
                'room_id' => $request->roomId
            ]);

            Room::find($request->roomId)->update(['status' => RoomStatus::Pending]);
        }

        return redirect()->intended(route('rooms.available', absolute: false));
    }

    /**
     * ApproveOrReject
     *
     * @param  mixed $request
     * @return void
     */
    public function ApproveOrReject(Request $request)
    {
        if ($bookingRequest = BookingRequest::where('id',$request->id)->first()){
            $bookingRequest->update(['status' => $request->status]);

            Room::find($bookingRequest->room_id)->update([
                'status' => $request->status? RoomStatus::Booked : RoomStatus::Available
            ]);
        }

        return redirect()->intended(route('bookingRequests.index', absolute: false));

    }
}
