<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenyController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.list');
    }

    public function list_by_mac(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.mac_address.list');
    }  

    public function list_by_ip(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.ip_address.list');
    }  

    public function list_by_keywords(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.keywords.list');
    }  
}
