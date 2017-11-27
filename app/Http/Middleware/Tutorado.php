<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Tutorado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->type == 'tutorado') {
            
            return $next($request);

        }

        return redirect()->back()->withErrors(array('message' => 'No tienes permisos para acceder a esta ruta'));
    }
}
