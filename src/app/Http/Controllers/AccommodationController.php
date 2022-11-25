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
    public function index()
    {
        $accommodationsAll = Accommodation::withCount('bookings')->get();
        
        return Inertia::render('Accommodations/Index', ['accommodationsAll' => $accommodationsAll]);
    }

    public function show(Accommodation $accommodation)
    {   
        return Inertia::render('Accommodations/ShowAccommodation', ['accommodationsData' => $accommodation]);
    }

    public function createAccommodation()
    {
            // $accommodation = Accommodation::all();

        // return Inertia::render('Accommodations/CreateEdit', [
        //     'accommodation' => $accommodation,
        // ]);
        return Inertia::render('Accommodations/CreateEdit');
    }

    public function editAccommodation(Accommodation $accommodation)
    {
        
        return Inertia::render('Accommodations/CreateEdit', [
            'accommodation' => $accommodation, 'edit' => true,
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
        return redirect('/accommodations')
            ->with('message', 'Accommodation Successfully Created');
    }

    public function edit(Request $request)
    {
        $newAcc = $request->all();

        $newAccAddress = $newAcc['address'];
        $newAccNumRooms = $newAcc['numRooms'];

        $accommodation = Accommodation::find($newAcc['id']);
        $accommodation->address = $newAccAddress;
        $accommodation->numRooms = $newAccNumRooms;
        $accommodation->save();
        

        $accommodations = Accommodation::all();
        return redirect('/accommodations')
            ->with('message', 'Accommodation Successfully Edited');

    }

    public function delete(Request $request) 
    {
        $newAcc = $request->all();
        $id = $newAcc['id'];
        Accommodation::where('id', $id)->firstorfail()->delete();
        
        return redirect('/accommodations')
            ->with('message', 'Accommodation Successfully Deleted');
    }
}
