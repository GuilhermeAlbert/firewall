<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessLog;
use App\ModificationLog;

class ActivityLogController extends Controller
{
    public function list(Request $request)
    {
        $access_logs = AccessLog::getPersonalLogs(Auth()->user()->id);

        $modification_logs = ModificationLog::getPersonalLogs(Auth()->user()->id);

        return response()->view('app.activity_logs.list', [
            'access_logs' => $access_logs,
            'modification_logs' => $modification_logs
        ]);
    }
}
