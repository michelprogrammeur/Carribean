<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

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

        if ($request->user()->status != 'admin')
        {
            return redirect('/')->with('message','Vous n\'êtes pas autorisé à rentrer !');
        }     

        return $next($request);
    }
}
