<?php

namespace App\Http\Middleware;

use Closure;
use App\Setting;
use App\Preference;
use App;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Getting the application settings
        $settings = Setting::first();

        // Getting the personal preferences
        $preferences = Preference::all()->where('user_id', '=', $request->user()->id)->first();

        if ($preferences->locale != null) {
            // Setting the language with locale preference
            App::setLocale($preferences->locale);
        } else{
            // Setting the language with default setting
            App::setLocale($settings->locale);
        }       

        return $next($request);
    }
}
