@extends('layouts.template')
@section('titulo','Unit 19 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade19" data-etapa="grammar">
				<h3 class="barlow">UNIT 19 - TEXT FORMATING</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit19/grammar/completo.ogg') }}" type="audio/ogg">
                </audio> 
                <div class="clear"></div>
                <div class="espacamento">
				    <h5 class="barlow">Prepositions of place</h5>
                </div>
                <ul class="lista-inline">
					<li><p><b>IN</b></p></li>
					<li><p><b>ON</b></p></li>
					<li><p><b>BETWEEN</b></p></li>
					<li><p><b>UNDER</b></p></li>
					<li><p><b>BEHIND</b></p></li>
					<li><p><b>NEXT</b></p></li>
                    <li><p><b>TO</b></p></li>
                    <li><p><b>IN FRONT OF</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">A - Complete the sentences with the proper preposition.</h5>
				<form id="unidade19grammar52" method="post">
                    <p>1 - The Books Are <input type="text" name="grammar52-1" placeholder="Responda aqui" required> The Table.</p>
                    <p>2 - The Cat Is <input type="text" name="grammar52-2" placeholder="Responda aqui" required> The Sofa.</p>
                    <p>3 - The Chair Is <input type="text" name="grammar52-3" placeholder="Responda aqui" required> The Door And The Sofa.</p>
                    <p>4 - The Door Is <input type="text" name="grammar52-4" placeholder="Responda aqui" required> The Chair.</p>
                    <p>5 - The Wastebasket Is <input type="text" name="grammar52-5" placeholder="Responda aqui" required> The Table.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="19">
                    <input type="hidden" name="atividade_id" value="52">
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

        $("#unidade19grammar52").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade19grammar52 input[type="text"]').each(function(index){
                if(($('#unidade19grammar52 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade19grammar52 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade19grammar52'), respostas);
            }else{
                enviarAtividade($('#unidade19grammar52'), respostas);
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
                        $('#unidade19grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade19grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade19grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade19grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
