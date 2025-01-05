<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated as RedirectIfAuthenticatedMiddleware;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated extends RedirectIfAuthenticatedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response | JsonResponse
    {
        if(Auth::guard('admin')->check()){
            return redirect(route('admin.adminpage.index'));
        } else if (Auth::guard('direktur')->check()){
            return redirect(route('direktur.dashboard.index'));
        } else if (Auth::guard('manager')->check()){
            return redirect(route('manager.dashboard.index'));
        } else if (Auth::guard('karyawan')->check()){
            return redirect(route('karyawan.dashboard.index'));
        }
        return $next($request);
    }
}
