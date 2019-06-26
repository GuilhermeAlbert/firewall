<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllowController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.list');
    }

    public function list_by_mac(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.mac_address.list');
    }  

    public function list_by_ip(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.ip_address.list');
    }  

    public function list_by_keywords(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.keywords.list');
    }            
}
