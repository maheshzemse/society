<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
        if ($guard == "watchman" && Auth::guard($guard)->check()) {
            return redirect('/watchman');
        }
        if ($guard == "superadmin" && Auth::guard($guard)->check()) {
            return redirect('/superadmin');
        }
        if ($guard == "secretary" && Auth::guard($guard)->check()) {
            return redirect('/secretary');
        }
        if ($guard == "treasurer" && Auth::guard($guard)->check()) {
            return redirect('/treasurer');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}