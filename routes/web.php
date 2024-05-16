<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/car', function () {
    return view('car');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success', function () {
    return view('components.alert-success');
});

Route::post('/send', [BookingController::class, 'send'])->name('booking.send');
