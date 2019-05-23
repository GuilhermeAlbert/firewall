<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Language;
use App;

class SettingController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.settings.list');
    }

    public function edit(Request $request, $locale='pt-br')
    {
        $settings = Setting::first();
        $languages = Language::all();
        App::setLocale($locale);
        return response()->view('layouts.app.settings.edit', [
            'languages' => $languages, 
            'settings' => $settings
        ]);
    }    
}
