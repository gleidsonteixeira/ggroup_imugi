@extends('layouts.template')
@section('titulo','Unit 07 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade7" data-etapa="listening">
				<h3 class="barlow">UNIT 7</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
                    <source src="{{ asset('assets/audio/apostila3/LESSON 07/06_LISTENING/LISTENING_07.mp3') }}" type="audio/mp3">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px">A -  Listen to the audio and fill in the blanks with the missing words.</h5>
                <form id="unidade7listening535" method="post">
                    <p>A simple idea can <input type="text" name="listening535-1"  placeholder="Responda aqui" required>
                    people’s minds. Nobody could imagine the
                    <input type="text" name="listening535-2"  placeholder="Responda aqui" required>
                    of Youtube, Facebook, Instagram
                    <input type="text" name="listening535-3"  placeholder="Responda aqui" required>
                    years ago. Empires are being <input type="text" name="listening535-4"  placeholder="Responda aqui" required>
                    based on the use of this <input type="text" name="listening535-5"  placeholder="Responda aqui" required>
                    . For both<input type="text" name="listening535-6"  placeholder="Responda aqui" required>
                    celebrities and famous and extravagant artists, the use of social media has made a
                    <input type="text" name="listening535-7"  placeholder="Responda aqui" required>
                    difference in the way people pursuit success. A good
                    <input type="text" name="listening535-8"  placeholder="Responda aqui" required>
                    of that is the rise of Justi n Bieber as one of the most
                    <input type="text" name="listening535-9"  placeholder="Responda aqui" required>
                    artists who started a <input type="text" name="listening535-10"  placeholder="Responda aqui" required> on Youtube.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="7">
                    <input type="hidden" name="atividade_id" value="535">
                    <div class="clear"></div>
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/masteroflanguage/unit7/listening.jpg') }}" alt="pintura antiga">
                    </figure>
                </div>
            </div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade7listening535").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade7listening535 input[type="text"]').each(function(index){
                if(($('#unidade7listening535 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade7listening535 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade7listening535'), respostas);
            }else{
                enviarAtividade($('#unidade7listening535'), respostas);
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
                        $('#unidade7listening'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade7listening'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade7listening'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade7listening'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade7listening'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade7listening'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

