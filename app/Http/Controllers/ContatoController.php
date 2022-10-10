<?php

namespace App\Http\Controllers;

use App\User;
use App\Estado;
use App\Lead;
use App\Models\Admin\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\ContatoSite;
use App\Mail\ContatoFranquia;
use App\Mail\SocioMail;
use App\Mail\FranqueadoMail;
use Redirect;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContatoController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $aluno = User::find($id);

        return view('portal.contato.index',compact('aluno'));
    }

    public function siteContato()
    {
        $estados = Estado::orderBy('estado_nome')->get();
        $unidades = Unidade::orderBy("unidade_nome")->get();
        return view('site.contato.index',compact('estados','unidades'));
    }

    public function franquia()
    {
        $estados = Estado::orderBy('estado_nome')->get();
        $unidades = Unidade::orderBy("unidade_nome")->get();
        return view('site.franquia.index', compact('unidades','estados'));
    }

    public function socioInvestidor()
    {
        return view('site.socio-investidor.index');
    }

    public function nossoFranqueado()
    {
        return view('site.nosso-franqueado.index');
    }

    public function privacidade()
    {
        return view('site.contato.privacidade');
    }

    public function enviar(Request $request)
    {
        $this->validate($request, [
            'nome'     =>  'required',
            'telefone'  =>  'required',
            'estado'  =>  'required',
            'cidade'  =>  'required',
            'mensagem' =>  'required'
           ]);

           $unidade = Unidade::where("unidade_id", $request->unidade)->get();
           $estado = Estado::where("id_estados", $request->estado)->get();
      
              $data = array(
                  'nome' =>  $request->nome,
                  'telefone' =>  $request->telefone,
                  'estado'   =>  $request->estado,
                  'cidade'   =>  $request->cidade,
                  'mensagem' =>   $request->mensagem
              );
            
              $lead = new Lead();
              $lead->nome = $request->nome;
              $lead->telefone = $request->telefone;
            //   $lead->cidade = $request->cidade;
              $lead->como_conheceu = $request->como;
              $lead->status = 1;
              $lead->data_cadastro = date("Y-m-d");
              $lead->data_update = date("Y-m-d");
              $lead->estado = $request->estado;

              if($lead->save()){
                return back()->with('success', 'Email enviado com sucesso !');
              }else{
                return back()->with('error', 'Ouve Error :(');
              }

              Mail::to('contato@imugi.com.br')->send(new SendMail($data));
      
          
      
    }
        
    public function contatoAluno(Request $request){
        
        // Mail::to('contato@imugi.com.br')->send(new ContatoSite($request));

        $lead = new Lead();
        $lead->nome = $request->nome;
        $lead->email = $request->email;
        $lead->telefone = $request->whatsapp;
        $lead->como_conheceu = $request->como;
        $lead->cidade= $request->unidade;
        $lead->estado= $request->estado;
        $lead->status = 1;
        $lead->data_cadastro = date("Y-m-d");
        $lead->data_update = date("Y-m-d");
        $lead->save();

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                   // Enable verbose debug output
            $mail->isSMTP();                                        // Send using SMTP
            $mail->CharSet    = 'UTF-8';
            $mail->Host       = 'mail.imugi.com.br';                  // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'site@imugi.com.br';                // SMTP username
            $mail->Password   = '0j}=YcqN$yJF';                       // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            // $mail->SMTPDebug  = 1; 

            //Recipients
            // $mail->setFrom('atendimento@playmoney.app', 'Playmoney');
            $mail->setFrom("contato@imugi.com.br", "Aluno Imugi");        // Add a recipient
            $mail->addAddress("contato@imugi.com.br");        // Add a recipient
            // $mail->addAddress("pombocriativo@gmail.com");        // Add a recipient

            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = 'Interessado em matricula Imugi';
            $mail->Body .= '    <div style="padding: 26px;display: block;font-family: Arial, Helvetica, sans-serif;">';
            // $mail->Body .= '        <img src="https://playmoney.app/assets/site/images/logo_playmoney.png" alt="logo linkcard" style="display: block;margin: 0 auto;">';
            // $mail->Body .= '        <img src="https://fpeduc.com.br/images/email/fpeduc.png" alt="banner sculpture" style="display: block;margin: 0 auto;margin-top: 16px;box-shadow: 0px 0px 25px rgba(56, 172, 84,.6);border-radius: 15px;">';
            $mail->Body .= '        <h3>';
            $mail->Body .= '            Dados do contato,';
            $mail->Body .= '        </h3>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Nome: <b>'.$request->nome.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Email: <b>'.$request->email.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Telefone: <b>'.$request->whatsapp.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Como conheceu: <b>'.$request->como.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Unidade: <b>'. $request->unidade.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Mensagem: <b>'. $request->mensagem.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '    </div>';

            if($mail->send()){
                return redirect()->to("/");
            }else{
                return "2";
            }
        } catch (Exception $e) {
            // echo "Email não enviado. Erro: {$mail->ErrorInfo}";
            return $e;
        }
    
    }

    public function contatoSocioInvestidor(Request $request){
        
        Mail::to('expansao@imugi.com.br')
        ->send(new SocioMail($request));

            $notification = array(
            'message' => 'Mensagem enviada com sucesso!', 
            'alert-type' => 'success'
        );
        
        return Redirect::to('/socio-investidor')->with($notification);
    
    }

    public function contatoFranqueado(Request $request){
        
        Mail::to('expansao@imugi.com.br')
        ->send(new FranqueadoMail($request));

            $notification = array(
            'message' => 'Mensagem enviada com sucesso!', 
            'alert-type' => 'success'
        );
        
        return Redirect::to('/nosso-franqueado')->with($notification);
    
    }

    public function contatoFranquia(Request $request){
    
        // $this->validate($request, [
        //     'nome'     =>  'required',
        //     'email'  =>  'required',
        //     'telefone'  =>  'required',
        //     ]);
        
        $unidade = Unidade::where("unidade_id", $request->cidade)->get();
        $estado = Estado::where("id_estados", $request->estado)->get();
        $data = array(
            'nome' =>  $request->nome,
            'email' =>  $request->email,
            'telefone'   =>  $request->telefone,
            'conheceu'   =>  $request->conheceu_imugi,
            'estado'   =>  $estado[0]->estado_nome,
            'cidade'   =>  $unidade[0]->unidade_nome,
        );

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                   // Enable verbose debug output
            $mail->isSMTP();                                        // Send using SMTP
            $mail->CharSet    = 'UTF-8';
            $mail->Host       = 'mail.imugi.com.br';                  // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'site@imugi.com.br';                // SMTP username
            $mail->Password   = '0j}=YcqN$yJF';                       // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            // $mail->SMTPDebug  = 1; 

            //Recipients
            // $mail->setFrom('atendimento@playmoney.app', 'Playmoney');
            $mail->setFrom("expansao@imugi.com.br", "Franquia Imugi");        // Add a recipient
            $mail->addAddress("expansao@imugi.com.br");        // Add a recipient

            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = 'Interessado em franquia Imugi';
            $mail->Body .= '    <div style="padding: 26px;display: block;font-family: Arial, Helvetica, sans-serif;">';
            // $mail->Body .= '        <img src="https://playmoney.app/assets/site/images/logo_playmoney.png" alt="logo linkcard" style="display: block;margin: 0 auto;">';
            // $mail->Body .= '        <img src="https://fpeduc.com.br/images/email/fpeduc.png" alt="banner sculpture" style="display: block;margin: 0 auto;margin-top: 16px;box-shadow: 0px 0px 25px rgba(56, 172, 84,.6);border-radius: 15px;">';
            $mail->Body .= '        <h3>';
            $mail->Body .= '            Dados do contato,';
            $mail->Body .= '        </h3>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Nome: <b>'. $request->name.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Email: <b>'. $request->email.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Telefone: <b>'. $request->telefone.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Como conheceu: <b>'. $request->conheceu_imugi.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Estado: <b>'. $estado[0]->estado_nome.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            unidade: <b>'. $unidade[0]->unidade_nome.'<b/>';
            $mail->Body .= '        </p>';
            $mail->Body .= '    </div>';

            if($mail->send()){
                return redirect()->to("site/franquia");
            }else{
                return "2";
            }
        } catch (Exception $e) {
            // echo "Email não enviado. Erro: {$mail->ErrorInfo}";
            return $e;
        }

        // dd($data);
        // Mail::to('expansao@imugi.com.br')->send(new ContatoFranquia($data));
        // return back()->with('success', 'Email enviado com sucesso !');
    }
}
