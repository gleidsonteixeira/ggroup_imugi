<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class ApostilaController extends Controller
{

    protected $usuario;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->usuario = Auth::user();

            return $next($request);
        });
    }

    public function apostila1($unidade, $item)
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);
        return view('apostila1' . '/' . $unidade . '/' . $item . '', compact('aluno'));
    }

    public function apostila2($unidade, $item)
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);
        return view('apostila2' . '/' . $unidade . '/' . $item . '', compact('aluno'));
    }
    public function apostila3($unidade, $item)
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);
        return view('apostila3' . '/' . $unidade . '/' . $item . '', compact('aluno'));
    }
    public function apostila4($unidade, $item)
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);
        return view('apostila4' . '/' . $unidade . '/' . $item . '', compact('aluno'));
    }
    public function apostila5($unidade, $item)
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);
        return view('apostila5' . '/' . $unidade . '/' . $item . '', compact('aluno'));
    }
    public function apostila6($unidade, $item)
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);
        return view('apostila6' . '/' . $unidade . '/' . $item . '', compact('aluno'));
    }

}
