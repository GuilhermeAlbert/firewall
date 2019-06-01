<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\ModificationLog;

class GroupController extends Controller
{
    public function list(Request $request)
    {
        // Getting groups data
        $groups = Group::all()->where('status_id', '=', '1');

        // Sending data to view
        return response()->view('layouts.app.groups.list', [
            'groups' => $groups,
        ]);
    }

    public function select_group(Request $request, $id)
    {
        // Getting the selected group
        $group = Group::find($id);

        // Getting all groups to set selected false
        $groups = Group::all();
        
        // Setting all groups to unselected
        foreach ($groups as $key => $grp) {
            // Saving data updated on database 
            $grp->selected = "false";
            $grp->save();
        }        

        // Selecting the selected group
        $group->selected = "true";
        $group->save();

        // Creating modification logs
        $log = new ModificationLog;

        // Saving modification logs
        $log->ip_address = $_SERVER['REMOTE_ADDR'];
        $log->object = $group->id;
        $log->user_id = $request->user()->id;
        $log->operation_id = 2;
        $log->save();         
        
        // Rendering data on view
        return redirect()->route('groups.list');        
    }
}
