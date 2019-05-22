<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.settings.list');
    }
}
