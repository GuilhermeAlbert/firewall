<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use App\Setting;

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
        $settings = Setting::first();

        config([
            'app.debug' => $settings->debug
        ]); 

        return $next($request);
    }
}
