<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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

    public function createBooking()
    {
            $booking = Booking::all();

        return Inertia::render('Booking/CreateEdit', [
            'booking' => $booking,
        ]);
    }


    public function create(Request $request)
    {
        $newBooking = $request->all();

        $newBookingDuration = $newBooking['duration'];
        $newBookingGroupId = $newBooking['groupId'];
        $newBookingAccommodationId = $newBooking['accommodationId'];
        

        $booking = new Booking;
        $booking->group_id = $newBookingGroupId;
        $booking->duration = $newBookingDuration;
        $booking->accommodation_id = $newBookingAccommodationId;
        $booking->save();

        $bookings = Booking::all();

        return redirect('/bookings')
            ->with('message', 'Booking Successfully Created');
    }


    public function delete(Request $request)
    {   
        $booking = $request->all();
        $groupId = $booking['group_id'];
        Booking::where('group_id', $groupId)->firstorfail()->delete();
     
    
        return redirect()->route(route: 'bookings')
            ->with('message', 'Booking Successfully Deleted');
    }





}
