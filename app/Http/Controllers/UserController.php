<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Permission;
use App\ModificationLog;
use App\Preference;
use App\Setting;

class UserController extends Controller
{
    public function list(Request $request)
    {
        // Getting users and the permission's description
        $users = User::getActives();

        // Sending data to view
        return response()->view('app.users.list', [
            'users' => $users,
        ]);
    }

    public function add(Request $request){

        // Getting permissions according the access level different of S (System)
        $permissions = Permission::getByAccessLevelUser();

        // Sending data to view
        return view('app.users.add', [
            'permissions' => $permissions,
        ]);        
    }    

    public function edit(Request $request, $id){
        
        // Getting user by id
        $user = User::find($id);

        // Getting permissions by access level
        $permissions = Permission::getByAccessLevelUser();

        // Sending data to view
        return view('app.users.edit',
            [
                'id' => $id,
                'permissions' => $permissions,
                'user' => $user,
            ]
        );       
    } 

    public function add_user(Request $request)
    {
        // Saving user on database
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->permission_id = $request->input('permission_id');
        $user->save();

        // Saving user default preferences
        $settings = Setting::first();
        $preferences = new Preference();
        $preferences->locale = $settings->locale;
        $preferences->receive_log_mails = 'true';
        $preferences->user_id = $user->id;
        $preferences->save();

        // Save modification logs
        $log = new ModificationLog();
        $log->ip_address = $_SERVER['REMOTE_ADDR'];
        $log->type = 'add';
        $log->object = $user->id;
        $log->before = 'add';
        $log->after =  'add';
        $log->description = 'new user';
        $log->user_id = Auth::user()->id;
        $log->save();

		return redirect()->route('users.list');
    }    

    public function edit_user(Request $request)
    {
        // Getting user by input id
        $user = User::find($request->input('id'));

        // Saving data updated on database 
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->permission_id = $request['permission_id'];        
        $user->save();

        // Saving modification logs
        ModificationLog::saveLog($user->id, $request->user()->id, 2);

        // Sending data to view
        return redirect()->route('users.list');
    }   

    public function delete_user(Request $request, $id)
    {
        // Getting user by input id
        $user = User::find($id);
        
        // Don't delete the first user (adm)
        if($user->id != 1){
            
            // Trying to delete
            try {
                // Setting a status_id for three, by the logical exclusion
                $user->status_id = 3;
                $user->save();

                // Saving modification log
                ModificationLog::saveLog($user->id, $request->user()->id, 4);

                // Sending data to view
                return redirect()->route('users.list');
            
            } catch (Exception $e) {
                
                // Sending data to view
                return redirect()->route('users.list');
            }
        } else{
            // Sending data to view
            return redirect()->route('users.list');
        }
    }     
}
