<?php

namespace App\Http\Controllers;

use App\Mail\Frequencia;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;

class FrequenciaController extends Controller
{
    public function index()
    {
        $matricula = Auth::user()->matricula;
        $id = Auth::user()->id;
        $aluno = User::find($id);
        $alunos = DB::table('turmas')->where('matricula', $matricula)->get();
        $frequencia = DB::table('frequencia')->select('per_presenca')->where('codigo', $matricula)->limit(1)->get('per_presenca');
        return view('portal/frequencia/index', compact('frequencia', 'alunos','aluno'));
    }

    public function enviar(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'aula_perdida' => 'required',
            'mensagem' => 'required',
        ]);

        $data = array(
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'aula_perdida' => $request->aula_perdida,
            'mensagem' => $request->mensagem,
        );

        Mail::to('smtp@imugi.com.br')->send(new Frequencia($data));
        return back()->with('success', 'Email enviado com sucesso !');

    }
}
