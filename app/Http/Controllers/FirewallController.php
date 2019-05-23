<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirewallController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.firewall.list');
    }
}
