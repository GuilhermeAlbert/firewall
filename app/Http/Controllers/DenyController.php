<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FirewallController;
use App\Domain;

class DenyController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.list');
    }
}
