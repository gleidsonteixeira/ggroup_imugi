<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
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
            $paginas = Cliente::count();
            return view("admin/clientes", compact('unidades', 'paginas'));
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
        
        if($request->has('e_cliente_id')){
            $cliente = Cliente::find($data['e_cliente_id']);
            $cliente->cliente_nome = $data['e_cliente_nome'];
            $cliente->cliente_email = $data['e_cliente_email'];
            $cliente->cliente_senha = Hash::make($data['e_cliente_senha']);
            $cliente->cliente_data = date('Y-m-d H:i:s');
            $cliente->cliente_matricula = $data['e_cliente_matricula'];
            $cliente->cliente_status = $data['e_cliente_status'];
            $cliente->cliente_status_financeiro = $data['e_cliente_status_financeiro'];
            $cliente->unidade_id = $data['e_unidade_id'];
            $cliente->save();
            return "2";
        }else{    
            $cliente = new Cliente();
            $cliente->cliente_nome = $data['cliente_nome'];
            $cliente->cliente_email = $data['cliente_email'];
            $cliente->cliente_senha = Hash::make($data['cliente_senha']);
            $cliente->cliente_descricao = "Olá, eu sou...";
            $cliente->cliente_foto = "";
            $cliente->cliente_capa = "";
            $cliente->cliente_data = date('Y-m-d H:i:s');
            $cliente->cliente_matricula = $data['cliente_matricula'];
            $cliente->cliente_primeiro_acesso = 0;
            $cliente->cliente_status = $data['cliente_status'];
            $cliente->cliente_status_financeiro = 2;
            $cliente->unidade_id = $data['unidade_id'];
            $cliente->save();
            return "1";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cliente_id)
    {
        $cliente = Cliente::find($cliente_id);
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente_id)
    {
        Cliente::destroy($cliente_id);
        return "1";
    }

    public function carregarLista(){
        $clientes = Cliente::simplePaginate(10);
        return view("admin/clientes-lista", compact('clientes'));
    }
    
    public function buscar($buscar, $unidade){
        $clientes = Cliente::where([
                                ['cliente_nome','like','%'.$buscar.'%'],
                                ['unidade_id', $unidade]
                            ])
                            ->orWhere('cliente_id','like','%'.$buscar.'%')
                            ->orWhere('cliente_matricula','like','%'.$buscar.'%')->get();
        return view("admin/clientes-busca", compact('clientes'));
    }
}
