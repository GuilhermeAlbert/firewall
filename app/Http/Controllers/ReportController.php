<?php

namespace App\Http\Controllers;
use App\Keyword;
use App\IpAddress;
use App\MacAddress;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.reports.list');
    }

    public function list_access(Request $request)
    {
        //Getting data
        // $access = AccessLog::getAccess();

        // Sending data to view
        return response()->view('app.reports.access.list');
    }

    public function list_allow(Request $request)
    {
        // Getting data
        $allows = IpAddress::getByAllow();

        // Sending data to view
        return response()->view('app.reports.allow.list', [
            'allows' => $allows
        ]);
    }

    public function list_deny(Request $request)
    {
        // Getting data
        $denies = IpAddress::getByDeny();

        // Sending data to view
        return response()->view('app.reports.deny.list', [
            'denies' => $denies
        ]);
    }

    public function list_devices(Request $request)
    {
        // Sending data to view
        return response()->view('app.reports.devices.list');
    }

    public function list_groups(Request $request)
    {
        // Sending data to view
        return response()->view('app.reports.groups.list');
    }                  
}
