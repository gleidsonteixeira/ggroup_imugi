<?php

namespace App\Http\Controllers;

use App\User;
use App\Nota;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiUserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return response()->json($usuarios);
    }
    public function show($id){
        $usuario = User::find($id);
        if(!$usuario) {
            return null;
        }else{
            return response()->json($usuario->only("name","email","matricula","cargo_id","status","nivel","unidade_id","telefone","capa","foto","genero"));
        }
    }
    public function store(Request $request){
        $usuario = new User();
        $usuario->fill($request->all());
        $usuario->save();

        return response()->json($usuario, 201);
    }
    public function update(Request $request, $id){
        $usuario = User::find($id);

        if(!$usuario) {
            return response()->json([
                'message'   => 'Registro não encontrado.',
            ], 404);
        }

        $usuario->fill($request->all());
        $usuario->save();

        return response()->json($usuario);
    }
    public function destroy($id){
        $usuario = User::find($id);

        if(!$usuario) {
            return response()->json([
                'message'   => 'Registro não encontrado.',
            ], 404);
        }

        User::destroy($id);
        return "1";
    }
    public function login($email, $senha){
        $usuario = User::where("email", $email)->get();
        if(!$usuario) {
            return response()->json(0);
        }else{
            $credentials = ["email" => $email,"password" => $senha];
            if (Auth::attempt($credentials)) {
                return response()->json($usuario[0]->only("name","email","matricula","cargo_id","status","nivel","unidade_id","telefone","capa","foto","genero"));
            }else{
                return response()->json([
                    'message'   => 'Senha incorreta.',
                ], 404);
            }
        }
    }
    public function recuperar($email){
        $novaSenha = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -15); 
        $novaSenha = substr(rand(), 0, 8);
        $usuario = User::where("email", $email)->get();
        $usuario[0]->password = Hash::make($novaSenha);
        $usuario[0]->save();

        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                   // Enable verbose debug output
            $mail->isSMTP();                                        // Send using SMTP
            $mail->CharSet    = 'UTF-8';
            $mail->Host       = 'mail.fpeduc.com';                  // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'vendas@fpeduc.com';                // SMTP username
            $mail->Password   = 'ACd0SIXsfE';                       // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('vendas@fpeduc.com', 'Imugi');
            $mail->addAddress($email);                              // Add a recipient
            //$mail->addCC('pombocriativo@gmail.com');

            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = 'Alteração de senha Imugi';
            $mail->Body .= '    <div style="padding: 26px;display: block;font-family: Arial, Helvetica, sans-serif;">';
            $mail->Body .= '        <img src="https://site.imugi.com.br/assets/site/images/logo.png" alt="logo fpeduc" style="display: block;margin: 0 auto;">';
            // $mail->Body .= '        <img src="https://fpeduc.com.br/images/email/fpeduc.png" alt="banner sculpture" style="display: block;margin: 0 auto;margin-top: 16px;box-shadow: 0px 0px 25px rgba(56, 172, 84,.6);border-radius: 15px;">';
            $mail->Body .= '        <h3>';
            $mail->Body .= '            Imugi,';
            $mail->Body .= '        </h3>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Conforme solicitado segue sua nova senha: <b>'. $novaSenha.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Obs: Caso não tenha solicitado essa alteração entre em contato com a administração.';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Muito obrigado por confiar em nosso trabalho. Todo o conteúdo foi criado com muito carinho e dedicação. Bons estudos.';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>- Equipe Imugi</p>  ';
            $mail->Body .= '    </div>';

            if($mail->send()){
                return "1";
            }else{
                return "2";
            }
        } catch (Exception $e) {
            // echo "Email não enviado. Erro: {$mail->ErrorInfo}";
            return $e;
        }

    }
    public function frequencia(Request $request){
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                   // Enable verbose debug output
            $mail->isSMTP();                                        // Send using SMTP
            $mail->CharSet    = 'UTF-8';
            $mail->Host       = 'mail.fpeduc.com';                  // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'vendas@fpeduc.com';                // SMTP username
            $mail->Password   = 'ACd0SIXsfE';                       // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('contato@imugi.com.br', 'Imugi');
            // $mail->addAddress($email);                              // Add a recipient
            $mail->addCC('contato@imugi.com.br');

            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = 'Pedido de reposição de aula';
            $mail->Body .= '    <div style="padding: 26px;display: block;font-family: Arial, Helvetica, sans-serif;">';
            $mail->Body .= '        <img src="https://site.imugi.com.br/assets/site/images/logo.png" alt="logo fpeduc" style="display: block;margin: 0 auto;">';
            // $mail->Body .= '        <img src="https://fpeduc.com.br/images/email/fpeduc.png" alt="banner sculpture" style="display: block;margin: 0 auto;margin-top: 16px;box-shadow: 0px 0px 25px rgba(56, 172, 84,.6);border-radius: 15px;">';
            $mail->Body .= '        <h3>';
            $mail->Body .= '            Imugi,';
            $mail->Body .= '        </h3>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            O aluno abaixo solicita uma reposição de aula:';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Nome: <b>'. $request->nome.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Email: <b>'. $request->email.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Telefone: <b>'. $request->telefone.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Aulas perdidas: <b>'. $request->aulas.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Observação: '. $request->observacao.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '        </p>';
            $mail->Body .= '    </div>';

            if($mail->send()){
                return "1";
            }else{
                return "2";
            }
        } catch (Exception $e) {
            // echo "Email não enviado. Erro: {$mail->ErrorInfo}";
            return $e;
        }

    }
    public function segundaVia(Request $request){
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                   // Enable verbose debug output
            $mail->isSMTP();                                        // Send using SMTP
            $mail->CharSet    = 'UTF-8';
            $mail->Host       = 'mail.fpeduc.com';                  // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'vendas@fpeduc.com';                // SMTP username
            $mail->Password   = 'ACd0SIXsfE';                       // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('contato@imugi.com.br', 'Imugi');
            // $mail->addAddress($email);                              // Add a recipient
            $mail->addCC('contato@imugi.com.br');

            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = 'Pedido de 2º via';
            $mail->Body .= '    <div style="padding: 26px;display: block;font-family: Arial, Helvetica, sans-serif;">';
            $mail->Body .= '        <img src="https://site.imugi.com.br/assets/site/images/logo.png" alt="logo fpeduc" style="display: block;margin: 0 auto;">';
            // $mail->Body .= '        <img src="https://fpeduc.com.br/images/email/fpeduc.png" alt="banner sculpture" style="display: block;margin: 0 auto;margin-top: 16px;box-shadow: 0px 0px 25px rgba(56, 172, 84,.6);border-radius: 15px;">';
            $mail->Body .= '        <h3>';
            $mail->Body .= '            Imugi,';
            $mail->Body .= '        </h3>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            O aluno abaixo solicita uma 2º via de sua fatura:';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Nome: <b>'. $request->nome.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Telefone: <b>'. $request->telefone.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Email: <b>'. $request->email.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Estado: <b>'. $request->estado.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Cidade: <b>'. $request->cidade.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Observação: '. $request->observacao.'</b>';
            $mail->Body .= '            <br>';
            $mail->Body .= '        </p>';
            $mail->Body .= '    </div>';

            if($mail->send()){
                return "1";
            }else{
                return "2";
            }
        } catch (Exception $e) {
            // echo "Email não enviado. Erro: {$mail->ErrorInfo}";
            return $e;
        }

    }
    public function notas($matricula){
        $notas = Nota::where("matricula", $matricula)->get();
        $etapas_final = [];
        if(sizeOf($notas) > 0){
            $etapas = $notas->groupBy("etapa");
            foreach($etapas as $key => $e_notas){
                $etapa = [];
                $etapa["etapa"] = $key;
                foreach($e_notas as $e){
                    if($e->avaliacao == " TRABALHOS"){
                        if($e->notas == null){
                            $etapa["trabalho"] = "0";
                        }else{
                            $etapa["trabalho"] = round($e->notas, 1);
                        }
                    }else if($e->avaliacao == "- PROVA PRÁTICA"){
                        if($e->notas == null){
                            $etapa["prova_pratica"] = "0";
                        }else{
                            $etapa["prova_pratica"] = round($e->notas, 1);
                        }
                    }else{
                        if($e->notas == null){
                            $etapa["prova_teorica"] = "0";
                        }else{
                            $etapa["prova_teorica"] = round($e->notas, 1);
                        }
                    }
                }
                $etapa["media"] = round(($etapa["trabalho"] + $etapa["prova_pratica"] + $etapa["prova_teorica"]) / 3, 1);
                array_push($etapas_final, $etapa);
            }
        }
        return response()->json($etapas_final);
    }
}
