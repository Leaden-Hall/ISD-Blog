<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isAdmin
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
        if(Auth::user()) {
            if (Auth::user()->roles_id == 1) {
                return $next($request);
            }
            return redirect('/admin/login')->with('error', 'You are not an administrator');
        }
        return redirect('/admin/login')->with('error', 'You are not logged in');
    }
}
