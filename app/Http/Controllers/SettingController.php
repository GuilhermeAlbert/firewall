<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Language;

class SettingController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.settings.list');
    }

    public function edit(Request $request)
    {
        $settings = Setting::all();
        $languages = Language::all();

        return response()->view('layouts.app.settings.edit', [
            'languages' => $languages, 
            'settings' => $settings
        ]);
    }    
}
