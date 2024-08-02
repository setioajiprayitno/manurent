<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MobilController;
use App\Models\Mobil;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/', fn () => view('home', [
    'cars' => Mobil::orderByDesc('created_at')->limit(3)->get(),
]))->name('home');

Route::get('/car', fn () => view('car', [
    'cars' => Mobil::all(),
]))->name('car');

Route::get('/checkout', fn () => view('checkout', [
    'cars' => Mobil::all(),
]))->name('checkout');

Route::get('/success', fn () => view('components.alert-success'))->name('alert-success');

Route::post('/send', [BookingController::class, 'send'])->name('booking.send');

Route::get('/dashboard', [MobilController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('input-mobil', [MobilController::class, 'create'])->name('input-mobil');
    Route::post('tambahMobil', [MobilController::class, 'store'])->name('tambah-mobil');
    Route::get('edit/{id}', [MobilController::class, 'edit'])->name('mobil.edit');
    Route::patch('update/{id}', [MobilController::class, 'update'])->name('mobil.update');
    Route::delete('destroy/{id}', [MobilController::class, 'destroy'])->name('mobil.destroy');
});

require __DIR__ . '/auth.php';
