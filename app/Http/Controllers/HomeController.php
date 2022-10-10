<?php

namespace App\Http\Controllers;

use App\Unidade;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $matricula = Auth::user()->id;
            $aluno = User::find($matricula);
            return view('portal/home/index', compact('aluno'));
        } else {
            return redirect('/');
        }
    }
    public function aprimorar()
    {
        return view('site/aprimorar/index');
    }
    
    public function apostila1Intro()
    {
        if (Auth::check()) {
            $matricula = Auth::user()->id;
            $aluno = User::find($matricula);

            return view('apostila1/intro1/intro', compact('aluno'));
        }
    }
    public function aprovar()
    {
        return view('site/home/aprovar');
    }

    public function apostila2Intro()
    {
        $aluno = User::find(request()->user()->matricula);

        return view('apostila2/intro2/intro', compact('aluno'));
    }

    public function homePortal()
    {

        if (Auth::check()) {
            $id = Auth::user()->id;
            $matricula = Auth::user()->matricula;
            $aluno = User::find($id);
            $unidades = Unidade::where('matricula', '=', $matricula)
                ->select('cod_unidade')
                ->get();
            return view('portal/home/index', compact('unidades','aluno'));

        } else {
            return redirect('/');
        }
    }

    public function acessomaterial()
    {

        if (Auth::check()) {
            $id = Auth::user()->id;
            $matricula = Auth::user()->matricula;
            $aluno = User::find($id);
            return view('home/index', compact('aluno'));

        } else {
            return redirect('/');
        }
    }

    public function site()
    {
        return view('site/home/index');
    }

    public function cgfly()
    {
        return view('site/cursos/cgfly');
    }

    public function franquiaCota()
    {
        return view('site/franquia/franquia');
    }

    public function codeblock()
    {
        return view('site/cursos/codeblock');
    }

    public function depoimentos()
    {
        return view('site/depoimento/index');
    }

    public function materialDidatico()
    {

        $id = Auth::user()->id;
        $matricula = Auth::user()->matricula;
        $unidades = Unidade::where('matricula', '=', $matricula)
            ->select('cod_unidade')
            ->get('cod_unidade');
        $aluno = User::find($id);
        return view('portal/material/index', compact('aluno', 'unidades'));

    }

}
