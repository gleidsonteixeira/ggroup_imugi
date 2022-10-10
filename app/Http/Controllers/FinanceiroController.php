<?php

namespace App\Http\Controllers;

use App\Unidade;
use App\User;
use Illuminate\Support\Facades\Auth;

class FinanceiroController extends Controller
{
    public function index()
    {
        $id= Auth::user()->id;
        $aluno = User::find($id);
        $matricula = Auth::user()->matricula;
        $unidades = Unidade::where('matricula', '=', $matricula)
            ->select('cod_unidade')
            ->get('cod_unidade');
        return view('portal/financeiro/index', compact('unidades','aluno'));

    }
}
