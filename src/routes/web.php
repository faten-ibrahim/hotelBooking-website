<?php

use App\Http\Controllers\BookingRequestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Models\BookingRequest;
use App\Models\Permission;
use App\Models\Role;
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

        Route::group(['middleware' => ['can:'.Permission::MANAGE_DASHBOARD]], function () {
            Route::get('/booking-requests', 'index')->name('bookingRequests.index');
            Route::get('/booking-requests/edit', 'ApproveOrReject')->name('bookingRequests.ApproveOrReject');
        });

        Route::post('/booking-requests', 'store')->name('bookingRequests.store');
    });
});
require __DIR__ . '/auth.php';
