<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalProjectController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventFormController;
use App\Http\Controllers\RoomFormController;
use App\Http\Controllers\ReactAppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminRoomController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('components/layout');
});

Route::get('/admin', function () {
    return view('pages/admin/admin');
});
Route::get('/adminbookings', function () {
    return view('pages/admin/adminbookings');
});
Route::get('/adminrooms', function () {
    return view('pages/admin/adminrooms');
});
Route::get('/adminevents', [AdminEventController::class, 'list']);

Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'check_login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::resource('/admin/rooms', AdminRoomController::class);
Route::get('/admin/rooms/{id}/delete', [AdminRoomController::class, 'destroy']);
// Route::get('/about', function() {
//     return view('about');
// });
Route::post('/event/submit', [EventFormController::class, 'EventForm']);

Route::post('/room/submit', [RoomFormController::class, 'RoomForm']);

Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact/submit', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');






Route::get('/{path?}', [ReactAppController::class, 'app'])->where('path', '.*');
