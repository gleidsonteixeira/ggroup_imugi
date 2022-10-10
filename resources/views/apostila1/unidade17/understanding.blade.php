@extends('layouts.template')
@section('titulo','Unit 17 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade17" data-etapa="understanding">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>                
                <form id="unidade17understanding49" method="post" class="metade">
                    <p>
                        1 - What Did Angelique Tell Her Viewers?<br>
                        <input type="text" name="understanding49-1" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        2 - What Is Angelique Having Difficulty With?<br>
                        <input type="text" name="understanding49-2" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        3 - What Is Consuming Much Of Angelique’s Time?<br>
                        <input type="text" name="understanding49-3" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        4 - How Many Tools Does Akira Recommend To Angelique?<br>
                        <input type="text" name="understanding49-4" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        5 - What Is The First Tool Akira Talks About Called?<br>
                        <input type="text" name="understanding49-5" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        6 - What Can Guides Be Used For?<br>
                        <input type="text" name="understanding49-6" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        7 - What Allows You To Focus On Editing Each Item At A Time?<br>
                        <input type="text" name="understanding49-7" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        8 - Did Angelique Already Try To Organize The Layout?<br>
                        <input type="text" name="understanding49-8" class="full left-align" placeholder="Responda aqui" required>
                    </p>                                        
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="17">
                    <input type="hidden" name="atividade_id" value="49">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div class="metade esquerda">
                    <figure>
                        <img src="{{ asset('assets/img/playgo/unit17/U17.jpg') }}" alt="Dica">
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

        $("#unidade17understanding49").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade17understanding49 input[type="text"]').each(function(index){
                if(($('#unidade17understanding49 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade17understanding49 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade17understanding49'), respostas);
            }else{
                enviarAtividade($('#unidade17understanding49'), respostas);
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
                        $('#unidade17understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade17understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade17understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade17understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
