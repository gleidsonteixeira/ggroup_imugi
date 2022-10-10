<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    protected $usuario;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->usuario = Auth::user();
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            return view("admin/empresas");
        }else{
            return redirect("login");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        if($request->has('e_empresa_id')){
            $empresa = Empresa::find($data['e_empresa_id']);
            $empresa->empresa_nome = $data['e_empresa_nome'];
            $empresa->empresa_status = 1;
            $empresa->save();
            return "2";
        }else{    
            $empresa = new Empresa();
            $empresa->empresa_nome = $data['empresa_nome'];
            $empresa->empresa_status = 1;
            $empresa->save();
            return "1";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $empresa_id
     * @return \Illuminate\Http\Response
     */
    public function show($empresa_id)
    {
        $empresa = Empresa::find($empresa_id);
        return $empresa;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $empresa_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($empresa_id)
    {
        $unidades = Empresa::find($empresa_id)->unidade;
        if($unidades != null){
            return "2";
        }else{
            Empresa::destroy($empresa_id);
            return "1";
        }
    }

    public function carregarLista(){
        $empresas = Empresa::all();
        return view("admin/empresas-lista", compact('empresas'));
    }
}
