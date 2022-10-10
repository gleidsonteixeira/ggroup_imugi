<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use App\Nota;
use App\Modulo;
use App\Presenca;
use App\O_Codigo;

class AlunoController extends Controller
{
    
    public function index()
    {
        $modulos = Modulo::all();
        return view("admin.alunos", compact("modulos"));   
    }

    public function list()
    {
        return User::where("cargo_id", 3)->with(["presencas.modulo", "material", "notas.modulo"])->get();
    }

    public function update(Request $request)
    {
        $aluno = User::find($request->id);
        $aluno->name = $request->name;
        $aluno->email = $request->email;
        $aluno->telefone = $request->telefone;
        $aluno->status = $request->status;
        $aluno->save();
    }

    public function material(Request $request)
    {
        $material = O_Codigo::where("matricula", $request->matricula)->first();
        if($material){
            $material->nivel = $request->nivel;
            $material->save();
        }else{
            $material = new O_Codigo();
            $material->nivel = $request->nivel;
            $material->matricula = $request->matricula;
            $material->save();
        }
    }

    public function nota(Request $request)
    {
        $nota = Nota::where("user_id", $request->user_id)->where("modulo_id", $request->modulo_id)->first();
        if($nota){
            if(isset($request->resultado_trabalho)){
                $nota->resultado_trabalho = $request->resultado_trabalho;
            }
            if(isset($request->resultado_pratica)){
                $nota->resultado_pratica = $request->resultado_pratica;
            }
            if(isset($request->resultado_teorica)){
                $nota->resultado_teorica = $request->resultado_teorica;
            }
            $nota->turma_id = $request->turma_id;
            $nota->save();
            echo "tem registro";
        }else{
            $nota = new Nota();
            $nota->fill($request->all());
            $nota->save();
        }
    }

    public function presencas(Request $request)
    {
        $presenca = Presenca::where("user_id", $request->user_id)->where("modulo_id", $request->modulo_id)->first();
        if($presenca){
            $presenca->presenca_presencas = $request->presenca_presencas;
            $presenca->save();
        }else{
            $presenca = new Presenca();
            $presenca->fill($request->all());
            $presenca->save();
        }
    }

    
    
}