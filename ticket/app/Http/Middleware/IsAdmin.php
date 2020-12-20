<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role == 'employe'||'admin'){
            return $next($request);
        }
   
        return redirect(‘home’)->with(‘error’,".عذرا، انت لا تمتلك صلاحيات الادمن");
    }
    }

