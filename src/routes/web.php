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
    return Inertia::render('index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//DASHBOARD
Route::get('/dashboard', [Controllers\DashboardController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/search', [Controllers\DashboardController::class, 'search'])
->middleware(['auth', 'verified'])->name('dashboard.search');

//ACCOMODATIONS
Route::get('/accommodations', [Controllers\AccommodationController::class, 'index'])
->middleware(['auth', 'verified'])->name('accommodations');

Route::get('/accommodations/createAccommodation', [Controllers\AccommodationController::class, 'createAccommodation'])
->middleware(['auth', 'verified'])->name('accommodations.createAccommodation');

Route::get('/accommodations/edit/{accommodation}', [Controllers\AccommodationController::class, 'editAccommodation'])
->middleware(['auth', 'verified'])->name('accommodations.editAccommodation');

Route::post('/accommodations/edit/{accommodation}', [Controllers\AccommodationController::class, 'edit'])
->middleware(['auth', 'verified'])->name('accommodations.edit');

Route::post('/accommodations/create', [Controllers\AccommodationController::class, 'create'])
->middleware(['auth', 'verified'])->name('accommodations.create');

//GROUPS
Route::get('/groups', [Controllers\GroupController::class, 'index'])
->middleware(['auth', 'verified'])->name('groups');

Route::get('/groups/{group}', [Controllers\GroupController::class, 'show'])
->middleware(['auth', 'verified'])->name('groups.show');

//BOOKINGS
Route::get('/bookings', [Controllers\BookingController::class, 'index'])
->middleware(['auth', 'verified'])->name('bookings');

Route::get('/createBooking', [Controllers\BookingController::class, 'createBooking'])
->middleware(['auth', 'verified'])->name('createBooking');

Route::post('/bookings/create', [Controllers\BookingController::class, 'create'])
->middleware(['auth', 'verified'])->name('bookings.create');

Route::post('/bookings/delete', [Controllers\BookingController::class, 'delete'])
->middleware(['auth', 'verified'])->name('deleteBooking');

require __DIR__.'/auth.php';
