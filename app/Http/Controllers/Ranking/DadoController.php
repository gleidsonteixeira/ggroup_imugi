<?php

namespace App\Http\Controllers\Ranking;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Carbon\Carbon; 
use App\Models\Ranking\Dado;
use App\Models\Ranking\Funcionario;

class DadoController extends Controller
{

    public function index()
    {
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $funcionarios = Funcionario::all();
        }else{
            $funcionarios = Funcionario::where("unidade_id", auth::user()->unidade_id)->get();
        }
        return view("ranking.dados", compact("funcionarios"));
    }

    public function list(){
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $dados = Dado::with("funcionario")->get();
            foreach($dados as $dado){
                $dado->dado_data = Carbon::parse($dado->dado_data)->format("d/m/Y");
            }
            return $dados;
        }else{
            $daunidade = [];
            $dados = Dado::with(["funcionario" => function($funcionario){
                $funcionario->where("unidade_id", Auth::user()->unidade_id);
            }])->get();
            foreach($dados as $dado){
                if(isset($dado->funcionario)){
                    $dado->dado_data = Carbon::parse($dado->dado_data)->format("d/m/Y");
                    array_push($daunidade, $dado);
                }
            }
            return $daunidade;
        }
    }

    public function store(Request $request)
    {
        $dado = new Dado();
        $dado->fill($request->all());
        $dado->save();
    }

    public function update(Request $request)
    {
        $dado = Dado::find($request->dado_id);
        $dado->fill($request->all());
        $dado->save();
    }

    public function destroy($id)
    {
        $dado = Dado::find($id);
        if($dado){
            Dado::destroy($id);
            return "1";
        }else{
            return "2";
        }
    }

}
