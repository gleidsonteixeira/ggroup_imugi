@extends('layouts.template')
@section('titulo','Unit 15 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade15" data-etapa="atividades">
			<h3 class="barlow">UNIT 15</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form id="unidade15atividade809" method="post" class="metade">
					<p>1 - O render realiza melhor o processo de renderização com menos opções de effects?
						<input type="text" name="atividade809-1" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <p>2 - Quais são os formatos de tela que eu posso configurar para ter uma renderização em HD?
						<input type="text" name="atividade809-2" class="full left-align" placeholder="Responda aqui" required> 
					</p>
					<p>3 - Qual a função do modificador bump na janela material editor?
						<input type="text" name="atividade809-3" class="full left-align" placeholder="Responda aqui" required>						
					</p>
					<p>4 - Aplicar beckmann faz meu objeto se tornar transparente? Descreva o processo.
						<input type="text" name="atividade809-4" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>5 - Por que o vidro tem um comportamento diferente de outros objetos translúcidos?						
						<input type="text" name="atividade809-5" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>6 - Como se chama a distorção causada pela luz por meio aquoso?						
						<input type="text" name="atividade809-6" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>7 - Como se chama o tipo de plástico que imita o vidro?						
						<input type="text" name="atividade809-7" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="809">
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

	$("#unidade15atividade809").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade15atividade809 input[type="text"]').each(function(index){
			if(($('#unidade15atividade809 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade15atividade809 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade15atividade809'), respostas);
		}else{
			enviarAtividade($('#unidade15atividade809'), respostas);
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
					$('#unidade15atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade15atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade15atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade15atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
