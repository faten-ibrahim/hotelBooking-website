<?php

use App\Http\Controllers\BookingRequestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Models\BookingRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(RoomController::class)->group(function () {
        Route::get('/rooms/available', 'getAvailableRooms')->name('rooms.available');
    });

    Route::controller(BookingRequestController::class)->group(function () {
        Route::get('/booking-requests', 'index')->name('bookingRequests.index');
    });
});
require __DIR__ . '/auth.php';
