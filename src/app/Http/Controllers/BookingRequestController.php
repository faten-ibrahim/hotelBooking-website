<?php

namespace App\Http\Controllers;

use App\Models\BookingRequest;
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
        //
    }

    public function ApproveOrReject(Request $request)
    {
        if ($bookingRequest = BookingRequest::where('id',$request->id)){
            $bookingRequest->update(['status' => $request->status]);
        }

        return redirect()->intended(route('bookingRequests.index', absolute: false));

    }
}
