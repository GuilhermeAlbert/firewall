<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Config;
use App\Setting;
use App\Preference;
use App;

class CheckAppSettings
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
        // Getting general settings
        $settings = Setting::first();
        
        // Setting general and mail settings 
        config([
            'mail.driver' => $settings->mail_driver,
            'mail.host' => $settings->mail_host,
            'mail.port' => $settings->mail_port,
            'mail.from' => $settings->mail_from,
            'mail.encryption' => $settings->mail_encryption,
            'mail.username' => $settings->mail_username,
            'mail.password' => $settings->mail_password,
            'app.debug' => $settings->debug
        ]);  

        // Setting general and personal language
        if(Auth::user()){
            // Getting the personal preferences
            $preferences = Preference::all()->where('user_id', '=', $request->user()->id)->first();

            if ($preferences->locale != null) {
                // Setting the language with locale preference
                App::setLocale($preferences->locale);
            }            
        } else{
            // Setting the language with default setting
            App::setLocale($settings->locale);
        }           

        // Sending to next step
        return $next($request);
    }
}
