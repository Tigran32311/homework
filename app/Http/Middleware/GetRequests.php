<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GetRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->getPathInfo()=='/welcome4') {
            return redirect('/welcome3/Tigran');
        }

        return $next($request);
    }
}
