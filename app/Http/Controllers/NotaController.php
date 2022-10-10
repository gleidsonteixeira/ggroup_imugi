<?php



namespace App\Http\Controllers;



use DB;
use App\User;
use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class NotaController extends Controller

{

    public function index()

    {
        $matricula = Auth::user()->matricula;
        $aluno = Auth::user();
        $alunos = DB::table('turmas')->where('matricula', $matricula)->get();
        $notaAluno = DB::table('notas')->where('matricula', $matricula)->get();
        
        $minhas_notas = Auth::user()->notas;
        $playTrabalho = 0;
        $playPratica = 0;
        $playTeorica = 0;
        $photoshopTrabalho = 0;
        $photoshopPratica = 0;
        $photoshopTeorica = 0;
        $dominatingTrabalho = 0;
        $dominatingPratica = 0;
        $dominatingTeorica = 0;
        $gameTrabalho = 0;
        $gamePratica = 0;
        $gameTeorica = 0;
        $masterTrabalho = 0;
        $masterPratica = 0;
        $masterTeorica = 0;
        $videoTrabalho = 0;
        $videoPratica = 0;
        $videoTeorica = 0;
        $boletim = [];

        foreach($minhas_notas as $nota){
            switch($nota->etapa){
                case 1:
                    if($nota->avaliacao == "TRABALHOS"){
                        $playTrabalho = $nota->notas;
                    }else if($nota->avaliacao == "PROVA PRATICA"){
                        $playPratica = $nota->notas;
                    }else{
                        $playTeorica = $nota->notas;
                    }
                break;
                case 2:
                    if($nota->avaliacao == "TRABALHOS"){
                        $photoshopTrabalho = $nota->notas;
                    }else if($nota->avaliacao == "PROVA PRATICA"){
                        $photoshopPratica = $nota->notas;
                    }else{
                        $photoshopTeorica = $nota->notas;
                    }
                break;
                case 3:
                    if($nota->avaliacao == "TRABALHOS"){
                        $dominatingTrabalho = $nota->notas;
                    }else if($nota->avaliacao == "PROVA PRATICA"){
                        $dominatingPratica = $nota->notas;
                    }else{
                        $dominatingTeorica = $nota->notas;
                    }
                break;
                case 4:
                    if($nota->avaliacao == "TRABALHOS"){
                        $gameTrabalho = $nota->notas;
                    }else if($nota->avaliacao == "PROVA PRATICA"){
                        $gamePratica = $nota->notas;
                    }else{
                        $gameTeorica = $nota->notas;
                    }
                break;
                case 5:
                    if($nota->avaliacao == "TRABALHOS"){
                        $masterTrabalho = $nota->notas;
                    }else if($nota->avaliacao == "PROVA PRATICA"){
                        $masterPratica = $nota->notas;
                    }else{
                        $masterTeorica = $nota->notas;
                    }
                break;
                case 6:
                    if($nota->avaliacao == "TRABALHOS"){
                        $videoTrabalho = $nota->notas;
                    }else if($nota->avaliacao == "PROVA PRATICA"){
                        $videoPratica = $nota->notas;
                    }else{
                        $videoTeorica = $nota->notas;
                    }
                break;
            }
        }
        $boletim[0] = array(
            "trabalho" => $playTrabalho,
            "pratica" => $playPratica,
            "teorica" => $playTeorica
        );
        $boletim[1] = array(
            "trabalho" => $photoshopTrabalho,
            "pratica" => $photoshopPratica,
            "teorica" => $photoshopTeorica
        );
        $boletim[2] = array(
            "trabalho" => $dominatingTrabalho,
            "pratica" => $dominatingPratica,
            "teorica" => $dominatingTeorica
        );
        $boletim[3] = array(
            "trabalho" => $gameTrabalho,
            "pratica" => $gamePratica,
            "teorica" => $gameTeorica
        );
        $boletim[4] = array(
            "trabalho" => $masterTrabalho,
            "pratica" => $masterPratica,
            "teorica" => $masterTeorica
        );
        $boletim[5] = array(
            "trabalho" => $videoTrabalho,
            "pratica" => $videoPratica,
            "teorica" => $videoTeorica
        );
        
        foreach($notaAluno as $notaKey => $notaData) {
            $playTeorica = isset($notaAluno[7]->notas) ? $notaAluno[7]->notas : "--";
            $playPratica = isset($notaAluno[10]->notas) ? $notaAluno[10]->notas : "--";
            $playTrabalho = isset($notaAluno[11]->notas) ? $notaAluno[11]->notas : "--";
            $photoshopTeorica = isset($notaAluno[12]->notas) ? $notaAluno[12]->notas : "--";
            $photoshopPratica = isset($notaAluno[0]->notas) ? $notaAluno[0]->notas : "--";
            $photoshopTrabalho = isset($notaAluno[8]->notas) ? $notaAluno[8]->notas : "--";
            $dominatingTeorica = isset($notaAluno[2]->notas) ? $notaAluno[2]->notas : "--";
            $dominatingPratica = isset($notaAluno[13]->notas) ? $notaAluno[13]->notas : "--";
            $dominatingTrabalho = isset($notaAluno[1]->notas) ? $notaAluno[1]->notas : "--";
            $gamesTeorica = isset($notaAluno[14]->notas) ? $notaAluno[14]->notas : "--";
            $gamesPratica = isset($notaAluno[3]->notas) ? $notaAluno[3]->notas : "--";
            $gamesTrabalho = isset($notaAluno[9]->notas) ? $notaAluno[9]->notas : "--";
            $masterTeorica = isset($notaAluno[5]->notas) ? $notaAluno[5]->notas : "--";
            $masterPratica = isset($notaAluno[15]->notas) ? $notaAluno[15]->notas : "--";
            $masterTrabalho = isset($notaAluno[4]->notas) ? $notaAluno[4]->notas : "--";
            $videoTeorica = isset($notaAluno[6]->notas) ? $notaAluno[6]->notas : "--";
            $videoPratica = isset($notaAluno[16]->notas) ? $notaAluno[16]->notas : "--";
            $videoTrabalho = isset($notaAluno[17]->notas) ? $notaAluno[17]->notas : "--";

            if(is_numeric($playTeorica) && is_numeric($playPratica) && is_numeric($playTrabalho)) {
                $playMedia = ($playTeorica + $playPratica + $playTrabalho) / 3;
            }else{
                $playMedia = "--";
            }

            if (is_numeric($photoshopTeorica) && is_numeric($photoshopPratica) && is_numeric($photoshopTrabalho)) {
                $photoshopMedia = ($photoshopTeorica + $photoshopPratica + $photoshopTrabalho) / 3;
            } else {
                $photoshopMedia = "--";
            }

            if (is_numeric($dominatingTeorica) && is_numeric($dominatingPratica) && is_numeric($dominatingTrabalho)) {
                $dominatingMedia = ($dominatingTeorica + $dominatingPratica + $dominatingTrabalho) / 3;
            } else {
                $dominatingMedia = "--";
            }

            if (is_numeric($gamesTeorica) && is_numeric($gamesPratica) && is_numeric($gamesTrabalho)) {
                $gameMedia = ($gamesTeorica + $gamesPratica + $gamesTrabalho) / 3;
            } else {
                $gamesMedia = "--";
            }

            if (is_numeric($masterTeorica) && is_numeric($masterPratica) && is_numeric($masterTrabalho)) {
                $masterMedia = ($masterTeorica + $masterPratica + $masterTrabalho) / 3;
            } else {
                $masterMedia = "--";
            }

            if (is_numeric($videoTeorica) && is_numeric($videoPratica) && is_numeric($videoTrabalho)) {
                $videoMedia = ($videoTeorica + $videoPratica + $videoTrabalho) / 3;
            } else {
                $videoMedia = "--";
            }

            $notas = [
                "modulos" => [
                    "PLAY GO",
                    "PHOTOSHOP",
                    "DOMINATING",
                    "GAME AND ANIMATION",
                    "MASTER OF LANGUAGE",
                    "VIDEO EDITION",
                ],
                "prova_teorica" => [
                    $playTeorica, $photoshopTeorica, $dominatingTeorica, $gamesTeorica, $masterTeorica, $videoTeorica,
                ],
                "prova_pratica" => [
                    $playPratica, $photoshopPratica, $dominatingPratica, $gamesPratica, $masterPratica, $videoPratica,
                ],
                "trabalhos" => [
                    $playTrabalho, $photoshopTrabalho, $dominatingTrabalho, $gamesTrabalho, $masterTrabalho, $videoTrabalho,
                ],
                "media" => [
                    $playMedia, $photoshopMedia, $dominatingMedia, $gamesMedia, $masterMedia, $videoMedia,
                ],
            ];
        }

        if(isset($notas)){
            return view('portal/nota/index', compact('boletim', 'alunos', 'notas','aluno'));
        }else{
            return view('portal/nota/index', compact('boletim', 'alunos','aluno'));
        }

    }

    public function notas()
    {
        $aluno = request()->user();
        return view("portal/notas/index", compact("aluno"));
    }

    public function store(Request $request)
    {
        $existe = Nota::where("matricula", $request->matricula)->where("avaliacao", $request->avaliacao)->where("etapa", $request->etapa)->first();
        if($existe){
            $nota = $existe;
            $nota->fill($request->all());
            $nota->save();
        }else{
            $nota = new Nota();
            $nota->fill($request->all());
            $nota->save();
        }
    }

    public function search($matricula)
    {
        $aluno = User::where("matricula", $matricula)->first();
        return $aluno;
    }

    // public function atualizar()
    // {
    //     $notas = Nota::all();
    //     foreach($notas as $nota){
    //         if($nota->avaliacao == " TRABALHOS"){
    //             $nota->avaliacao = "TRABALHOS";
    //             $nota->save();
    //         }
    //     }
    // }



}

