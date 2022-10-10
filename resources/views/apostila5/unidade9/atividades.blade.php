@extends('layouts.template')
@section('titulo','Unit 9 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade9" data-etapa="atividades">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form id="unidade9atividade803" method="post" class="metade">
					<p>1 - O que é perspectiva?
						<input type="text" name="atividade803-1" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <p>2 - Em qual modo de visão do HUD devo fazer a inserção da minha planta baixa?
						<input type="text" name="atividade803-2" class="full left-align" placeholder="Responda aqui" required> 
					</p>
					<p>3 - De que formas podemos realizar cortes na superfície de uma forma?
						<input type="text" name="atividade803-3" class="full left-align" placeholder="Responda aqui" required>						
					</p>
					<p>4 - Descreva os passos necessários para tranformar linhas em uma superfície editável?
						<input type="text" name="atividade803-4" class="full left-align" placeholder="Responda aqui" required>
					</p>	
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="803">
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

	$("#unidade9atividade803").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade9atividade803 input[type="text"]').each(function(index){
			if(($('#unidade9atividade803 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade9atividade803 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade9atividade803'), respostas);
		}else{
			enviarAtividade($('#unidade9atividade803'), respostas);
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
					$('#unidade9atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade9atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade9atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade9atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
			}
		});
    }

	function enviarAtividade(formId, respostas){
		console.log(formId);
		console.log(respostas);
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
