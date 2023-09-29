<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EmpresaMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('empresa')->check()) {
            return redirect()->route('cliente.login');  
        }

        return $next($request);
    }
}
