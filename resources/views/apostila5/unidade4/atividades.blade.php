@extends('layouts.template')
@section('titulo','Unit 4 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade4" data-etapa="atividades">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
			<form method="post" class="metade">
				<p>1 - Crie 5 caixas iguais.
					<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
				</p>
				<p>2 - Posicione uma sobre a outra até formar uma torre, use as telas que permitem ver
					posições específicas do objeto: front, top, left, right e boton, alinhandos todos o máximo possível.
					<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true"> 
				</p>
				<p>3 - Usando as ferramentas de seleção, imprima com precisão uma torção progressiva a
					partir da base de 20º no eixo “Y”.					
					<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">						
				</p>
				<p>4 - Imprima uma rotação de 20º no eixo X sucessivamente em todos os objetos.					
					<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">						
				</p>
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

	$("#unidade1atividade800").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade1atividade800 input[type="text"]').each(function(index){
			if(($('#unidade1atividade800 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade1atividade800 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade1atividade800'), respostas);
		}else{
			enviarAtividade($('#unidade1atividade800'), respostas);
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
					$('#unidade1atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade1atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade1atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade1atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
