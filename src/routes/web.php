<?php

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/accommodations', function () {
    return Inertia::render('Accommodations');
})->name('accommodations');

Route::get('/bookings', [Controllers\BookingController::class, 'show'])->middleware(['auth', 'verified'])->name('bookings');


require __DIR__.'/auth.php';
