<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accommodation;
use Inertia\Inertia;

class AccommodationController extends Controller
{
     /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $accommodationsAll = Accommodation::all();
        $accNumRooms = Accommodation::numRooms();
        return Inertia::render('Accommodations/Index', ['accommodationsAll' => $accommodationsAll,'accNumRooms' => $accNumRooms]);
    }

    public function createAccommodation()
    {
            $accommodation = Accommodation::all();

        return Inertia::render('Accommodations/CreateEdit', [
            'accommodation' => $accommodation,
        ]);
    }

    public function create(Request $request)
    {
        $newAcc = $request->all();

        $newAccAddress = $newAcc['address'];
        $newAccNumRooms = $newAcc['numRooms'];


        $accommodation = new Accommodation;
        $accommodation->address = $newAccAddress;
        $accommodation->numRooms = $newAccNumRooms;
        $accommodation->save();
        

        $accommodations = Accommodation::all();
        return redirect('/accommodations');
    }
}
