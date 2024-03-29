<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PetugasRole
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
        if( Auth::user()->andre_id_level == 2 ) {
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
