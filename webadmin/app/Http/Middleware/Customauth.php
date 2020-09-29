<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Customauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if(!session()->has('user_session')){
        return redirect('/admin/login');
      }
        return $next($request);
    }
}
