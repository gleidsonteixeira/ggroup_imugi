<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
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
            $unidades = Unidade::all()->where('unidade_status', 1);
            return view("admin/cursos", compact('unidades'));
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
        if($request->has('e_curso_id')){
            $curso = Curso::find($data['e_curso_id']);
            $curso->curso_nome = $data['e_curso_nome'];
            $curso->curso_descricao = $data['e_curso_descricao'];
            $curso->curso_descricao_curta = $data['e_curso_descricao_curta'];
            $curso->curso_valor = $data['e_curso_valor'];
            $curso->curso_duracao = $data['e_curso_duracao'];
            $curso->curso_status = $data['e_curso_status'];
            $curso->unidade_id = $data['e_unidade_id'];
            if($request->hasFile('e_curso_thumb')) {
                $originName = $request->file('e_curso_thumb')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('e_curso_thumb')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
                $request->file('e_curso_thumb')->move(public_path('assets/img/cursos/thumbs'), $fileName);
                $url = asset('assets/img/cursos/thumbs/'.$fileName);
                $curso->curso_thumb = $url;
            }
            $curso->save();
            return "2";
        }else{    
            $curso = new Curso();
            $curso->curso_nome = $data['curso_nome'];
            $curso->curso_descricao = $data['curso_descricao'];
            $curso->curso_descricao_curta = $data['curso_descricao_curta'];
            $curso->curso_valor = $data['curso_valor'];
            $curso->curso_duracao = $data['curso_duracao'];
            $curso->curso_status = $data['curso_status'];
            $curso->unidade_id = $data['unidade_id'];
            if($request->hasFile('curso_thumb')) {
                $originName = $request->file('curso_thumb')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('curso_thumb')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
                $request->file('curso_thumb')->move(public_path('assets/img/cursos/thumbs'), $fileName);
                $url = asset('assets/img/cursos/thumbs/'.$fileName);
                $curso->curso_thumb = $url;
            }
            $curso->save();
            return "1";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($curso_id)
    {
        $curso = Curso::find($curso_id);
        return $curso;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($curso_id)
    {
        $turmas = Curso::find($curso_id)->turma;
        if($turmas != null){
            return "2";
        }else{
            Curso::destroy($curso_id);
            return "1";
        }
    }

    public function carregarLista(){
        $cursos = Curso::all();
        return view("admin/cursos-lista", compact('cursos'));
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
}
