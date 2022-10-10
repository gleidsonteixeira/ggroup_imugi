<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Unidade;

class UnidadeController extends Controller
{

    public function index(Request $request)
    {
        return view("admin.unidades");
    }

    public function show($id)
    {
        $unidade = Unidade::find($id);
        if(!$unidade) {
            return null;
        }else{
            return response()->json($unidade);
        }
    }
    
    public function list(){
        $unidades = Unidade::all();
        return response()->json($unidades);
    }

    public function store(Request $request){
        $unidade = new Unidade();
        $unidade->fill($request->all());
        $unidade->save();
        return response()->json($unidade);
    }

    public function update(Request $request, $id)
    {
        $unidade = Unidade::find($id);
        $unidade->fill($request->all());
        $unidade->save();
        return response()->json($unidade);
    }

    public function destroy($id){
        $unidade = Unidade::find($id);
        if(!$unidade) {
            return response()->json([
                'message'   => 'Registro não encontrado.',
            ], 404);
        }
        Unidade::destroy($id);
        return "1";
    }

}
