
<?php $__env->startSection('titulo','Unit 29 | Body ik'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade29" data-etapa="atividades">
			<h3 class="barlow">UNIT 29</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form id="unidade29atividade823" method="post" class="metade">
					<p>1 - O que é frame hate?
						<input type="text" name="atividade823-1" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <p>2 - Qual o nome dado a taxa de formação de quadros?
						<input type="text" name="atividade823-2" class="full left-align" placeholder="Responda aqui" required> 
					</p>
					<p>3 - O que vai acontecer se o formato da imagem for incompatível com o da tela de reprodução?
						<input type="text" name="atividade823-3" class="full left-align" placeholder="Responda aqui" required>						
					</p>
					<p>4 - Em que posição devo usar o telefone celular para que a imagem seja compatível com minha
							tv? Por que?
						<input type="text" name="atividade823-4" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>5 - É possível exibir imagens hd em miniaturas como nas telas do celular? Explique
					<input type="text" name="atividade823-5" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>6 - O que é tecnologia de retina?
					<input type="text" name="atividade823-6" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>7 - O que é FPS?
					<input type="text" name="atividade823-7" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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

	$("#unidade29atividade823").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade29atividade823 input[type="text"]').each(function(index){
			if(($('#unidade29atividade823 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade29atividade823 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade29atividade823'), respostas);
		}else{
			enviarAtividade($('#unidade29atividade823'), respostas);
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
					$('#unidade29atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade29atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade29atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade29atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade29/atividades.blade.php ENDPATH**/ ?>