<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use App\Setting;

class CheckMailSettings
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
        $settings = Setting::first();
        
        config([
            'mail.driver' => $settings->mail_driver,
            'mail.host' => $settings->mail_host,
            'mail.port' => $settings->mail_port,
            'mail.from' => $settings->mail_from,
            'mail.encryption' => $settings->mail_encryption,
            'mail.username' => $settings->mail_username,
            'mail.password' => $settings->mail_password
        ]);        

        return $next($request);
    }
}
