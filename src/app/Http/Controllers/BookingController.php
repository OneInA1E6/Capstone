<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookingController extends Controller
{
            /**
     * Show the booking profile page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
            $booking = Booking::all();

        return Inertia::render('Booking/Index', [
            'booking' => $booking,
        ]);
    }
}
