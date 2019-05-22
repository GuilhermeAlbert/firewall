<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.preferences.list');
    }
}
