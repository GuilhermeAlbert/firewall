<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\Preference;

class PreferenceController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('layouts.app.preferences.list');
    }

    public function edit(Request $request)
    {
        // Getting languages list
        $languages = Language::all();

        // Getting the first authenticate user preference
        $preferences = Preference::all()->where('user_id', '=', $request->user()->id)->first();

        // Rendering content to view
        return response()->view('layouts.app.preferences.edit', [
            'languages' => $languages,
            'preferences' => $preferences
        ]);
    }    

    public function edit_preferences(Request $request)
    {
        // Getting the first preference of the authenticate user
        $preferences = Preference::all()->where('user_id', '=', $request->user()->id)->first();

        // Setting the updates on database
        $preferences->locale = $request['locale'];
        $preferences->receive_log_mails = $request['receive_log_mails'];
        $preferences->save();

        // Saving modification logs
        // $log = new ModificationLog();
        // $log->ip_address = $_SERVER['REMOTE_ADDR'];
        // $log->type = 'edit';
        // $log->object = "";
        // $log->before = 'edit';
        // $log->after =  'edit';
        // $log->description = 'edit preferences';
        // $log->user_id = Auth::user()->id;
        // $log->save();  

        // Sending data to view
        return redirect()->route('preferences.edit');
    }      
}
