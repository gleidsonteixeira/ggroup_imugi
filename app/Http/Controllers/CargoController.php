<?php

namespace App\Http\Controllers;

use App\User;
use App\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CargoController extends Controller
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
            return view("admin/cargos");
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
        
        if($request->has('e_cargo_id')){
            $cargo = Cargo::find($data['e_cargo_id']);
            $cargo->cargo_nome = $data['e_cargo_nome'];
            $cargo->cargo_menus = $data['e_cargo_menus'];
            $cargo->cargo_status = $data['e_cargo_status'];
            $cargo->save();
            return "2";
        }else{    
            $cargo = new Cargo();
            $cargo->cargo_nome = $data['cargo_nome'];
            $cargo->cargo_menus = $data['cargo_menus'];
            $cargo->cargo_status = $data['cargo_status'];
            $cargo->save();
            return "1";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cargo_id)
    {
        $cargo = Cargo::find($cargo_id);
        return $cargo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cargo_id)
    {
        $usuarios = Cargo::find($cargo_id)->usuario;
        if($usuarios != null){
            return "2";
        }else{
            Cargo::destroy($cargo_id);
            return "1";
        }
    }

    public function carregarLista(){
        $cargos = Cargo::all();
        return view("admin/cargos-lista", compact('cargos'));
    }
}
