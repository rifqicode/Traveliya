<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Zizaco\Entrust\EntrustFacade as Entrust;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard=null)
    {

      if (Auth::guard($guard)->check()) {
        if (!Entrust::hasRole('admin')) {
           abort(404);
        }
      }
        return $next($request);
    }
}
