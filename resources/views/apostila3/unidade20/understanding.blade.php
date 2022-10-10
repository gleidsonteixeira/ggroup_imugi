@extends('layouts.template')
@section('titulo','Unit 20 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
	    <div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade20" data-etapa="understanding">
				<h3 class="barlow">UNIT 20</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
                    <source src="{{ asset('assets/audio/apostila3/LESSON 20/07_UNDERSTANDING/UNDERSTANDING_20.mp3') }}" type="audio/mp3">
                </audio>
                <div class="metade">
                    <form id="unidade20understanding605" method="post">
                        <p>
                            1 -  According to Akira, where can they find good courses?
                            <input type="text" name="understanding605-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 -  What’s Jake take on the subject?
                            <input type="text" name="understanding605-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 -  Was John familiarized with the subject?
                            <input type="text" name="understanding605-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 -  Did Laura like Khan academy?
                            <input type="text" name="understanding605-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 -  Summarize the story of Khan Academy.
                            <input type="text" name="understanding605-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="20">
                        <input type="hidden" name="atividade_id" value="605">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
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

        $("#unidade20understanding605").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade20understanding605 input[type="text"]').each(function(index){
                if(($('#unidade20understanding605 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade20understanding605 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade20understanding605'), respostas);
            }else{
                enviarAtividade($('#unidade20understanding605'), respostas);
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
                        $('#unidade20understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade20understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade20understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade20understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
