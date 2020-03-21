<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedStudent
{
    /**
     * SI EL ESTUDIANTE ESTA AUTENTICADO
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('student')->check()) {
            return redirect('/students/home');
        }
        return $next($request);
    }
}
