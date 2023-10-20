<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if ($request->user()->rol === 1) {
            // en case de que sea rol = 1 (desarrollador), redireccionar al usuario hacia el home
            return redirect()->route('home');
        }

        return $next($request);
    }
}