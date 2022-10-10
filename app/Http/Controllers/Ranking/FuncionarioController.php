<?php

namespace App\Http\Controllers\Ranking;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Models\Admin\Unidade;
use App\Models\Ranking\Dado;
use App\Models\Ranking\Funcionario;

class FuncionarioController extends Controller
{

    public function index()
    {
        $unidades = Unidade::all();
        return view("ranking.funcionarios", compact("unidades"));
    }

    public function list(){
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            return Funcionario::all();
        }else{
            return Funcionario::where("unidade_id", auth::user()->unidade_id)->get();
        }
    }

    public function store(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->fill($request->all());
        $funcionario->save();
    }

    public function update(Request $request)
    {
        $funcionario = Funcionario::find($request->funcionario_id);
        $funcionario->fill($request->all());
        $funcionario->save();
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);
        if($funcionario){
            Dado::where("funcionario_id", $funcionario->funcionario_id)->delete();
            Funcionario::destroy($id);
            return "1";
        }
    }

}
