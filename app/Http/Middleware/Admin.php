<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class Admin
{
    public function handle($request, Closure $next)
    {
        $cargo = strtolower(auth()->user()->cargo->cargo_nome);
        if($cargo == "professor" || $cargo == "aluno"){
            return Redirect::to("/portal");
        }else if($cargo == "ranking"){
            return Redirect::to("/ranking");
        }

        return $next($request);
    }
}
