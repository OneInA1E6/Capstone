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
    public function show()
    {
        $regions = Region::all();
        $accommodations = Accommodation::all();
        $groups = Group::all();
        

        return Inertia::render('Dashboard/Index', [
            'regions' => $regions,
            'accommodations' => $accommodations,
            'groups' => $groups,
        ]);
    }
}
