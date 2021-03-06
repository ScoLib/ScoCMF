<?php

namespace Sco\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Route;
use URL;

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
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                $url = $guard == 'admin' ? route('admin.login') : '/login';
                return redirect()->guest($url);
            }
        }

        Auth::shouldUse($guard);

        if ($guard == 'admin') {
            if (!$request->user()->can(Route::currentRouteName())) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json(error('您没有权限执行此操作'));
                } else {
                    $previousUrl = URL::previous();
                    return response()->view('admin::errors.403', compact('previousUrl'));
                }
            }
        }

        return $next($request);
    }
}
