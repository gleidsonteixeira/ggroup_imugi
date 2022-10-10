@extends('layouts.template')
@section('titulo','Unit 24 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade24" data-etapa="understanding">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <div class="metade">
                    <form id="unidade24understanding65" method="post">
                        <p>
                            1 - What’s Marcelo Trying To Draw?<br>
                            <input type="text" name="understanding65-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 - What Is Wrong With Marcelo’s Drawing?<br>
                            <input type="text" name="understanding65-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 - What Does Marcelo Need To Do To Fix The Errors In The Project?<br>
                            <input type="text" name="understanding65-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - Why Does Marcelo Want To Keep The Original Mistakes?<br>
                            <input type="text" name="understanding65-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - What Tool Does Sarah Recommend To Marcelo?<br>
                            <input type="text" name="understanding65-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - In Marcelo’s Case, What Does He Need To Do First To Fix The Error?<br>
                            <input type="text" name="understanding65-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - Why Should Marcelo Change The Opacity Of The Eraser? <br>
                            <input type="text" name="understanding65-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>                       
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="24">
                        <input type="hidden" name="atividade_id" value="65">
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

        $("#unidade24understanding65").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade24understanding65 input[type="text"]').each(function(index){
                if(($('#unidade24understanding65 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade24understanding65 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade24understanding65'), respostas);
            }else{
                enviarAtividade($('#unidade24understanding65'), respostas);
            }
        });

        function checkAtividade(atividade_id){
            console.log(atividade_id);
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
                        $('#unidade24understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade24understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade24understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade24understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
