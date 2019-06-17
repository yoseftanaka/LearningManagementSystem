<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if(Auth::user()->role=="admin" && Auth::check()){
            return $next($request);
        }
        else if(Auth::user()->role=="member" && Auth::check()){
            return redirect('/user/uselesshome');
        }
        else if(Auth::user()->role=="teacher" && Auth::check()){
            return redirect('/teacher/uselesshome');
        }
        else{
            return redirect('/');
        }
    }
}
