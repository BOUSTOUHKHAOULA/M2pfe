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
        if(Auth::user()->usertype=='admin') {
            return $next($request);
        }
        else{
            if(Auth::user()->usertype=='specialiste') {
                return redirect('/pagespecialiste/diagnostics/index');
            }
            else{
                if(Auth::user()->usertype=='traitant') {
                    return redirect('/pagetraitant');
                }
            }

        }
    }
}
