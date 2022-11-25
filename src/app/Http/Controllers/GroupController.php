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

    public function update(Request $request, Group $group)
    {
        $editGroup = $request->all();
        $editGroupDetails = $editGroup['details'];

        // $group = Group::where('id',  1)->firstOrFail();
        $group->contact_firstname = $editGroup['contactFirstName'];
        $group->contact_lastname = $editGroup['contactLastName'];
        $group->contact_phone_number = $editGroup['contactPhoneNumber'];
        $group->group_size = 1+count($editGroupDetails['members']);
        $group->save();

        $groupDetails = GroupDetails::where('group_id', $group->id)->first();
        $groupDetails->has_pets = $editGroupDetails['hasPets'];
        $groupDetails->group_members = json_encode($editGroupDetails['members']);
        $groupDetails->alternative_contact_information = json_encode($editGroupDetails['alternativeContactInfo']);

        $group->details()->save($groupDetails);
        $group->save();

        return redirect()->route('groups')->with('message', 'Group Created');
    }

    public function destroy(Group $group)
    {
        $group->details()->delete();
        $group->delete();

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
        $details = GroupDetails::where('group_id', $group->id)->firstOrFail();

        return Inertia::render('Group/CreateEdit', [
            'group' => $group,
            'details' => $details,
            'edit' => true
        ]);
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
}
