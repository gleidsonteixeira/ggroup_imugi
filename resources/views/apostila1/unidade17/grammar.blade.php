@extends('layouts.template')
@section('titulo','Unit 17 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade17" data-etapa="grammar">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit17/grammar/completo.ogg') }}" type="audio/ogg">
                </audio> 
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Verb To Be (Past)</h5>
                    <p>The Verb To Be Is An Irregular Verb. In The Past, It Has Two Forms.</p>
                    <h5 class="barlow">Conjugation:</h5>
                </div>
                <table class="metade center-align">
                    <tr>
                        <td><p><b>I</b></p></td>
                        <td rowspan="3" style="vertical-align: middle;"><p><b>WAS</b></p></td>
                        <td><p><b>YOU</b></p></td>
                        <td rowspan="3" style="vertical-align: middle;"><p><b>WHERE</b></p></td>
                    </tr>
                    <tr>
                        <td><p><b>HE / SHE</b></p></td>
                        <td><p><b>WE</b></p></td>
                    </tr>
                    <tr>
                        <td><p><b>IT</b></p></td>
                        <td><p><b>THEY</b></p></td>
                    </tr>
                </table>
                <div class="espacamento">
                    <p>Structure:</p>
                    <p><b>Affirmative:</b> SUBJECT + WAS/WERE</p>
                    <p>EXAMPLE: SHE WAS A GREAT STUDENT.</p>
                    <p><b>Interrogative:</b> WAS/WERE + SUBJECT</p>
                    <p>EXAMPLE: WERE YOU HOME LAST NIGHT?</p>
                    <p><b>Negative:</b> SUBJECT + WAS/WERE + NOT</p>
                    <p>EXAMPLE: WE WERE NOT ON TIME FOR THE EVENT</p>             
                </div>
				<h5 class="barlow" style="margin-top: 16px">A - Complete the exercise with the verb to be in the past.</h5>
				<form id="unidade17grammar48" method="post">
                    <p>1 - <input type="text" name="grammar48-1" placeholder="Responda aqui" required>You And Your Friend At The Party Yesterday?</p>
                    <p>2 - I<input type="text" name="grammar48-2" placeholder="Responda aqui" required>Sick On The Day Of The Test.</p>
                    <p>3 - SHE<input type="text" name="grammar48-3" placeholder="Responda aqui" required> (Not) There That Day.</p>
                    <p>4 - <input type="text" name="grammar48-4" placeholder="Responda aqui" required> He A Good Teacher?</p>
                    <p>5 - WE<input type="text" name="grammar48-5" placeholder="Responda aqui" required>At The Mall On Sunday.</p>                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="17">
                    <input type="hidden" name="atividade_id" value="48">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                             
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade17grammar48").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade17grammar48 input[type="text"]').each(function(index){
                if(($('#unidade17grammar48 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade17grammar48 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade17grammar48'), respostas);
            }else{
                enviarAtividade($('#unidade17grammar48'), respostas);
            }
        });                
        function checkAtividade(atividade_id){
            request = $.ajax({
                url: window.location.pathname+'/respostasCheck/'+atividade_id,
                type: 'get',
                error: function(){
                    console.log("Erro de retorno de dados.");
                }
            });
            request.done(function(response){
                if(response == 0){
                    console.log("não veio nada");
                }else{
                    var objeto = JSON.parse(response[0].resposta_respostas);
                    var chaves = Object.keys(objeto);
                    var respostas = Object.values(objeto);
                    for(j = 0; j < respostas.length; j++){
                        $('#unidade17grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade17grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade17grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade17grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : formId.find('input[name="atividade_id"]').val(),
                "unidade_id" : formId.find('input[name="unidade_id"]').val()
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

        function atualizarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_id" : formId.find('input[name="resposta_id"]').val(),
                "resposta_respostas" : respostas
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

    </script>

@endsection
