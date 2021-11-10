<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RGroup
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
        if($request->age && $request->age<11){
            return redirect('rnoaccess');
        }
        return $next($request);
    }
}
