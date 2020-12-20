<?php

namespace App\Http\Middleware;

use App\Models\Ticket;
use Closure;
use Illuminate\Http\Request;
use Auth;
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
     // $finduserfromticket = Ticket::find(Auth::id);
        if(auth()->user()->role == 'employee'||'admin'){
            return $next($request);
        }

        return redirect('home')->with('error',".عذرا، انت لا تمتلك صلاحيات الادمن");
    }
    }

