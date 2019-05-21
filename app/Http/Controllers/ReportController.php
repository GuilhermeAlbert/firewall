<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.report.list');
    }
}
