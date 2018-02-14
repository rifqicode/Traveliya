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
        flash('Harap login terlebih dahulu sebelum melakukan pemesanan');
        return redirect('/login');
      }
        return $next($request);
    }
}
