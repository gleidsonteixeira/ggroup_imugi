
<?php $__env->startSection('titulo','Unit 12 | Atividades'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade12" data-etapa="atividades">
			<h3 class="barlow">UNIT 12</h3>
			<h5 class="barlow upper">Aula 12 – Atividades</h5>
                <form id="unidade12atividade806" method="post" class="metade">
					<p>1 - Como faço pra atribuir propriedades físicas a um objeto?
						<input type="text" name="atividade806-1" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <p>2 - Posso animar barras de estamina ou recarga?
						<input type="text" name="atividade806-2" class="full left-align" placeholder="Responda aqui" required> 
					</p>
					<p>3 - Como faço pra inserir uma camera?
						<input type="text" name="atividade806-3" class="full left-align" placeholder="Responda aqui" required>						
					</p>
					<p>4 - Por que devemos criar um bom sistema de menus para nossos jogos e programas?
						<input type="text" name="atividade806-4" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="806">
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

	$("#unidade12atividade806").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade12atividade806 input[type="text"]').each(function(index){
			if(($('#unidade12atividade806 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade12atividade806 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade12atividade806'), respostas);
		}else{
			enviarAtividade($('#unidade12atividade806'), respostas);
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
					$('#unidade12atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade12atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade12atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade12atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade12/atividades.blade.php ENDPATH**/ ?>