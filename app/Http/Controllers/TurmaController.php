<?php

namespace App\Http\Controllers;

use App\Turma;
use App\TurmaCliente;
use App\User;
use App\Curso;
use App\Horario;
use App\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TurmaController extends Controller
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
            $cursos = Curso::All()->where("curso_status", 1);
            $professores = User::All()->where("status", 1)->filter(function($professor){
                return $professor->cargo->cargo_nome == "Professor";
            });
            $horarios = Horario::All();
            $unidades = Unidade::All()->where("unidade_status", 1);
            return view("admin/turmas", compact('cursos', 'professores', 'unidades', 'horarios'));
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
        
        if($request->has('e_turma_id')){
            $turma = Turma::find($data['e_turma_id']);
            $turma->turma_nome = $data['e_turma_nome'];
            $turma->turma_descricao = $data['e_turma_descricao'];
            if($request->hasFile('e_turma_foto')) {
                $originName = $request->file('e_turma_foto')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('e_turma_foto')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
                $request->file('e_turma_foto')->move(public_path('assets/img/turmas/perfis'), $fileName);
                $url = asset('assets/img/turmas/perfis/'.$fileName);
                $turma->turma_foto = $url;
            }
            if($request->hasFile('e_turma_capa')) {
                $originName = $request->file('e_turma_capa')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('e_turma_capa')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
                $request->file('e_turma_capa')->move(public_path('assets/img/turmas/capas'), $fileName);
                $url = asset('assets/img/turmas/capas/'.$fileName);
                $turma->turma_capa = $url;
            }
            $turma->turma_data_inicio = $data['e_turma_data_inicio'];
            $turma->turma_data_fim = $data['e_turma_data_fim'];
            $turma->turma_status = $data['e_turma_status'];
            $turma->curso_id = $data['e_curso_id'];
            $turma->horario_id = $data['e_horario_id'];
            $turma->professor_id = $data['e_professor_id'];
            $turma->unidade_id = $data['e_unidade_id'];
            $turma->save();
            return "2";
        }else if($request->has('a_turma_id')){
            $alunos = $request->alunos;
            foreach($alunos as $aluno){
                $a = new TurmaCliente();
                $a->cliente_id = $aluno;
                $a->turma_id = $data['a_turma_id'];
                $a->turma_cliente_data = date("Y-m-d H:i:s");
                $a->save();
            }
            Turma::find($data['a_turma_id'])->increment('turma_vagas', sizeOf($alunos));
            return "3";
        }else{    
            $turma = new Turma();
            $turma->turma_nome = $data['turma_nome'];
            $turma->turma_descricao = $data['turma_descricao'];
            if($request->hasFile('turma_foto')) {
                $originName = $request->file('turma_foto')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('turma_foto')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
                $request->file('turma_foto')->move(public_path('assets/img/turmas/perfis'), $fileName);
                $url = asset('assets/img/turmas/perfis/'.$fileName);
                $turma->turma_foto = $url;
            }
            if($request->hasFile('turma_capa')) {
                $originName = $request->file('turma_capa')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('turma_capa')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
                $request->file('turma_capa')->move(public_path('assets/img/turmas/capas'), $fileName);
                $url = asset('assets/img/turmas/capas/'.$fileName);
                $turma->turma_capa = $url;
            }
            $turma->turma_data = date('Y-m-d H:i:s');
            $turma->turma_data_inicio = $data['turma_data_inicio'];
            $turma->turma_data_fim = $data['turma_data_fim'];
            $turma->turma_periodo = $data['turma_periodo'];
            $turma->turma_status = $data['turma_status'];
            $turma->curso_id = $data['curso_id'];
            $turma->horario_id = $data['horario_id'];
            $turma->professor_id = $data['professor_id'];
            $turma->unidade_id = $data['unidade_id'];
            $turma->save();
            return "1";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $empresa_id
     * @return \Illuminate\Http\Response
     */
    public function show($turma_id)
    {
        $turma = Turma::find($turma_id);
        return $turma;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $empresa_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($turma_id)
    {
        $turma = Turma::find($turma_id);
        if($turma->turma_vagas > 0){
            return "2";
        }else{
            Turma::destroy($turma_id);
            return "1";
        }
    }

    public function carregarLista(){
        $turmas = Turma::all();
        return view("admin/turmas-lista", compact('turmas'));
    }

    public function carregarImagem(Request $request){
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('assets/img/cursos'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('assets/img/cursos/'.$fileName); 
            $msg = 'Upload concluído'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    public function alunos($turma_id){
        $clientes = TurmaCliente::where("turma_id", $turma_id)->get();
        return view("admin/turma-lista", compact('clientes'));
    }

    public function removerAluno($aluno_id, $turma_id)
    {
        TurmaCliente::destroy($aluno_id);
        Turma::where("turma_id", $turma_id)->decrement('turma_vagas', 1);
        return "1";
    }
}
