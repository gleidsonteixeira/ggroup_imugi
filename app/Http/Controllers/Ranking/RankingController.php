<?php

namespace App\Http\Controllers\Ranking;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Carbon\Carbon;
use App\User;
use App\Models\Admin\Unidade;
use App\Models\Ranking\Dado;
use App\Models\Ranking\Funcionario;

class RankingController extends Controller
{
    
    public function index()
    {
        $unidades = DB::table("Imugi_unidades")->select("unidade_id")->where("unidade_status", "!=", 1)->get();
        $unidade_desativadas = [];
        foreach($unidades as $u){
            array_push($unidade_desativadas, $u->unidade_id);
        }
        //RANKING GERAL DE VENDEDORES
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $vendedores = Funcionario::whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Vend%")->with(["dados", "unidade"])->get();
        }else{
            $vendedores = Funcionario::whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Vend%")->where("unidade_id", Auth::user()->unidade_id)->with(["dados", "unidade"])->get();
        }
        $vendedoresAtivos = $vendedores->where("funcionario_status", 1);
        $vendedoresInativos = $vendedores->where("funcionario_status", 2);
        $vendedorUnidades = $vendedores->groupBy("unidade_id");
        $vendedoresGeral = [];
        foreach($vendedorUnidades as $key => $u){
            $unidade = [];
            $unidade["dado_visitas"] = 0;
            $unidade["dado_mrt"] = 0;
            $unidade["dado_elleve"] = 0;
            $unidade["unidade_id"] = $u[0]->unidade_id;
            $unidade["unidade_nome"] = isset($u[0]->unidade) ? $u[0]->unidade->unidade_nome : "---";
            foreach($u as $f){
                foreach($f->dados as $d){
                    $unidade["dado_visitas"] += $d->dado_visitas;
                    $unidade["dado_mrt"] += $d->dado_mrt;
                    $unidade["dado_elleve"] += $d->dado_elleve;
                }
            }
            // $unidade["dado_total"] = $unidade["dado_mrt"] + $unidade["dado_elleve"];
            $unidade["dado_total"] = $unidade["dado_mrt"];
            if($unidade["dado_total"] == 0){
                $unidade["dado_apr"] = number_format($unidade["dado_visitas"], 2);
            }else{
                $unidade["dado_apr"] = number_format($unidade["dado_visitas"] / $unidade["dado_total"], 2);
            }
            array_push($vendedoresGeral, $unidade);
        }
        //METODO QUE ORDENA PELO "DADO_APR"        
        usort($vendedoresGeral, array($this, 'sortApr'));

