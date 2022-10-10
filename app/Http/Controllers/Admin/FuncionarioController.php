<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Models\Admin\Cargo;
use App\Models\Admin\Unidade;
use App\Http\Controllers\Controller;

class FuncionarioController extends Controller
{

    public function index(Request $request)
    {
        $acessos = Cargo::all();
        $unidades = Unidade::all();
        return view("admin.funcionarios", compact("unidades", "acessos"));
    }
    
    public function list(){
        return User::where("cargo_id", "!=", 4)->with("cargo")->get();
        // return User::with(["cargo" => function($f){
        //     $f->where("cargo_nome", "!=", "Aluno");
        // }])->get();
    }

    public function store(Request $request)
    {
        // if(User::where("email", $request->email)->count() > 0){
        //     return response()->json([
        //         "message" => "Este email está em uso",
        //         "status" => 202
        //     ]);
        // }else{
            $matricula = User::where("cargo_id", "!=", 4)->count();
            $funcionario = new User();
            $funcionario->fill($request->all());
            $funcionario->password = Hash::make($request->password);
            $funcionario->matricula = ($matricula + 100000);
            $funcionario->save();
            return response()->json([
                "status" => 200
            ]);
        // }
    }
    
    public function update(Request $request, $id)
    {
        $funcionario = User::find($id);
        $funcionario->name = $request->name;
        $funcionario->email = $request->email;
        $funcionario->telefone = $request->telefone;
        $funcionario->status = $request->status;
        $funcionario->unidade_id = $request->unidade_id;
        $funcionario->cargo_id = $request->cargo_id;
        if($request->password){
            $funcionario->password = Hash::make($request->password);
        }
        $funcionario->save();
    }

    public function destroy($id){
        return User::destroy($id);
    }

    public function addCargo()
    {
        // $usuarios = User::where("cargo_id", null)->get();
        // foreach($usuarios as $u){
        //     $u->cargo_id = 4;
        //     $u->save();
        // }
        User::where("cargo_id", null)->update(["cargo_id" => 4]);
        // return $usuarios;
    }

}
