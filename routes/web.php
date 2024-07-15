<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Request;
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

Route::get('/', fn () => view('home'))->name('home');

Route::get('/car', fn () => view('car'))->name('car');

Route::get('/checkout', fn () => view('checkout'))->name('checkout');

Route::get('/success', fn () => view('components.alert-success'))->name('alert-success');

Route::post('/send', [BookingController::class, 'send'])->name('booking.send');
