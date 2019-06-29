<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpAddressController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.ip_address.list');
    }  
}
