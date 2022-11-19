<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers;

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

//DASHBOARD
Route::get('/dashboard', [Controllers\DashboardController::class, 'show'])
->middleware(['auth', 'verified'])->name('dashboard');

//ACCOMODATIONS
Route::get('/accommodations', [Controllers\AccommodationController::class, 'show'])
->middleware(['auth', 'verified'])->name('accommodations');

Route::get('/accommodations/test', [Controllers\AccommodationController::class, 'test'])
->middleware(['auth', 'verified'])->name('accommodations.test');

Route::post('/accommodations/create', [Controllers\AccommodationController::class, 'create'])
->middleware(['auth', 'verified'])->name('accommodations.create');

//GROUPS
Route::get('/groups', [Controllers\GroupController::class, 'show'])
->middleware(['auth', 'verified'])->name('groups');

//BOOKINGS
Route::get('/bookings', [Controllers\BookingController::class, 'show'])
->middleware(['auth', 'verified'])->name('bookings');

Route::post('/bookings/create', [Controllers\BookingController::class, 'create'])
->middleware(['auth', 'verified'])->name('bookings.create');

require __DIR__.'/auth.php';
