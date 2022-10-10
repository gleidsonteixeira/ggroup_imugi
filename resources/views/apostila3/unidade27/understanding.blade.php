@extends('layouts.template')
@section('titulo','Unit 27 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
	    <div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade27" data-etapa="understanding">
				<h3 class="barlow">UNIT 27</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
                    <source src="{{ asset('assets/audio/apostila3/LESSON 27/07_UNDERSTANDING/UNDERSTANDING_27.mp3') }}" type="audio/mp3">
                </audio>
                <div class="metade">
                    <form id="unidade27understanding692" method="post">
                        <p>
                            1 -  Who wants to know how to stark working on the net?
                            <input type="text" name="understanding692-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 -  Why did John get surprised?
                            <input type="text" name="understanding692-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 -  What is the subject for the new channel?
                            <input type="text" name="understanding692-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 -  What does Jake suggest?
                            <input type="text" name="understanding692-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 -  What’s Akira’s final comment?
                            <input type="text" name="understanding692-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="27">
                        <input type="hidden" name="atividade_id" value="692">
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

        $("#unidade27understanding692").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade27understanding692 input[type="text"]').each(function(index){
                if(($('#unidade27understanding692 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade27understanding692 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade27understanding692'), respostas);
            }else{
                enviarAtividade($('#unidade27understanding692'), respostas);
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
                        $('#unidade27understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade27understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade27understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade27understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
