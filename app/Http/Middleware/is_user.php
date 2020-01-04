<?php

namespace App\Http\Middleware;

use Closure;

class is_user
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
        if((auth()->user()->is_doctor==0)&&(auth()->user()->is_admin==0))
        {return $next($request);}
        return redirect('/')->with('error',"You don't have admin or user access.");

    }
}