        //RANKING DE VENDEDORES
        foreach($vendedoresAtivos as $v){
            $v["dado_visitas"] = 0;
            $v["dado_mrt"] = 0;
            $v["dado_elleve"] = 0;
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $v["dado_visitas"] += $d->dado_visitas;
                $v["dado_mrt"] += $d->dado_mrt;
                $v["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        foreach($vendedoresAtivos as $v){
            // $v["dado_total"] = ($v->dado_mrt + $v->dado_elleve);
            $v["dado_total"] = ($v->dado_mrt);
            if($v["dado_total"] == 0){
                $v["dado_apr"] = 0;
            }else{
                $v["dado_apr"] = number_format($v->dado_visitas / $v["dado_total"], 2);
            }
        }
        //SEPARA OS 10 PRIMEIROS
        $vendedores_top10 = $vendedoresAtivos->sort(function($a, $b) {
            if($a->dado_total === $b->dado_total) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_total > $b->dado_total ? -1 : 1;
         })->take(10);

        $vendedores_outros = [];
        $vendedores_outros["dado_mrt"] = 0;
        $vendedores_outros["dado_visitas"] = 0;
        $vendedores_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($vendedoresInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $vendedores_outros["dado_visitas"] += $d->dado_visitas;
                $vendedores_outros["dado_mrt"] += $d->dado_mrt;
                $vendedores_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"] + $vendedores_outros["dado_elleve"]);
        $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"]);
        if($vendedores_outros["dado_total"] == 0){
            $vendedores_outros["dado_apr"] = 0;
        }else{
            $vendedores_outros["dado_apr"] = number_format($vendedores_outros["dado_visitas"] / $vendedores_outros["dado_total"], 2);
        }

        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $telemarketing = Funcionario::whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Telemarketing%")->with(["dados", "unidade"])->get();
        }else{
            $telemarketing = Funcionario::whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Telemarketing%")->where("unidade_id", Auth::user()->unidade_id)->with(["dados", "unidade"])->get();
        }
        $telemarketingAtivos = $telemarketing->where("funcionario_status", 1);
        $telemarketingInativos = $telemarketing->where("funcionario_status", 2);

        foreach($telemarketingAtivos as $t){
            $t["dado_visitas"] = 0;
            $t["dado_mrt"] = 0;
            $t["dado_elleve"] = 0;
            foreach($t->dados as $d){
                $t["dado_visitas"] += $d->dado_visitas;
                $t["dado_mrt"] += $d->dado_mrt;
                $t["dado_elleve"] += $d->dado_elleve;
            }
        }
        foreach($telemarketingAtivos as $t){
            // $t["dado_total"] = ($t->dado_mrt + $t->dado_elleve);
            $t["dado_total"] = ($t->dado_mrt);
            if($t["dado_total"] == 0){
                $t["dado_apr"] = 0;
            }else{
                $t["dado_apr"] = number_format($t->dado_visitas / $t["dado_total"], 2);
            }
        }
        $telemarketing_top10 = $telemarketingAtivos->sort(function($a, $b) {
            if($a->dado_visitas === $b->dado_visitas) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_visitas > $b->dado_visitas ? -1 : 1;
         })->take(10);

        $telemarketing_outros = [];
        $telemarketing_outros["dado_mrt"] = 0;
        $telemarketing_outros["dado_visitas"] = 0;
        $telemarketing_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($telemarketingInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $telemarketing_outros["dado_visitas"] += $d->dado_visitas;
                $telemarketing_outros["dado_mrt"] += $d->dado_mrt;
                $telemarketing_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $telemarketing_outros["dado_total"] = ($telemarketing_outros["dado_mrt"] + $telemarketing_outros["dado_elleve"]);
        $telemarketing_outros["dado_total"] = ($telemarketing_outros["dado_mrt"]);
        if($telemarketing_outros["dado_total"] == 0){
            $telemarketing_outros["dado_apr"] = 0;
        }else{
            $telemarketing_outros["dado_apr"] = number_format($telemarketing_outros["dado_visitas"] / $telemarketing_outros["dado_total"], 2);
        }
        
        return view("ranking.index", compact("vendedoresGeral", "vendedores_top10", "vendedores_outros", "telemarketing_top10", "telemarketing_outros"));
    }

    public function ciclos()
    {
        //DATAS DOS CICLOS
        $ciclos = [];
        $ciclos[0] = array("data-inicial" => "2022-06-26", "data-final" => "2022-07-25");
        $ciclos[1] = array("data-inicial" => "2022-07-26", "data-final" => "2022-08-25");
        $ciclos[2] = array("data-inicial" => "2022-08-26", "data-final" => "2022-09-25");
        $ciclos[3] = array("data-inicial" => "2022-09-26", "data-final" => "2022-10-25");
        // $ciclos[4] = array("data-inicial" => "2022-10-26", "data-final" => "2022-11-25");
        // $ciclos[5] = array("data-inicial" => "2022-11-26", "data-final" => "2022-12-25");
        // $ciclos[6] = array("data-inicial" => "2022-12-26", "data-final" => "2023-01-25");

        $todos_os_ciclos = [];
        foreach($ciclos as $ciclo){
            $data_inicio = date("Y-m-d", strtotime($ciclo["data-inicial"]));
            $data_fim = date("Y-m-d", strtotime($ciclo["data-final"]));
    
            $grafico = [];
            $unidades = Unidade::where("unidade_status", 1)->with(["funcionarios" => function($funcionario){ $funcionario->where("funcionario_cargo", "like", "%Vend%"); }])->get();
            foreach($unidades as $u){
                $graficoUnidade = [];
                $graficoUnidade["dado_visitas"] = 0;
                $graficoUnidade["dado_mrt"] = 0;
                $graficoUnidade["dado_elleve"] = 0;
                $graficoUnidade["dado_total"] = 0;
                $graficoUnidade["dado_apr"] = 0;
                $graficoUnidade["unidade_id"] = $u->unidade_id;
                $graficoUnidade["unidade_nome"] = $u->unidade_nome;
                $graficoUnidade["periodo"] = date("d/m/Y", strtotime($ciclo["data-inicial"]))." à ".date("d/m/Y", strtotime($ciclo["data-final"]));
                //LISTA OS FUNCIONARIOS DA UNIDADE
                foreach($u->funcionarios as $f){
                    //BUSCA OS DADOS DO FUNCIONARIO
                    $dados = Dado::where("funcionario_id", $f->funcionario_id)
                                    ->whereBetween("dado_data" ,[$data_inicio, $data_fim])
                                    ->get()
                                    ->each(function($dado){
                                        $dado->dado_data = Carbon::parse($dado->dado_data)->format("m/Y");
                                    });
                    
                    //SE TIVER DADOS RODA O FOREACH
                    if(count($dados) > 0){
                        foreach($dados as $d){
                            //ACUMULA OS DADOS DA UNIDADE
                            $graficoUnidade["dado_visitas"] += $d->dado_visitas;
                            $graficoUnidade["dado_mrt"] += $d->dado_mrt;
                            $graficoUnidade["dado_elleve"] += $d->dado_elleve;
                        }
                        // $graficoUnidade["dado_total"] = $graficoUnidade["dado_mrt"] + $graficoUnidade["dado_elleve"];
                        $graficoUnidade["dado_total"] = $graficoUnidade["dado_mrt"];
                        if($graficoUnidade["dado_total"] == 0){
                            $graficoUnidade["dado_apr"] = number_format($graficoUnidade["dado_visitas"], 2);
                        }else{
                            $graficoUnidade["dado_apr"] = number_format($graficoUnidade["dado_visitas"] / $graficoUnidade["dado_total"], 2);
                        }
                    }
                }
                array_push($grafico, $graficoUnidade);
            }
            usort($grafico, array($this, 'sortUnidade'));
            array_push($todos_os_ciclos, $grafico);
        }

        return $todos_os_ciclos;
    }

    public function sortAPR($a, $b)
    {
        if($a["dado_total"] === $b["dado_total"]) {
            if($a["dado_apr"] === $b["dado_apr"]) {
                    return 0;
                }
            return $a["dado_apr"] < $b["dado_apr"] ? -1 : 1;
        }
        return $a["dado_total"] > $b["dado_total"] ? -1 : 1;
    }

    public function sortUnidade($a, $b)
    {
        return $a["unidade_nome"] < $b["unidade_nome"] ? -1 : 1;
    }

    public function filtro($de, $ate)
    {
        $unidades = DB::table("Imugi_unidades")->select("unidade_id")->where("unidade_status", "!=", 1)->get();
        $unidade_desativadas = [];
        foreach($unidades as $u){
            array_push($unidade_desativadas, $u->unidade_id);
        }

        $inicial = date("Y-m-d", strtotime($de));
        $final = date("Y-m-d", strtotime($ate));
        
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $vendedores = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Vend%")->get();
        }else{
            $vendedores = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Vend%")->where("unidade_id", Auth::user()->unidade_id)->get();
        }
        $vendedoresAtivos = $vendedores->where("funcionario_status", 1);
        $vendedoresInativos = $vendedores->where("funcionario_status", 2);

        //RANKING GERAL DE VENDEDORES
        $vendedorUnidades = $vendedores->groupBy("unidade_id");
        $vendedoresGeral = [];
        foreach($vendedorUnidades as $key => $u){
            $unidade = [];
            $unidade["dado_visitas"] = 0;
            $unidade["dado_mrt"] = 0;
            $unidade["dado_elleve"] = 0;
            $unidade["unidade_id"] = $u[0]->unidade->unidade_id;
            $unidade["unidade_nome"] = isset($u[0]->unidade) ? $u[0]->unidade->unidade_nome : "---";
            $unidade["dado_meses"] = [];
            foreach($u as $f){
                foreach($f->dados as $d){
                    $unidade["dado_visitas"] += $d->dado_visitas;
                    $unidade["dado_mrt"] += $d->dado_mrt;
                    $unidade["dado_elleve"] += $d->dado_elleve;
                    $d->dado_data = Carbon::parse($d->dado_data)->format("m/Y");
                }
            }
            // $unidade["dado_total"] = $unidade["dado_mrt"] + $unidade["dado_elleve"];
            $unidade["dado_total"] = $unidade["dado_mrt"];
            if($unidade["dado_total"] == 0){
                $unidade["dado_apr"] = 0;
            }else{
                $unidade["dado_apr"] = number_format($unidade["dado_visitas"] / $unidade["dado_total"], 2);
            }
            array_push($vendedoresGeral, $unidade);
        }
        //METODO QUE ORDENA PELO "DADO_APR"        
        usort($vendedoresGeral, array($this, 'sortApr'));

        //RANKING DE VENDEDORES
        foreach($vendedoresAtivos as $v){
            $v["dado_visitas"] = 0;
            $v["dado_mrt"] = 0;
            $v["dado_elleve"] = 0;
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $v["dado_visitas"] += $d->dado_visitas;
                $v["dado_mrt"] += $d->dado_mrt;
                $v["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        foreach($vendedoresAtivos as $v){
            // $v["dado_total"] = ($v->dado_mrt + $v->dado_elleve);
            $v["dado_total"] = ($v->dado_mrt);
            if($v["dado_total"] == 0){
                $v["dado_apr"] = 0;
            }else{
                $v["dado_apr"] = number_format($v->dado_visitas / $v["dado_total"], 2);
            }
        }
        //SEPARA OS 10 PRIMEIROS
        $vendedores_top10 = $vendedoresAtivos->sort(function($a, $b) {
            if($a->dado_total === $b->dado_total) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_total > $b->dado_total ? -1 : 1;
         })->take(10);

        $vendedores_outros = [];
        $vendedores_outros["dado_mrt"] = 0;
        $vendedores_outros["dado_visitas"] = 0;
        $vendedores_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($vendedoresInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $vendedores_outros["dado_visitas"] += $d->dado_visitas;
                $vendedores_outros["dado_mrt"] += $d->dado_mrt;
                $vendedores_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"] + $vendedores_outros["dado_elleve"]);
        $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"]);
        if($vendedores_outros["dado_total"] == 0){
            $vendedores_outros["dado_apr"] = 0;
        }else{
            $vendedores_outros["dado_apr"] = number_format($vendedores_outros["dado_visitas"] / $vendedores_outros["dado_total"], 2);
        }

        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $telemarketing = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Telemarketing%")->get();
        }else{
            $telemarketing = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Telemarketing%")->where("unidade_id", Auth::user()->unidade_id)->get();
        }
        $telemarketingAtivos = $telemarketing->where("funcionario_status", 1);
        $telemarketingInativos = $telemarketing->where("funcionario_status", 2);

        foreach($telemarketingAtivos as $t){
            $t["dado_visitas"] = 0;
            $t["dado_mrt"] = 0;
            $t["dado_elleve"] = 0;
            foreach($t->dados as $d){
                $t["dado_visitas"] += $d->dado_visitas;
                $t["dado_mrt"] += $d->dado_mrt;
                $t["dado_elleve"] += $d->dado_elleve;
            }
        }
        foreach($telemarketingAtivos as $t){
            // $t["dado_total"] = ($t->dado_mrt + $t->dado_elleve);
            $t["dado_total"] = ($t->dado_mrt);
            if($t["dado_total"] == 0){
                $t["dado_apr"] = 0;
            }else{
                $t["dado_apr"] = number_format($t->dado_visitas / $t["dado_total"], 2);
            }
        }
        $telemarketing_top10 = $telemarketingAtivos->sort(function($a, $b) {
            if($a->dado_visitas === $b->dado_visitas) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_visitas > $b->dado_visitas ? -1 : 1;
         })->take(10);

        $telemarketing_outros = [];
        $telemarketing_outros["dado_mrt"] = 0;
        $telemarketing_outros["dado_visitas"] = 0;
        $telemarketing_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($telemarketingInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $telemarketing_outros["dado_visitas"] += $d->dado_visitas;
                $telemarketing_outros["dado_mrt"] += $d->dado_mrt;
                $telemarketing_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $telemarketing_outros["dado_total"] = ($telemarketing_outros["dado_mrt"] + $telemarketing_outros["dado_elleve"]);
        $telemarketing_outros["dado_total"] = ($telemarketing_outros["dado_mrt"]);
        if($telemarketing_outros["dado_total"] == 0){
            $telemarketing_outros["dado_apr"] = 0;
        }else{
            $telemarketing_outros["dado_apr"] = number_format($telemarketing_outros["dado_visitas"] / $telemarketing_outros["dado_total"], 2);
        }
        
        return view("ranking.index", compact("vendedoresGeral", "vendedores_top10", "vendedores_outros", "telemarketing_top10", "telemarketing_outros"));
    }

    public function vendedores()
    {
        $unidades = DB::table("Imugi_unidades")->select("unidade_id")->where("unidade_status", "!=", 1)->get();
        $unidade_desativadas = [];
        foreach($unidades as $u){
            array_push($unidade_desativadas, $u->unidade_id);
        }

        //RANKING GERAL DE VENDEDORES
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $vendedores = Funcionario::whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Vend%")->with(["dados", "unidade"])->get();
        }else{
            $vendedores = Funcionario::whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Vend%")->where("unidade_id", Auth::user()->unidade_id)->with(["dados", "unidade"])->get();
        }
        $vendedoresAtivos = $vendedores->where("funcionario_status", 1);
        $vendedoresInativos = $vendedores->where("funcionario_status", 2);

        //RANKING DE VENDEDORES
        foreach($vendedoresAtivos as $v){
            $v["dado_visitas"] = 0;
            $v["dado_mrt"] = 0;
            $v["dado_elleve"] = 0;
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $v["dado_visitas"] += $d->dado_visitas;
                $v["dado_mrt"] += $d->dado_mrt;
                $v["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        foreach($vendedoresAtivos as $v){
            // $v["dado_total"] = ($v->dado_mrt + $v->dado_elleve);
            $v["dado_total"] = ($v->dado_mrt);
            if($v["dado_total"] == 0){
                $v["dado_apr"] = 0;
            }else{
                $v["dado_apr"] = number_format($v->dado_visitas / $v["dado_total"], 2);
            }
        }

        $vendedores_outros = [];
        $vendedores_outros["dado_mrt"] = 0;
        $vendedores_outros["dado_visitas"] = 0;
        $vendedores_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($vendedoresInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $vendedores_outros["dado_visitas"] += $d->dado_visitas;
                $vendedores_outros["dado_mrt"] += $d->dado_mrt;
                $vendedores_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"] + $vendedores_outros["dado_elleve"]);
        $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"]);
        if($vendedores_outros["dado_total"] == 0){
            $vendedores_outros["dado_apr"] = 0;
        }else{
            $vendedores_outros["dado_apr"] = number_format($vendedores_outros["dado_visitas"] / $vendedores_outros["dado_total"], 2);
        }

        $vendedores_todos = $vendedoresAtivos->sort(function($a, $b) {
            if($a->dado_total === $b->dado_total) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_total > $b->dado_total ? -1 : 1;
         });

        return view("ranking.vendedores", compact("vendedores_todos", "vendedores_outros"));

    }

    public function filtroVendedores($de, $ate)
    {
        $unidades = DB::table("Imugi_unidades")->select("unidade_id")->where("unidade_status", "!=", 1)->get();
        $unidade_desativadas = [];
        foreach($unidades as $u){
            array_push($unidade_desativadas, $u->unidade_id);
        }

        $inicial = date("Y-m-d", strtotime($de));
        $final = date("Y-m-d", strtotime($ate));
        
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $vendedores = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Vend%")->get();
        }else{
            $vendedores = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Vend%")->where("unidade_id", Auth::user()->unidade_id)->get();
        }
        $vendedoresAtivos = $vendedores->where("funcionario_status", 1);
        $vendedoresInativos = $vendedores->where("funcionario_status", 2);

        //RANKING DE VENDEDORES
        foreach($vendedoresAtivos as $v){
            $v["dado_visitas"] = 0;
            $v["dado_mrt"] = 0;
            $v["dado_elleve"] = 0;
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $v["dado_visitas"] += $d->dado_visitas;
                $v["dado_mrt"] += $d->dado_mrt;
                $v["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        foreach($vendedoresAtivos as $v){
            // $v["dado_total"] = ($v->dado_mrt + $v->dado_elleve);
            $v["dado_total"] = ($v->dado_mrt);
            if($v["dado_total"] == 0){
                $v["dado_apr"] = 0;
            }else{
                $v["dado_apr"] = number_format($v->dado_visitas / $v["dado_total"], 2);
            }
        }
        //SEPARA OS 10 PRIMEIROS
        $vendedores_todos = $vendedoresAtivos->sort(function($a, $b) {
            if($a->dado_total === $b->dado_total) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_total > $b->dado_total ? -1 : 1;
         });

        $vendedores_outros = [];
        $vendedores_outros["dado_mrt"] = 0;
        $vendedores_outros["dado_visitas"] = 0;
        $vendedores_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($vendedoresInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $vendedores_outros["dado_visitas"] += $d->dado_visitas;
                $vendedores_outros["dado_mrt"] += $d->dado_mrt;
                $vendedores_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"] + $vendedores_outros["dado_elleve"]);
        $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"]);
        if($vendedores_outros["dado_total"] == 0){
            $vendedores_outros["dado_apr"] = 0;
        }else{
            $vendedores_outros["dado_apr"] = number_format($vendedores_outros["dado_visitas"] / $vendedores_outros["dado_total"], 2);
        }
        
        return view("ranking.vendedores", compact("vendedores_todos", "vendedores_outros"));
    }

    public function telemarketing()
    {
        $unidades = DB::table("Imugi_unidades")->select("unidade_id")->where("unidade_status", "!=", 1)->get();
        $unidade_desativadas = [];
        foreach($unidades as $u){
            array_push($unidade_desativadas, $u->unidade_id);
        }

        //RANKING GERAL DE VENDEDORES
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $vendedores = Funcionario::whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Telemarketing%")->with(["dados", "unidade"])->get();
        }else{
            $vendedores = Funcionario::whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Telemarketing%")->where("unidade_id", Auth::user()->unidade_id)->with(["dados", "unidade"])->get();
        }
        $vendedoresAtivos = $vendedores->where("funcionario_status", 1);
        $vendedoresInativos = $vendedores->where("funcionario_status", 2);

        //RANKING DE VENDEDORES
        foreach($vendedoresAtivos as $v){
            $v["dado_visitas"] = 0;
            $v["dado_mrt"] = 0;
            $v["dado_elleve"] = 0;
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $v["dado_visitas"] += $d->dado_visitas;
                $v["dado_mrt"] += $d->dado_mrt;
                $v["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        foreach($vendedoresAtivos as $v){
            // $v["dado_total"] = ($v->dado_mrt + $v->dado_elleve);
            $v["dado_total"] = ($v->dado_mrt);
            if($v["dado_total"] == 0){
                $v["dado_apr"] = 0;
            }else{
                $v["dado_apr"] = number_format($v->dado_visitas / $v["dado_total"], 2);
            }
        }

        $vendedores_outros = [];
        $vendedores_outros["dado_mrt"] = 0;
        $vendedores_outros["dado_visitas"] = 0;
        $vendedores_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($vendedoresInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $vendedores_outros["dado_visitas"] += $d->dado_visitas;
                $vendedores_outros["dado_mrt"] += $d->dado_mrt;
                $vendedores_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"] + $vendedores_outros["dado_elleve"]);
        $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"]);
        if($vendedores_outros["dado_total"] == 0){
            $vendedores_outros["dado_apr"] = 0;
        }else{
            $vendedores_outros["dado_apr"] = number_format($vendedores_outros["dado_visitas"] / $vendedores_outros["dado_total"], 2);
        }

        $vendedores_todos = $vendedoresAtivos->sort(function($a, $b) {
            if($a->dado_visitas === $b->dado_visitas) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_visitas > $b->dado_visitas ? -1 : 1;
         });

        return view("ranking.telemarketing", compact("vendedores_todos", "vendedores_outros"));

    }

    public function filtroTelemarketing($de, $ate)
    {
        $unidades = DB::table("Imugi_unidades")->select("unidade_id")->where("unidade_status", "!=", 1)->get();
        $unidade_desativadas = [];
        foreach($unidades as $u){
            array_push($unidade_desativadas, $u->unidade_id);
        }

        $inicial = date("Y-m-d", strtotime($de));
        $final = date("Y-m-d", strtotime($ate));
        
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $vendedores = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Telemarketing%")->get();
        }else{
            $vendedores = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->whereNotIn('unidade_id', $unidade_desativadas)->where("funcionario_cargo", "like", "%Telemarketing%")->where("unidade_id", Auth::user()->unidade_id)->get();
        }
        $vendedoresAtivos = $vendedores->where("funcionario_status", 1);
        $vendedoresInativos = $vendedores->where("funcionario_status", 2);

        //RANKING DE VENDEDORES
        foreach($vendedoresAtivos as $v){
            $v["dado_visitas"] = 0;
            $v["dado_mrt"] = 0;
            $v["dado_elleve"] = 0;
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $v["dado_visitas"] += $d->dado_visitas;
                $v["dado_mrt"] += $d->dado_mrt;
                $v["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        foreach($vendedoresAtivos as $v){
            // $v["dado_total"] = ($v->dado_mrt + $v->dado_elleve);
            $v["dado_total"] = ($v->dado_mrt);
            if($v["dado_total"] == 0){
                $v["dado_apr"] = 0;
            }else{
                $v["dado_apr"] = number_format($v->dado_visitas / $v["dado_total"], 2);
            }
        }
        //SEPARA OS 10 PRIMEIROS
        $vendedores_todos = $vendedoresAtivos->sort(function($a, $b) {
            if($a->dado_visitas === $b->dado_visitas) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_visitas > $b->dado_visitas ? -1 : 1;
         });

        $vendedores_outros = [];
        $vendedores_outros["dado_mrt"] = 0;
        $vendedores_outros["dado_visitas"] = 0;
        $vendedores_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($vendedoresInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $vendedores_outros["dado_visitas"] += $d->dado_visitas;
                $vendedores_outros["dado_mrt"] += $d->dado_mrt;
                $vendedores_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"] + $vendedores_outros["dado_elleve"]);
        $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"]);
        if($vendedores_outros["dado_total"] == 0){
            $vendedores_outros["dado_apr"] = 0;
        }else{
            $vendedores_outros["dado_apr"] = number_format($vendedores_outros["dado_visitas"] / $vendedores_outros["dado_total"], 2);
        }
        
        return view("ranking.telemarketing", compact("vendedores_todos", "vendedores_outros"));
    }
   
    public function unidade($unidade_id)
    {
        //RANKING GERAL DE VENDEDORES
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $vendedores = Funcionario::where('unidade_id', $unidade_id)->where("funcionario_cargo", "like", "%Vend%")->with(["dados", "unidade"])->get();
        }else{
            $vendedores = Funcionario::where('unidade_id', $unidade_id)->where("funcionario_cargo", "like", "%Vend%")->where("unidade_id", Auth::user()->unidade_id)->with(["dados", "unidade"])->get();
        }
        $vendedoresAtivos = $vendedores->where("funcionario_status", 1);
        $vendedoresInativos = $vendedores->where("funcionario_status", 2);
        $vendedorUnidades = $vendedores->groupBy("unidade_id");
        $vendedoresGeral = [];
        foreach($vendedorUnidades as $key => $u){
            $unidade = [];
            $unidade["dado_visitas"] = 0;
            $unidade["dado_mrt"] = 0;
            $unidade["dado_elleve"] = 0;
            $unidade["unidade_id"] = $u[0]->unidade_id;
            $unidade["unidade_nome"] = isset($u[0]->unidade) ? $u[0]->unidade->unidade_nome : "---";
            foreach($u as $f){
                foreach($f->dados as $d){
                    $unidade["dado_visitas"] += $d->dado_visitas;
                    $unidade["dado_mrt"] += $d->dado_mrt;
                    $unidade["dado_elleve"] += $d->dado_elleve;
                }
            }
            // $unidade["dado_total"] = $unidade["dado_mrt"] + $unidade["dado_elleve"];
            $unidade["dado_total"] = $unidade["dado_mrt"];
            if($unidade["dado_total"] == 0){
                $unidade["dado_apr"] = number_format($unidade["dado_visitas"], 2);
            }else{
                $unidade["dado_apr"] = number_format($unidade["dado_visitas"] / $unidade["dado_total"], 2);
            }
            array_push($vendedoresGeral, $unidade);
        }
        //METODO QUE ORDENA PELO "DADO_APR"        
        usort($vendedoresGeral, array($this, 'sortApr'));

        //RANKING DE VENDEDORES
        foreach($vendedoresAtivos as $v){
            $v["dado_visitas"] = 0;
            $v["dado_mrt"] = 0;
            $v["dado_elleve"] = 0;
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $v["dado_visitas"] += $d->dado_visitas;
                $v["dado_mrt"] += $d->dado_mrt;
                $v["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        foreach($vendedoresAtivos as $v){
            // $v["dado_total"] = ($v->dado_mrt + $v->dado_elleve);
            $v["dado_total"] = ($v->dado_mrt);
            if($v["dado_total"] == 0){
                $v["dado_apr"] = 0;
            }else{
                $v["dado_apr"] = number_format($v->dado_visitas / $v["dado_total"], 2);
            }
        }
        //SEPARA OS 10 PRIMEIROS
        $vendedores_top10 = $vendedoresAtivos->sort(function($a, $b) {
            if($a->dado_total === $b->dado_total) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_total > $b->dado_total ? -1 : 1;
         });

        $vendedores_outros = [];
        $vendedores_outros["dado_mrt"] = 0;
        $vendedores_outros["dado_visitas"] = 0;
        $vendedores_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($vendedoresInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $vendedores_outros["dado_visitas"] += $d->dado_visitas;
                $vendedores_outros["dado_mrt"] += $d->dado_mrt;
                $vendedores_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"] + $vendedores_outros["dado_elleve"]);
        $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"]);
        if($vendedores_outros["dado_total"] == 0){
            $vendedores_outros["dado_apr"] = 0;
        }else{
            $vendedores_outros["dado_apr"] = number_format($vendedores_outros["dado_visitas"] / $vendedores_outros["dado_total"], 2);
        }

        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $telemarketing = Funcionario::where('unidade_id', $unidade_id)->where("funcionario_cargo", "like", "%Telemarketing%")->with(["dados", "unidade"])->get();
        }else{
            $telemarketing = Funcionario::where('unidade_id', $unidade_id)->where("funcionario_cargo", "like", "%Telemarketing%")->where("unidade_id", Auth::user()->unidade_id)->with(["dados", "unidade"])->get();
        }
        $telemarketingAtivos = $telemarketing->where("funcionario_status", 1);
        $telemarketingInativos = $telemarketing->where("funcionario_status", 2);

        foreach($telemarketingAtivos as $t){
            $t["dado_visitas"] = 0;
            $t["dado_mrt"] = 0;
            $t["dado_elleve"] = 0;
            foreach($t->dados as $d){
                $t["dado_visitas"] += $d->dado_visitas;
                $t["dado_mrt"] += $d->dado_mrt;
                $t["dado_elleve"] += $d->dado_elleve;
            }
        }
        foreach($telemarketingAtivos as $t){
            // $t["dado_total"] = ($t->dado_mrt + $t->dado_elleve);
            $t["dado_total"] = ($t->dado_mrt);
            if($t["dado_total"] == 0){
                $t["dado_apr"] = 0;
            }else{
                $t["dado_apr"] = number_format($t->dado_visitas / $t["dado_total"], 2);
            }
        }
        // $telemarketing_top10 = $telemarketingAtivos->sortBy("dado_apr")->sortByDesc("dado_total")->take(10);
        $telemarketing_top10 = $telemarketingAtivos->sort(function($a, $b) {
            if($a->dado_total === $b->dado_total) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_total > $b->dado_total ? -1 : 1;
         });

        $telemarketing_outros = [];
        $telemarketing_outros["dado_mrt"] = 0;
        $telemarketing_outros["dado_visitas"] = 0;
        $telemarketing_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($telemarketingInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $telemarketing_outros["dado_visitas"] += $d->dado_visitas;
                $telemarketing_outros["dado_mrt"] += $d->dado_mrt;
                $telemarketing_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $telemarketing_outros["dado_total"] = ($telemarketing_outros["dado_mrt"] + $telemarketing_outros["dado_elleve"]);
        $telemarketing_outros["dado_total"] = ($telemarketing_outros["dado_mrt"]);
        if($telemarketing_outros["dado_total"] == 0){
            $telemarketing_outros["dado_apr"] = 0;
        }else{
            $telemarketing_outros["dado_apr"] = number_format($telemarketing_outros["dado_visitas"] / $telemarketing_outros["dado_total"], 2);
        }
        
        return view("ranking.unidade", compact("vendedoresGeral", "vendedores_top10", "vendedores_outros", "telemarketing_top10", "telemarketing_outros", "unidade_id"));
    }

    public function unidadeFiltro($unidade_id, $de, $ate)
    {
        $inicial = date("Y-m-d", strtotime($de));
        $final = date("Y-m-d", strtotime($ate));
        
        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $vendedores = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->where('unidade_id', $unidade_id)->where("funcionario_cargo", "like", "%Vend%")->get();
        }else{
            $vendedores = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->where('unidade_id', $unidade_id)->where("funcionario_cargo", "like", "%Vend%")->where("unidade_id", Auth::user()->unidade_id)->get();
        }
        $vendedoresAtivos = $vendedores->where("funcionario_status", 1);
        $vendedoresInativos = $vendedores->where("funcionario_status", 2);
        

        //RANKING GERAL DE VENDEDORES
        $vendedorUnidades = $vendedores->groupBy("unidade_id");
        $vendedoresGeral = [];
        foreach($vendedorUnidades as $key => $u){
            $unidade = [];
            $unidade["dado_visitas"] = 0;
            $unidade["dado_mrt"] = 0;
            $unidade["dado_elleve"] = 0;
            $unidade["unidade_id"] = $u[0]->unidade->unidade_id;
            $unidade["unidade_nome"] = isset($u[0]->unidade) ? $u[0]->unidade->unidade_nome : "---";
            foreach($u as $f){
                foreach($f->dados as $d){
                    $unidade["dado_visitas"] += $d->dado_visitas;
                    $unidade["dado_mrt"] += $d->dado_mrt;
                    $unidade["dado_elleve"] += $d->dado_elleve;
                }
            }
            // $unidade["dado_total"] = $unidade["dado_mrt"] + $unidade["dado_elleve"];
            $unidade["dado_total"] = $unidade["dado_mrt"];
            if($unidade["dado_total"] == 0){
                $unidade["dado_apr"] = 0;
            }else{
                $unidade["dado_apr"] = number_format($unidade["dado_visitas"] / $unidade["dado_total"], 2);
            }
            array_push($vendedoresGeral, $unidade);
        }
        //METODO QUE ORDENA PELO "DADO_APR"        
        usort($vendedoresGeral, array($this, 'sortApr'));

        //RANKING DE VENDEDORES
        foreach($vendedoresAtivos as $v){
            $v["dado_visitas"] = 0;
            $v["dado_mrt"] = 0;
            $v["dado_elleve"] = 0;
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $v["dado_visitas"] += $d->dado_visitas;
                $v["dado_mrt"] += $d->dado_mrt;
                $v["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        foreach($vendedoresAtivos as $v){
            // $v["dado_total"] = ($v->dado_mrt + $v->dado_elleve);
            $v["dado_total"] = ($v->dado_mrt);
            if($v["dado_total"] == 0){
                $v["dado_apr"] = 0;
            }else{
                $v["dado_apr"] = number_format($v->dado_visitas / $v["dado_total"], 2);
            }
        }
        //SEPARA OS 10 PRIMEIROS
        $vendedores_top10 = $vendedoresAtivos->sort(function($a, $b) {
            if($a->dado_total === $b->dado_total) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_total > $b->dado_total ? -1 : 1;
         });

        $vendedores_outros = [];
        $vendedores_outros["dado_mrt"] = 0;
        $vendedores_outros["dado_visitas"] = 0;
        $vendedores_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($vendedoresInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $vendedores_outros["dado_visitas"] += $d->dado_visitas;
                $vendedores_outros["dado_mrt"] += $d->dado_mrt;
                $vendedores_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"] + $vendedores_outros["dado_elleve"]);
        $vendedores_outros["dado_total"] = ($vendedores_outros["dado_mrt"]);
        if($vendedores_outros["dado_total"] == 0){
            $vendedores_outros["dado_apr"] = 0;
        }else{
            $vendedores_outros["dado_apr"] = number_format($vendedores_outros["dado_visitas"] / $vendedores_outros["dado_total"], 2);
        }

        if(Auth::user()->cargo->cargo_nome == "Administrador"){
            $telemarketing = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->where('unidade_id', $unidade_id)->where("funcionario_cargo", "like", "%Telemarketing%")->get();
        }else{
            $telemarketing = Funcionario::with(["dados" => function($dado) use ($inicial, $final){
                $dado->whereBetween("dado_data" ,[$inicial, $final]);
            }, "unidade"])->where('unidade_id', $unidade_id)->where("funcionario_cargo", "like", "%Telemarketing%")->where("unidade_id", Auth::user()->unidade_id)->get();
        }
        $telemarketingAtivos = $telemarketing->where("funcionario_status", 1);
        $telemarketingInativos = $telemarketing->where("funcionario_status", 2);

        foreach($telemarketingAtivos as $t){
            $t["dado_visitas"] = 0;
            $t["dado_mrt"] = 0;
            $t["dado_elleve"] = 0;
            foreach($t->dados as $d){
                $t["dado_visitas"] += $d->dado_visitas;
                $t["dado_mrt"] += $d->dado_mrt;
                $t["dado_elleve"] += $d->dado_elleve;
            }
        }
        foreach($telemarketingAtivos as $t){
            // $t["dado_total"] = ($t->dado_mrt + $t->dado_elleve);
            $t["dado_total"] = ($t->dado_mrt);
            if($t["dado_total"] == 0){
                $t["dado_apr"] = 0;
            }else{
                $t["dado_apr"] = number_format($t->dado_visitas / $t["dado_total"], 2);
            }
        }
        $telemarketing_top10 = $telemarketingAtivos->sort(function($a, $b) {
            if($a->dado_total === $b->dado_total) {
              if($a->dado_apr === $b->dado_apr) {
                return 0;
              }
              return $a->dado_apr < $b->dado_apr ? -1 : 1;
            } 
            return $a->dado_total > $b->dado_total ? -1 : 1;
         });

        $telemarketing_outros = [];
        $telemarketing_outros["dado_mrt"] = 0;
        $telemarketing_outros["dado_visitas"] = 0;
        $telemarketing_outros["dado_elleve"] = 0;
        //RANKING DE VENDEDORES
        foreach($telemarketingInativos as $v){
            //SOMA AS VISITAS E MRT DE CADA VENDEDOR
            foreach($v->dados as $d){
                $telemarketing_outros["dado_visitas"] += $d->dado_visitas;
                $telemarketing_outros["dado_mrt"] += $d->dado_mrt;
                $telemarketing_outros["dado_elleve"] += $d->dado_elleve;
            }
        }
        //CALCULA A TAXA DE CONVERSAO
        // $telemarketing_outros["dado_total"] = ($telemarketing_outros["dado_mrt"] + $telemarketing_outros["dado_elleve"]);
        $telemarketing_outros["dado_total"] = ($telemarketing_outros["dado_mrt"]);
        if($telemarketing_outros["dado_total"] == 0){
            $telemarketing_outros["dado_apr"] = 0;
        }else{
            $telemarketing_outros["dado_apr"] = number_format($telemarketing_outros["dado_visitas"] / $telemarketing_outros["dado_total"], 2);
        }
        
        return view("ranking.unidade", compact("vendedoresGeral", "vendedores_top10", "vendedores_outros", "telemarketing_top10", "telemarketing_outros", "unidade_id"));
    }
}
