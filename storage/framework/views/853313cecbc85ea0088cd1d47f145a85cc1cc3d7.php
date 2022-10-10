
<?php $__env->startSection('titulo','Unit 13 | Atividades'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade13" data-etapa="atividades">
			<h3 class="barlow">UNIT 13</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form id="unidade13atividade807" method="post" class="metade">
					<p>1 - Quantas linhas de definição tem o formato HD?
						<input type="text" name="atividade807-1" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <p>2 - O que é um monitor CRT?
						<input type="text" name="atividade807-2" class="full left-align" placeholder="Responda aqui" required> 
					</p>
					<p>3 - Os dispositivos mais modernos utilizam recursos de intrelaçamento de dados?
						<input type="text" name="atividade807-3" class="full left-align" placeholder="Responda aqui" required>						
					</p>
					<p>4 - Progressivo é o sistema de formação de quadros que monta a imagem linha por linha?
						<input type="text" name="atividade807-4" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>5 - Como posso alterar o lugar de destino do meu vídeo renderizado?						
						<input type="text" name="atividade807-5" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="807">
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

	$("#unidade13atividade807").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade13atividade807 input[type="text"]').each(function(index){
			if(($('#unidade13atividade807 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade13atividade807 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade13atividade807'), respostas);
		}else{
			enviarAtividade($('#unidade13atividade807'), respostas);
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
					$('#unidade13atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade13atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade13atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade13atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade13/atividades.blade.php ENDPATH**/ ?>