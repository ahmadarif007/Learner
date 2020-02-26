<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        //================== default===================
        // return $next($request);

        // ===================== new ================

        if(Auth::check() && Auth::user()->role->id == 1)
        {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->role->id == 2) 
        {
           return $next($request);
        } elseif (Auth::check() && Auth::user()->role->id == 3) 
        {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->role->id == 4) 
        {
            return $next($request);
        } else {
            return redirect()->route('login');
        }

    }
}
