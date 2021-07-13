<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class AgentMiddleware
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
        if(Auth::check() && Auth::user()->role_id ==2){
            return $next($request);

        }

        else{
            return redirect()->route('login');
        }
    }
}
