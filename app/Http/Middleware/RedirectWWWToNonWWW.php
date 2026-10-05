<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectWWWToNonWWW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (strpos($request->getHost(), 'www.') === 0) {
            $nonWwwUrl = 'https://' . substr($request->getHost(), 4) . $request->getRequestUri();
            return redirect()->to($nonWwwUrl, 301);
        }

        return $next($request);
    }
}
