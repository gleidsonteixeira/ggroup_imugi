<?php

namespace App\Http\Controllers;

use DatePeriod;
use DateTime;
use DateInterval;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Lead;
use App\Estado;
use App\UnidadesImugi;

class ApiController extends Controller
{
    public function index($unidade = null){
        if($unidade){
            $leads = Lead::with('estado','unidade')->where('estado',$unidade)->get();
        }else{
            $leads = lead::with('estado','unidade')->get();
        }

        return response()->json($leads);
    }

    public function apiLeadsDoMes(){
        $totalDeLeads = Lead::with('estado','unidade')->get();
        $dataAtual = date("Y-m-");
        $leadsDoMes = Lead::with('estado','unidade')->where("data_cadastro", "like", $dataAtual."%")->get();
        $dados["totalDeLeads"] = $totalDeLeads;
        $dados["leadsDoMes"] = $leadsDoMes;
        $dados["leadsPorDia"] = $leadsDoMes->groupBy("data_cadastro");
        $dados["leadsPorEstado"] = $leadsDoMes->groupBy("estado");
        return response()->json($dados);
    }

    public function quantidade(){
        $quantidadeMes = [];
        $quantidadeTotal = [];
        $dataAtual = date("Y-m");
        $quantidade = lead::where("status", 1)->count();
        $leadsMes = Lead::where("data_cadastro", "like", $dataAtual."%")->count();
        array_push($quantidadeTotal, $quantidade);
        array_push($quantidadeMes, $leadsMes);
       
        $dados["quantidadeTotal"] = $quantidadeTotal;
        $dados["quantidadeMes"] = $quantidadeMes;
        return $dados;
    }

    public function leadsEstado(){
        $quantidade = Estado::with(array('quantidade' => function($query){
            $mesAtual = date("Y-m");
            $query->where('data_cadastro', "like", $mesAtual."%");
        }))->get();

        
        return response()->json($quantidade);
    }

    public function leadsUnidade($estado = null){
        if($estado){
           
           // $unidadeLead = UnidadesImugi::with("alunos")->where("unidade_estado",$estado)->get();
            $unidadeLead = UnidadesImugi::where("unidade_estado",$estado)->with(array('alunos' => function($query){
                 $mesAtual = date("Y-m");
                $query->where('data_cadastro', "like", $mesAtual."%");
            }))->get();
        
        }else{
            $unidadeLead = UnidadesImugi::with("alunos")->get();
        }
        
        return response()->json($unidadeLead);
    }

    public function unidadeEstado($id)
    {
        $data = UnidadesImugi::where('unidade_estado',$id)->get();
        
        return response()->json(['data' => $data]);
    }

    public function apiAluno($matricula = null)
    {
        if ($matricula == null) {
            $usuarios = User::select("id", "name", "email", "matricula")->get();
        } else {
            $usuarios = User::where("matricula", $matricula)->select("id", "name", "email", "matricula")->get();
        }

        return response()->json($usuarios);
    }

    public function editar(Request $request)
    {

        $data = $request->all();

        if ($request->has('user_id')) {

            $aluno = User::find($data['user_id']);

            $aluno->name = $data['e_name'];
            $aluno->email = $data['e_email'];
            $aluno->password = Hash::make($data['e_password']);

            $aluno->save();

            return "2";

        } else {
            return "1"; //falha

        }

    }

    public function carregarPeriodo(Request $request)
    {    

        $anoAtual = date("Y");
        $mesAtual = date("m");

        if($request->data_inicio == "" && $request->data_fim == ""){
            $period = new DatePeriod(
                new DateTime($anoAtual.'-'.$mesAtual),
                new DateInterval('P1D'),
                new DateTime($anoAtual.'-'.($mesAtual + 1))
            );
        }else{
            $period = new DatePeriod(
                new DateTime($request->data_inicio),
                new DateInterval('P1D'),
                new DateTime($request->data_fim)
            );
        }
        
        $volumeLabels = [];
        $quantidadeTotal = [];
        
            

        foreach ($period as $key => $value) {
            $label = $value->format('Y-m-d');
            $leads = Lead::where("data_cadastro", "like", $label."%")->count();
            array_push($volumeLabels, $value->format('d-m-Y'));
            array_push($quantidadeTotal, $leads);

        }
   

        $dados["volumeLabels"] = $volumeLabels;
        $dados["quantidadeTotal"] = $quantidadeTotal;

        return $dados;
    }
}
