<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::check()){
            //if (\Auth::user()->is_admin == 1)
            if (\Auth::user())
            {
                return $next($request);

            }else{
                return redirect('/');
            }
        }

        return redirect('/login');

        //return redirect()->guest('/');
    }
}
