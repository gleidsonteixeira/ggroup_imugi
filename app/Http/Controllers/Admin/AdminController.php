<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use App\Curso;
use App\Cargo;
use App\Unidade;
use App\Turma;
use App\Modulo;
use App\TurmaCliente;

class AdminController extends Controller
{

    public function index()
    { 
        return view("admin.index");
    }

    public function notFound()
    {
        return view("admin.404");
    }

    // public function menusLista(){
    //     $cargos = Cargo::all();
    //     return view("layouts/admin/menus/menus", compact('cargos'));
    // }

    // public function notas(){
    //     $id = Auth::user()->id;

    //     $turmas = Turma::where("user_id",$id)->get();
    //     $modulos = Modulo::all();
    //     return view("admin.notas",compact("turmas","modulos"));
    // }

    // public function questoes(){
    //     return view("admin.questoes");
    // }

    // public function frequencias(){
    //     $cursos = Curso::where("curso_status", 1)->get();
    //     $professores = User::where("cargo_id",2)->get();
    //     $unidades = Unidade::where("unidade_status", 1)->get();
    //     return view("admin.frequencias", compact('cursos', 'professores', 'unidades'));
    // }

    // public function professores(){
    //     $unidades = Unidade::where("unidade_status",1)->get();
    //     return view("admin.professores",compact('unidades'));
    // }
    
    // public function cursos(){
    //     return view("admin.cursos");
    // }

    public function cargos(){
        return view("admin.cargos");
    }

    public function unidades(){
        return view("admin.unidades");
    }

}