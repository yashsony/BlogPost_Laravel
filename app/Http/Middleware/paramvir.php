<?php

namespace App\Http\Middleware;

use Closure;

class paramvir
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
        if($request->a<10)
        {
            echo "You cannot enter Home";
        }
        else
        {
            echo "welcome home";
        }
        return $next($request);

    }
}
