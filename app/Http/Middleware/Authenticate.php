<?php

namespace Sco\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @param  string|null              $guard
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        $url = $guard == 'admin' ? route('backend.login') : '/login';
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest($url);
            }
        }

        return $next($request);
    }
}
