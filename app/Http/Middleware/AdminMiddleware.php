<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->admin) {
            return $next($request);
        }

        // Caso o usuário não seja admin, redireciona para uma página (exemplo: login)
        // return redirect()->route('login');
        abort(403, 'Acesso não autorizado.');
    }
}
