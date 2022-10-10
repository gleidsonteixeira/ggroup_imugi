<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function index()
    {
        return view('site.index');
    }

    public function cgfly()
    {
        return view('site.cgfly');
    }

    public function depoimentos()
    {
        return view('site.depoimentos');
    }

    public function aprimorar()
    {
        return view('site.aprimorar');
    }

    public function unidades()
    {
        return view('site.unidades');
    }

    public function franqueado()
    {
        return view('site.franqueado');
    }

    public function politicas()
    {
        return view('site.politicas');
    }




    // public function aprimorar()
    // {
    //     return view('site/aprimorar/index');
    // }
    

    // public function site()
    // {
        
    // }

    // public function cgfly()
    // {
    //     return view('site/cursos/cgfly');
    // }

    // public function franquiaCota()
    // {
    //     return view('site/franquia/franquia');
    // }

    // public function codeblock()
    // {
    //     return view('site/cursos/codeblock');
    // }

    // public function depoimentos()
    // {
    //     return view('site/depoimento/index');
    // }

    // public function materialDidatico()
    // {

    //     $id = Auth::user()->id;
    //     $matricula = Auth::user()->matricula;
    //     $unidades = Unidade::where('matricula', '=', $matricula)
    //         ->select('cod_unidade')
    //         ->get('cod_unidade');
    //     $aluno = User::find($id);
    //     return view('portal/material/index', compact('aluno', 'unidades'));

    // }

}
