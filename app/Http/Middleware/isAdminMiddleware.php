<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // auth()->user() aconsegueixo la informació de l'usuari autentificat
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        // Continua amb l'execució corresponent
        return $next($request);
    }
}
