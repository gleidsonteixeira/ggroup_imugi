<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class Ranking
{
    public function handle($request, Closure $next)
    {
        $cargo = strtolower(auth()->user()->cargo->cargo_nome);
        if($cargo == "professor" || $cargo == "aluno"){
            return Redirect::to("/portal");
        }

        return $next($request);
    }
}
