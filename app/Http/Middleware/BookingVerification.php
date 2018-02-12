<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class BookingVerification
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

      } else {
        flash('Harap Login Terlebih Dahulu untuk memudahkan pendataan');
        return redirect('/login');
      }
        return $next($request);
    }
}
