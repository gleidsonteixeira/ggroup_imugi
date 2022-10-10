@extends('layouts.template')
@section('titulo','Unit 15 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade15" data-etapa="understanding">
				<h3 class="barlow">UNIT 15</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
                    <source src="{{ asset('assets/audio/apostila3/LESSON 15/07_UNDERSTANDING/UNDERSTANDING_15.mp3') }}" type="audio/mp3">
                </audio>
                <div class="metade">
                    <form id="unidade15understanding582" method="post">
                        <p>
                            1 - What can be interpreted as selfishness?<br>
                            <input type="text" name="understanding582-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 - According to Jake what are the possible consequences for selfishness?<br>
                            <input type="text" name="understanding582-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 - What’s necessary to have a good relationship with your followers?<br>
                            <input type="text" name="understanding582-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - How many platforms does Jake recommend you to start with?<br>
                            <input type="text" name="understanding582-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - What could happen if you have many platforms to take care?<br>
                            <input type="text" name="understanding582-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="15">
                        <input type="hidden" name="atividade_id" value="582">
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

        $("#unidade15understanding582").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15understanding582 input[type="text"]').each(function(index){
                if(($('#unidade15understanding582 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15understanding582 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15understanding582'), respostas);
            }else{
                enviarAtividade($('#unidade15understanding582'), respostas);
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
                        $('#unidade15understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade15understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade15understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade15understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
