<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class users
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
        if(session()->get('username')===""){
            return redirect()->back()->with('msg','you must login in first');
        }
        else{
        return $next($request);
        }
    }
}
