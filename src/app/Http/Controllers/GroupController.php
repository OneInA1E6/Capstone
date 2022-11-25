<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GroupController extends Controller
{
    /**
     * Show the list of all the groups
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $groups = Group::with('details')->get();

        return Inertia::render('Group/Index', [
            'groups' => $groups,
        ]);
    }

     /**
     * Show the profile for a given user.
     *
     * @param  Group $group
     * @return \Illuminate\View\View
     */
    public function show(Group $group)
    {
        return Inertia::render('Group/ShowGroup', [
            'group' => $group,
        ]);
    }
}
