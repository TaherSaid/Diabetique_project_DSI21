<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;


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
         else if (Auth::user()->role == 'admin') {
            return redirect()->route('dashboardAdmin');
        }
        return $next($request);
    }
}
