<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class DashboardController extends Controller
{
    public function listar(Request $request)
    {
        $usuarios_ativos = User::all()->count();

        return response()->view('layouts.app.dashboard.listar', [
            'usuarios_ativos' => $usuarios_ativos,
        ]);    	
    }
}
