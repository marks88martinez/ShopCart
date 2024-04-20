<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TipoUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,  $tipoUser)
    {
        if ($request->user() && $request->user()->tipoUser != $tipoUser) {
            return redirect('/'); // O a donde quieras redirigir si el usuario no tiene el tipo adecuado
        }

        return $next($request);
    }
}
