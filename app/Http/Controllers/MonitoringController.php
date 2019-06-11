<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function list_ports(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.monitoring.ports.list');
    }

    public function list_http_https(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.monitoring.http_https.list');
    }    
}
