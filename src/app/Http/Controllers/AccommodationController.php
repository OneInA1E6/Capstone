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
        return Inertia::render('Accommodations/Index');
    }

    public function test(Request $request)
    {
        $numRooms = $request -> query('_value');
        $testval = Accommodation::where('numRooms', $numRooms)->get();
        return  $testval;

    }
}
