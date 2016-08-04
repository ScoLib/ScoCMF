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
        $url = $guard == 'admin' ? route('admin.login') : '/login';
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest($url);
            }
        }

        if ($guard == 'admin') {
            if (!Auth::guard('admin')->user()->can(Route::currentRouteName())) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json(error('您没有权限执行此操作'));
                } else {
                    $previousUrl = URL::previous();
                    return view('admin::errors.403', compact('previousUrl'));
                }
            }
        }

        return $next($request);
    }
}
