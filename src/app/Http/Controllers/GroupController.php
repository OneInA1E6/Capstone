<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
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


    public function destroy(Group $group)
    {
        $group->details()->delete();
        $group->delete();

      //  return back()->with('message', "Group deleted.");
      return redirect()->route('groups')->with('message', 'Group Deleted');
    }
}
