<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\Preference;
use App\ModificationLog;

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
        $preferences = Preference::all()->where('user_id', '=', $request->user()->id)->where('status_id', '=', '1')->first();

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
        ModificationLog::saveLog($preferences->id, $request->user()->id, 10);      

        // Sending data to view
        return redirect()->route('preferences.edit');
    }      
}
