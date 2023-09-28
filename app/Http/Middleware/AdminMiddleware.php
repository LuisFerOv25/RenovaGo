<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            // Si el usuario no está autenticado en el guardia 'admin', redirige o toma otra acción según tus necesidades.
            return redirect()->route('cliente.login');  // Puedes redirigir a la página de inicio de sesión de administrador
        }

        return $next($request);
    }
}
