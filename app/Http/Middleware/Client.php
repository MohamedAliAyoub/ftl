<?php

namespace App\Http\Middleware;

use Closure;

class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
      public function handle($request, Closure $next, $guard = null)
    {
        if (! \Auth::guard('client_web')->check()) {
            return redirect('/client/login');
        }

        return $next($request);
    }
}
