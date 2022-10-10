<?php



namespace App\Http\Controllers;



use App\Empresa;

use App\Unidade;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class UnidadeController extends Controller

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

            $empresas = Empresa::all()->where('empresa_status', 1);

            $paginas = Unidade::count();

            return view("admin/unidades", compact('empresas', 'paginas'));

        }else{

            return redirect("login");

        }

    }


    public function show($id)
    {
        return Unidade::find($id);
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

        

        if($request->has('e_unidade_id')){

            $unidade = Unidade::find($data['e_unidade_id']);

            $unidade->unidade_nome = $data['e_unidade_nome'];

            $unidade->unidade_codigo = $data['e_unidade_codigo'];

            $unidade->unidade_estado = $data['e_unidade_estado'];

            $unidade->unidade_data = date('Y-m-d H:i:s');

            $unidade->unidade_franquia = $data['e_unidade_franquia'];

            $unidade->unidade_status = $data['e_unidade_status'];

            $unidade->empresa_id = $data['e_empresa_id'];

            $unidade->save();

            return "2";

        }else{    

            $unidade = new Unidade();

            $unidade->unidade_nome = $data['unidade_nome'];

            $unidade->unidade_codigo = $data['unidade_codigo'];

            $unidade->unidade_estado = $data['unidade_estado'];

            $unidade->unidade_data = date('Y-m-d H:i:s');

            $unidade->unidade_franquia = $data['unidade_franquia'];

            $unidade->unidade_status = $data['unidade_status'];

            $unidade->empresa_id = $data['empresa_id'];

            $unidade->save();

            return "1";

        }

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $unidade_id

     * @return \Illuminate\Http\Response

     */

    public function show($unidade_id)

    {

        $unidade = Unidade::find($unidade_id);

        return $unidade;

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $unidade_id

     * @return \Illuminate\Http\Response

     */

    public function destroy($unidade_id)

    {

        $clientes = Unidade::find($unidade_id)->clientes;

        $colaboradores = Unidade::find($unidade_id)->colaboradores;

        $cursos = Unidade::find($unidade_id)->cursos;

        $turmas = Unidade::find($unidade_id)->turmas;

        

        if($clientes != null ){

            return "2";

        }else if($colaboradores != null ){

            return "3";

        }else if($cursos != null ){

            return "4";

        }else if($turmas != null ){

            return "5";

        }else{

            Unidade::destroy($unidade_id);

            return "1";

        }

    }



    public function carregarLista(){

        $unidades = Unidade::simplePaginate(10);

        return view("admin/unidades-lista", compact('unidades'));

    }

}

