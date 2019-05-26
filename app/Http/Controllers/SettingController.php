<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Language;
use ModificationLog;
use App;

class SettingController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.settings.list');
    }

    public function edit(Request $request)
    {
        $settings = Setting::first();
        $languages = Language::all();
        
        return response()->view('layouts.app.settings.edit', [
            'languages' => $languages, 
            'settings' => $settings
        ]);
    }    

    public function edit_settings(Request $request)
    {
        $settings = Setting::first();
        $settings->locale = $request['locale'];
        $settings->fallback_locale = $request['fallback_locale'];
        $settings->timezone = $request['timezone'];
        $settings->debug = $request['debug'];
        $settings->debugbar = $request['debugbar'];
        $settings->mail_port = $request['mail_port'];
        $settings->mail_host = $request['mail_host'];
        $settings->mail_username = $request['mail_username'];
        $settings->mail_password = $request['mail_password'];
        $settings->mail_encryption = $request['mail_encryption'];
        $settings->save();

        // Salva log de modificação
        // $log = new ModificationLog();
        // $log->ip_address = $_SERVER['REMOTE_ADDR'];
        // $log->type = 'edit';
        // $log->object = "";
        // $log->before = 'edit';
        // $log->after =  'edit';
        // $log->description = 'edit settings';
        // $log->user_id = Auth::user()->id;
        // $log->save();  

        return redirect()->route('settings.edit');
    }      
}
