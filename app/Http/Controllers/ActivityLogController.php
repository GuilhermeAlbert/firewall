<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessLog;

class ActivityLogController extends Controller
{
    public function list(Request $request)
    {
        $access_logs = AccessLog::all()->where("user_id", "=", Auth()->user()->id);

        return response()->view('layouts.app.activity_logs.list', [
            'access_logs' => $access_logs
        ]);
    }
}
