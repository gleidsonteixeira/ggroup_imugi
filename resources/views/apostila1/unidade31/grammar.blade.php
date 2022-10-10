@extends('layouts.template')
@section('titulo','Unit 31 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade31" data-etapa="grammar">
				<h3 class="barlow">UNIT 31 - VIDEO TRANSITION</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit31/grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Tag Questions</h5>
                    <p>Tag Questions Are Used At The End Of Sentences To Express Doubt.</p>
                    <div class="doisterco">
                        <div class="lista-vertical metade esquerda">
                            <p><h5 class="barlow">With To Be</h5></p>
                            <p>You Are Brazilian, Aren’t You?</p>
                            <p><b>Affirmative</b>; <b>Negative-Interrogative?</b></p>
                            <p>She Isn’t Your Sister, Is She?</p>
                            <p><b>Negative</b>; <b>Interrogative?</b></p>
                        </div>
                        <div class="lista-vertical metade direita">
                            <p><h5 class="barlow">With Other Verbs</h5></p>
                            <p>You Live In Brazil, Don’t You?</p>
                            <p><b>Afirmative</b>; <b>Negative-Int?</b></p>
                            <p>She Doesn’t Work Here, Does She?</p>
                            <p><b>Negative</b>; <b>Interrogative?</b></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences with the correct tag question structure.</h5>
                <form id="unidade31grammar77" method="post">
                    <p>1 - John is a teacher, <input type="text" name="grammar77-1" placeholder="Responda aqui" required/> ?</p>
                    <p>2 - Mike and gina are married, <input type="text" name="grammar77-2" placeholder="Responda aqui" required/> ?</p>
                    <p>3 - You work all day, <input type="text" name="grammar77-3" placeholder="Responda aqui" required/> ?</p>
                    <p>4 - She doesn’t like chocolate, <input type="text" name="grammar77-4" placeholder="Responda aqui" required/> ?</p>
                    <p>5 - They travel tomorrow, <input type="text" name="grammar77-5" placeholder="Responda aqui" required/> ?</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="31">
                    <input type="hidden" name="atividade_id" value="77">
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

        $("#unidade31grammar77").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade31grammar77 input[type="text"]').each(function(index){
                if(($('#unidade31grammar77 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade31grammar77 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade31grammar77'), respostas);
            }else{
                enviarAtividade($('#unidade31grammar77'), respostas);
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
                        $('#unidade31grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade31grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade31grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade31grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
