<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/admin', function (Request $request) {
    return $request->admin();
});

Route::get('/rooms', [RoomsController::class, 'index']);
Route::get('/room/event', [RoomsController::class, 'events']);


Route::post('/book/event', [BookingController::class, 'store']);
Route::get('/events', [EventController::class, 'index']);

Route::get('/bookings', [BookingController::class, 'index']);