<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Admin\Cargo;
use App\Http\Controllers\Controller;

class CargoController extends Controller
{
    public function index()
    {
        return view("admin.cargos");
    }

    public function list()
    {
        return Cargo::all();
    }

    public function store(Request $request){
        $cargo = new Cargo();
        $cargo->fill($request->all());
        $cargo->save();
    }

    public function update(Request $request, $id)
    {
        $cargo = Cargo::find($id);
        $cargo->fill($request->all());
        $cargo->save();
    }

    public function destroy($id){
        Cargo::destroy($id);
    }
}
