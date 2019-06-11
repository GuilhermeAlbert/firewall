<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.reports.list');
    }

    public function list_access(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.reports.access.list');
    }

    public function list_allow(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.reports.allow.list');
    }

    public function list_deny(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.reports.deny.list');
    }

    public function list_devices(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.reports.devices.list');
    }

    public function list_groups(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.reports.groups.list');
    }                  
}
