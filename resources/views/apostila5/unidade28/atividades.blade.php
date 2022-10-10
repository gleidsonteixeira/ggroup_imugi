@extends('layouts.template')
@section('titulo','Unit 28 | Body ik')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade28" data-etapa="atividades">
			<h3 class="barlow">UNIT 28</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form id="unidade28atividade822" method="post" class="metade">
					<p>1 - Como posso aplicar física de movimento inverso a um dos grupos de joint point?
						<input type="text" name="atividade822-1" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <p>2 - O que é o FIK?
						<input type="text" name="atividade822-2" class="full left-align" placeholder="Responda aqui" required> 
					</p>
					<p>3 - Onde fica o atributo que me permite determinar o nível de IK/FK presentes na deformação do movimento?
						<input type="text" name="atividade822-3" class="full left-align" placeholder="Responda aqui" required>						
					</p>
					<p>4 - O que preciso fazer para facilitar minha navegação durante a animação?
						<input type="text" name="atividade822-4" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>5 - Como torno visível as propriedades do meu IK?
					<input type="text" name="atividade822-5" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="822">
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

	$("#unidade28atividade822").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade28atividade822 input[type="text"]').each(function(index){
			if(($('#unidade28atividade822 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade28atividade822 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade28atividade822'), respostas);
		}else{
			enviarAtividade($('#unidade28atividade822'), respostas);
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
					$('#unidade28atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade28atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade28atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade28atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
