<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isMember
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
        if(Auth::user()->role=="member" && Auth::check()){
            return $next($request);
        }
        else if(Auth::user()->role=="teacher" && Auth::check()){
            return redirect('/teacher/uselesshome');
        }
        else if(Auth::user()->role=="admin" && Auth::check()){
            return redirect('/uselesshome');
        }
        else{
            return redirect('/');
        }
    }
}
