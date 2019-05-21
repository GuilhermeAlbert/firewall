<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\User;
use App\Permission;

class UserController extends Controller
{
public function list(Request $request)
    {
        $users = DB::table('users')
            ->join('permissions', 'permissions.id', '=', 'users.permission_id')
            ->select('permissions.description as permission', 'users.*')
            ->where('users.status_id', '!=', '3')
            ->get();        

        return response()->view('layouts.app.users.list', [
            'users' => $users,
        ]);
    }

    public function add(Request $request){

        // Busca permissões de acordo com o nível de acesso diferente de S (Sistema)
        $permissions = Permission::all()->where("access_level_id", "!=", "1");

        return view('layouts.app.users.add', [
            'permissions' => $permissions,
        ]);        
    }    

    public function edit(Request $request, $id){
        
        $user = User::find($id);
        $permissions = Permission::all()->where("access_level_id", "!=", "1");

        return view('layouts.app.users.edit',
            [
                'id' => $id,
                'permissions' => $permissions,
                'user' => $user,
            ]
        );       
    } 

    public function add_user(Request $request)
    {
        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));
        $users->permission_id = $request->input('permission_id');
        $users->save();

		return redirect()->route('users.list');
    }    

    public function edit_user(Request $request)
    {
        $user = User::find($request->input('id'));
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->permission_id = $request['permission_id'];        
        $user->save();

        return redirect()->route('users.list');
    }   

    public function delete_user(Request $request)
    {
        $user = User::find($request->input('id'));
        
        // Não permite excluir o usuário 1
        // if($user->id != 1){
            try {
                $user->status_id = 3;
                $user->save();

                return redirect()->route('users.list');
            } catch (Exception $e) {
                return redirect()->route('users.list');
            }
        // } else{
            // return redirect()->route('users.list');
        // }
    }     
}
