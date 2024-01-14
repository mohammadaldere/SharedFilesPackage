<?php

namespace SharedFiles\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
     
        
            $user = Auth::user();
    
            if ($user->hasRole($role)) {
                return $next($request);
            }
    
            abort(401, 'Unauthorized');
        
    }
}
