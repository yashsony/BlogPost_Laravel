<?php

namespace App\Http\Middleware;

use Closure;

class checkage
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
        if($request->a>10)
        {
            echo "Age is greater than 10";
        }
        else
        {
            echo "Age is less than 10";
        }
        return $next($request);
    }
}

/* Global Middleware - on all pages
    Routed Middleware - on particular page
    Group Middleware - on some group of pages */