<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class DashboardController extends Controller
{
    public function list(Request $request)
    {
        $active_users = User::getActiveCount();

        return response()->view('layouts.app.dashboard.list', [
            'active_users' => $active_users,
        ]);    	
    }
}
