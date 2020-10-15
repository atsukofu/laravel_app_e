<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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
        $hello = 'Hello! this is Middleware!!';
        $bye = 'Good-bye, Middleware...';
        $data = [
            'hello'=>$hello,
            'bye'=>$bye,
        ];
        $request->merge($data);
        return $next($request);
    }
}
