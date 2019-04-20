<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirewallController extends Controller
{
    public function listar(Request $request)
    {
        return response()->view('layouts.app.firewall.listar');
    }
}
