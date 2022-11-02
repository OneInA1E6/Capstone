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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', [Controllers\DashboardController::class, 'show'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/accommodations', [Controllers\AccommodationController::class, 'show'])
->middleware(['auth', 'verified'])->name('accommodations');

Route::get('/bookings', [Controller\BookingController::class, 'show'])->middleware(['auth', 'verified'])->name('bookings');


require __DIR__.'/auth.php';
