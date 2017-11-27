<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Coordinador
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
        if(Auth::user()->type != 'tutorado') {

            foreach (Auth::user()->roles->unique('rol') as $rol) {
                if($rol->rol == 'coordinador' ) return $next($request);
            }

        }
        
        return redirect()->back()->withErrors(array('message' => 'No tienes permisos para acceder a esta ruta'));
    }
}
