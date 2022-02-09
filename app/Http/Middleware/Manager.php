<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Manager
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
        if(!Auth::check()){
            return redirect('/login');
        }
        // Role 1 for admin
        if(Auth::user()->role=='administrator'){
            return redirect()->route('admin');
        }
        // Role 2 for manager
        if(Auth::user()->role=='manager'){
            return $next($request);
        }
        // Role 3 for user
        if(Auth::user()->role=='user'){
            return redirect()->route('user');
        }
    }
}
