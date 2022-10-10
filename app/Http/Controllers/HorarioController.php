<?php

namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HorarioController extends Controller
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
            return view("admin/horarios");
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
        
        if($request->has('e_horario_id')){
            $horario = Horario::find($data['e_horario_id']);
            $horario->horario_inicio = $data['e_horario_inicio'];
            $horario->horario_fim = $data['e_horario_fim'];
            $horario->horario_dias = $data['e_horario_dias'];
            $horario->save();
            return "2";
        }else{    
            $horario = new Horario();
            $horario->horario_inicio = $data['horario_inicio'];
            $horario->horario_fim = $data['horario_fim'];
            $horario->horario_dias = $data['horario_dias'];
            $horario->save();
            return "1";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $horario_id
     * @return \Illuminate\Http\Response
     */
    public function show($horario_id)
    {
        $horario = Horario::find($horario_id);
        return $horario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $horario_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($horario_id)
    {
        $turmas = Horario::find($horario_id)->turmas;
        if($turmas != null){
            return "2";
        }else{
            Horario::destroy($horario_id);
            return "1";
        }
    }

    public function carregarLista(){
        $horarios = Horario::all();
        return view("admin/horarios-lista", compact('horarios'));
    }
}
