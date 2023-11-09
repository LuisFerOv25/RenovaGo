<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Verificar si el usuario está autenticado en el guard 'users', 'admin' o 'empresa'
        if (Auth::guard('web')->check() || Auth::guard('admin')->check() || Auth::guard('empresa')->check()) {
            
            return $next($request);

        }

        // Si no está autenticado en ninguno de los guards, redirigir al usuario a la página de inicio de sesión de cliente
        return redirect()->route('cliente.login');
    }
}

