<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function listar(Request $request)
    {
        return response()->view('layouts.app.dashboard.listar');
    }
}
