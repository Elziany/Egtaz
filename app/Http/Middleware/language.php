<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('applocal') AND array_key_exists(session()->get('applocal'),config('language'))){
            App::setlocale(session()->get('applocal'));
            return $next($request);
        }
        else{
            App::setLocale(config('app.fallback_locale'));
            return $next($request);
           }
        return $next($request);
    }
}
