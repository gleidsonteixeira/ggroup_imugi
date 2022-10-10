
<?php $__env->startSection('titulo','Unit 1 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade1" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 1</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/apostila3/LESSON 01/05_PRONUNCIATION/PRONUNCIATION_01.mp3')); ?>" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top:16px">A – Homophones 1</h5>
				<p><b>Homophones are words that sound the same but have different
				spellings and meanings.</b></p>
                <h5 class="barlow"><b>Example:</b></h5>
                <p><b>Flew/Flu</b></p>
				<h5 class="barlow">1 - Complete the sentences below with the appropriate word.</h5>
				<form id="unidade1pronunciation501" method="post">
					<p>1. I’ve had the<input type="text" name="pronunciation501-1" placeholder="Responda aqui" required> Since Monday.</p>

					<p>2. The birds<input type="text" name="pronunciation501-2" placeholder="Responda aqui" required> to their nests.</p>

					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<input type="hidden" name="resposta_id" value="0">
					<input type="hidden" name="unidade_id" value="1">
					<input type="hidden" name="atividade_id" value="501">
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

        $("#unidade1pronunciation501").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1pronunciation501 input[type="text"]').each(function(index){
                if(($('#unidade1pronunciation501 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1pronunciation501 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1pronunciation501'), respostas);
            }else{
                enviarAtividade($('#unidade1pronunciation501'), respostas);
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
                        $('#unidade1pronunciation'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade1pronunciation'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade1pronunciation'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade1pronunciation'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade1/pronunciation.blade.php ENDPATH**/ ?>