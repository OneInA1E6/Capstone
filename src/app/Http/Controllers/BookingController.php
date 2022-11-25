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
    public function index()
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
        $newBookingGroupId = $newBooking['group_id'];
        $newBookingAccommodationId = $newBooking['accommodation_id'];


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
    public function editBooking(Booking $booking)
    {
        
        return Inertia::render('Booking/CreateEdit', [
            'booking' => $booking, 'edit' => true,
        ]);
    }
    public function edit(Request $request)
    {
        $newBook = $request->all();   

        $newBookGroupId = $newBook['group_id'];
        $newBookDuration = $newBook['duration'];
        $newBookAccommodationId = $newBook['accommodation_id'];

        $book = Booking::find($newBook['id']);
        $book->group_id = $newBookGroupId;
        $book->duration = $newBookDuration;
        $book->accommodation_id = $newBookAccommodationId;
        $book->save();
        

        $booking = Booking::all();
        return redirect('/bookings');


    }





}
