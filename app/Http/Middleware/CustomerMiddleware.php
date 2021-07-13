<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CustomerMiddleware
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
        // check if user is authenticated and role is correct for this dashboard
        if(Auth::check() && Auth::user()->role_id ==1){
            return $next($request);

        }

        else{
            return redirect()->route('login');
        }
        
    }
}
