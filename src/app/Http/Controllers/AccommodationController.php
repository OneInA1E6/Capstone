<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accommodation;
use Inertia\Inertia;

class AccommodationController extends Controller
{
    /**
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        // $groups = Accommodation::all();
        return Inertia::render('Accommodations/Index');
    }

    public function test(Request $request)
    {
        // var_dump($numRooms);
        $numRooms = $request -> query('_value');
        $testval = Accommodation::where('numRooms', $numRooms)->get();
        return  $testval;
    }
}
