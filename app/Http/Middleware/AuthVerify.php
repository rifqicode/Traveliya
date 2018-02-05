<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AuthVerify
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
      if (Auth::guard($guard)->check()) {
          if (auth()->user()->verify != 1) {
            flash('Verifikasi woe')->warning();
          }
      }
      return $next($request);
    }
}
