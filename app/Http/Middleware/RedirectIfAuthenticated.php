<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // Redirect based on user's role
            if (Auth::user()->isAdmin()) {
                return redirect('/admin/dashboard');
            } elseif (Auth::user()->isUser()) {
                return redirect('/user/dashboard');
            } 
            elseif (Auth::user()->isEventManager()) {
                return redirect('/event-manager/dashboard');
            }
            elseif (Auth::user()->isSeoManager()) {
                return redirect('/seo-manager/dashboard');
            }
            else {
                // Default redirection if no specific role-based redirection is defined
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
