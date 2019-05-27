<?php

namespace BasicLaravel\Http\Middleware;

use Closure;

class LogQueries
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
        // dd('Hi there!');
        return $next($request);
    }
}
