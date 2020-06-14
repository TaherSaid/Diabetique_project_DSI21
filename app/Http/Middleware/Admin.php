<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'user') {
            return redirect()->route('home');
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('dashboardAdmin');
        }
        // return $next($request);
    }
}
