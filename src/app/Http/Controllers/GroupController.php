<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupDetails;
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

    public function create()
    {
        return Inertia::render('Group/CreateEdit', []);
    }

    public function store(Request $request)
    {
        $newGroup = $request->all();
        $newGroupDetails = $newGroup['details'];

        $group = new Group();
        $group->contact_firstname = $newGroup['contactFirstName'];
        $group->contact_lastname = $newGroup['contactLastName'];
        $group->contact_phone_number = $newGroup['contactPhoneNumber'];
        $group->group_size = 1+count($newGroupDetails['members']);
        $group->save();

        $groupDetails = new GroupDetails();
        $groupDetails->has_pets = $newGroupDetails['hasPets'];
        $groupDetails->group_members = json_encode($newGroupDetails['members']);
        $groupDetails->alternative_contact_information = json_encode($newGroupDetails['alternativeContactInfo']);

        $group->details()->save($groupDetails);
        $groupDetails->save();

        return redirect()->route('groups')->with('message', 'Group Created');
    }

    public function destroy(Group $group)
    {
        $group->details()->delete();
        $group->delete();

      //  return back()->with('message', "Group deleted.");
      return redirect()->route('groups')->with('message', 'Group Deleted');
    }

    /**
     * Show the creation/edit page for a pa
     *
     * @param  Group $group
     * @return \Illuminate\View\View
     */
    public function edit(Group $group)
    {
        return Inertia::render('Group/CreateEdit', [
            'group' => $group,
        ]);
    }
}
