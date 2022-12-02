<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Accommodation;
use App\Models\Group;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $regions = Region::all();
        $accommodations = Accommodation::where('numRooms', 9)->first();
        $groups = Group::all();

        return Inertia::render('Dashboard/Index', [
            'regions' => $regions,
            'accommodations' => $accommodations,
            'groups' => $groups,
        ]);
    }

    public function search(Request $request)
    {
        $query_address = $request -> query('query_address');
        $query_numRooms = $request -> query('query_numRooms');
        $addressObj = Accommodation::where('address', 'LIKE', '%'.$query_address.'%')->where('numRooms', 'LIKE', '%'.$query_numRooms.'%')->paginate(10);
        return $addressObj;
    }
}
