@extends('layouts.template')
@section('titulo','Unit 19 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade19" data-etapa="atividades">
			<h3 class="barlow">UNIT 19</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form id="unidade19atividade813" method="post" class="metade">
					<p>1 - Como se chama o recurso de usar um vídeo e lhe sobrepor uma animação?
						<input type="text" name="atividade813-1" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <p>2 - Posso inserir uma exibição de vídeo sem usar textura? Explique.
						<input type="text" name="atividade813-2" class="full left-align" placeholder="Responda aqui" required> 
					</p>
					<p>3 - Qual é a taxa de quadros usada no cinema?
						<input type="text" name="atividade813-3" class="full left-align" placeholder="Responda aqui" required>						
					</p>
					<p>4 - Posso usar a mesma taxa de quadros pro cinema e para animação? Por que?
						<input type="text" name="atividade813-4" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>5 - Para criar nosso vídeo, como foi feito o arquivo com todas as imagens?						
						<input type="text" name="atividade813-5" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>6 - Como se chama o recurso onde eu uso mais de um programa para obter meu resultado?						
						<input type="text" name="atividade813-6" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="813">
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

	$("#unidade19atividade813").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade19atividade813 input[type="text"]').each(function(index){
			if(($('#unidade19atividade813 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade19atividade813 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade19atividade813'), respostas);
		}else{
			enviarAtividade($('#unidade19atividade813'), respostas);
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
					$('#unidade19atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade19atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade19atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade19atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
