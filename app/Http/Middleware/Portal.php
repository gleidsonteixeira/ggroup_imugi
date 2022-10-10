<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class Portal
{
    public function handle($request, Closure $next)
    {
        $cargo = strtolower(auth()->user()->cargo->cargo_nome);
        if($cargo == "ranking"){
            return Redirect::to("/ranking");
        }
        return $next($request);
    }
}
