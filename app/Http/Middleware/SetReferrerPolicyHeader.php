<?php

namespace App\Http\Middleware;

use Closure;

class SetReferrerPolicyHeader
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        return $response;
    }
}
