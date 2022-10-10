<?php

namespace App\Http\Controllers;

use DB;

use App\User;
use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RespostaController extends Controller
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
        return "oi";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resposta $conteudo_id
     * @return \Illuminate\Http\Response
     */
    public function show($noticia_id)
    {
        // $id = request()->user()->id;
        // $nivel = request()->user()->nivel;
        // $noticia = Noticia::find($noticia_id);
        // if($nivel != 1){
        //     Noticia::find($noticia_id)->increment('noticia_views');
        // }
        // return $noticia;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = request()->user()->id;
        $data = $request->all();

        if($request->has('resposta_id')){
            $resposta = Resposta::find($data['resposta_id']);
            $resposta->resposta_respostas = $data['resposta_respostas'];
            $resposta->resposta_data = date("Y-m-d");
            $resposta->resposta_hora = date("H:i:s");
            $resposta->save();
            return "2";
        }else{    
            $resposta = new Resposta();
            $resposta->resposta_respostas = $data['resposta_respostas'];
            $resposta->atividade_id = $data['atividade_id'];
            $resposta->unidade_id = $data['unidade_id'];
            $resposta->resposta_data = date("Y-m-d");
            $resposta->resposta_hora = date("H:i:s");
            $resposta->usuario_id = $id;
            $resposta->save();
            return "1";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resposta $conteudo_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($noticia_id)
    {
        $noticia = Resposta::findOrFail($noticia_id);
        $noticia->delete();
        return "1";
    }

    public function check($atividade_id)
    {
        $id = request()->user()->id;
        
        $count = Resposta::where('usuario_id', $id)->where('atividade_id', $atividade_id)->count();
        if($count > 0){
            $respostas = Resposta::where('usuario_id', $id)->where('atividade_id', $atividade_id)->get();
            return $respostas;
        }else{
            return "0";
        }
    }

}
