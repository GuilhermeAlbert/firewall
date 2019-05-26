<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    public function list(Request $request)
    {
        $permissions = Permission::all()->where('status', '!=', '1');

        return response()->view('layouts.app.permissions.list', [
            'permissions' => $permissions,
        ]);
    }
}
