<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * @param mixed $request
     * @param \Closure $next
     * @param mixed $role
     * @return Response
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->user()->role !== $role) {
            abort(403, 'Unauthorized.');
        }
        return $next($request);
    }
}
