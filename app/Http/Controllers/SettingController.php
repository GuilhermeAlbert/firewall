<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Language;
use App\ModificationLog;
use App;
use Config;

class SettingController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.settings.list');
    }

    public function edit(Request $request)
    {
        // Getting general settings
        $settings = Setting::first();

        // Getting all languages
        $languages = Language::all();

        // Rendering content on view
        return response()->view('layouts.app.settings.edit', [
            'languages' => $languages, 
            'settings' => $settings
        ]);
    }    

    public function edit_settings(Request $request)
    {
        // Getting settings
        $settings = Setting::first();

        // Saving settings
        $settings->locale = $request['locale'];
        $settings->fallback_locale = $request['fallback_locale'];
        $settings->timezone = $request['timezone'];
        $settings->debug = $request['debug'];
        $settings->debugbar = $request['debugbar'];
        $settings->mail_port = $request['mail_port'];
        $settings->mail_host = $request['mail_host'];
        $settings->mail_from = $request['mail_from'];
        $settings->mail_from_name = $request['mail_from_name'];
        $settings->mail_username = $request['mail_username'];
        $settings->mail_password = $request['mail_password'];
        $settings->mail_encryption = $request['mail_encryption'];
        $settings->save();

        // Salva log de modificação
        ModificationLog::saveLog($settings->id, $request->user()->id, 14); 

        // Sending data to view
        return redirect()->route('settings.edit');
    }      
}
