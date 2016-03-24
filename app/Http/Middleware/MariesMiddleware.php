<?php

namespace App\Http\Middleware;

use Closure;

class MariesMiddleware
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
        if($request->user()->status === 'admin') return $next($request);

        if($request->segment(2) != $request->user()->mariage_id)  
            return redirect('/')->with('message', 'Sorry, not sorry');     

        return $next($request);
    }
}
