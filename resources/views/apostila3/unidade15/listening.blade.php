@extends('layouts.template')
@section('titulo','Unit 15 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade15" data-etapa="listening">
				<h3 class="barlow">UNIT 15</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
                    <source src="{{ asset('assets/audio/apostila3/LESSON 15/06_LISTENING/LISTENING_15.mp3') }}" type="audio/mp3">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px">A - Listen to the audio and fill in the blanks with the missing words.</h5>
                <form id="unidade15listening581" method="post">
                    <p>Any person can cause a
                    <input type="text" name="listening581-1"  placeholder="Responda aqui" required>
                    impact through social media. In the past we
                    couldn’t
                    <input type="text" name="listening581-2"  placeholder="Responda aqui" required>
                    our voices without
                    <input type="text" name="listening581-3"  placeholder="Responda aqui" required>
                    tons of money to do so. Internet has
                    <input type="text" name="listening581-4"  placeholder="Responda aqui" required>
                    equally, the
                    <input type="text" name="listening581-5"  placeholder="Responda aqui" required>
                    of speaking. A simple idea may
                    <input type="text" name="listening581-6"  placeholder="Responda aqui" required>
                    the whole
                    world. We have seen the
                    <input type="text" name="listening581-7"  placeholder="Responda aqui" required>
                    media losing power after some social media
                    <input type="text" name="listening581-8"  placeholder="Responda aqui" required>
                    started to be used. So let’s be
                    <input type="text" name="listening581-9"  placeholder="Responda aqui" required>
                    for what we want to say.</p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="15">
                    <input type="hidden" name="atividade_id" value="581">
                    <div class="clear"></div>
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


        $("#unidade15listening581").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15listening581 input[type="text"]').each(function(index){
                if(($('#unidade15listening581 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15listening581 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15listening581'), respostas);
            }else{
                enviarAtividade($('#unidade15listening581'), respostas);
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
                        $('#unidade15listening'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade15listening'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade15listening'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade15listening'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade15listening'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade15listening'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

