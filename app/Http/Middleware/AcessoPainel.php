<?php

namespace App\Http\Middleware;


use Closure;

class AcessoPainel
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
        if ('nivel_user' == 1){
            return view('home');
        }
        
        return $next($request);
    }
}
