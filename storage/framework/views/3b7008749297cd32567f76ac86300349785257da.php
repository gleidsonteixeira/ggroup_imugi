<?php $__env->startSection('titulo','Unit 9 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade9" data-etapa="grammar">
				<h3 class="barlow">UNIT 09 - PROFESSOR ANA BEATRIZ</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit9/grammar/grammar.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">WH- QUESTIONS (WHAT; WHERE; HOW)</h5>
                    <p><b>Where</b> is used to make questions about place/location.</p>
                    <p><b>What</b> is used to make questions about things.</p>
                    <p><b>How</b> is used to make questions about the way something is done, or condition.</p>
                    <h5 class="barlow">Examples:</h5>
                    <p>Where are you from?</p>
                    <p>What is your profession?</p>
                    <p>How are you today?</p>
                </div>
				<h5 class="barlow" style="margin-top: 16px">A - Complete the questions using the appropriate interrogative pronoun.</h5>
				<form id="unidade9grammar29" method="post">
                    <p>1 - <input type="text" name="grammar29-1" placeholder="Responda aqui" required> are Caio and Felipe from?</p>
                    <p>2 - <input type="text" name="grammar29-2" placeholder="Responda aqui" required> do you go to work?</p>
                    <p>3 - <input type="text" name="grammar29-3" placeholder="Responda aqui" required> is your favorite color?</p>
                    <p>4 - <input type="text" name="grammar29-4" placeholder="Responda aqui" required> are you today?</p>
                    <p>5 - <input type="text" name="grammar29-5" placeholder="Responda aqui" required> do you live?</p>
                    <p>6 - <input type="text" name="grammar29-6" placeholder="Responda aqui" required> does she work?</p>
                    <p>7 - <input type="text" name="grammar29-7" placeholder="Responda aqui" required> does he take beautiful photos?</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="9">
                    <input type="hidden" name="atividade_id" value="29">
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

        $("#unidade9grammar29").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade9grammar29 input[type="text"]').each(function(index){
                if(($('#unidade9grammar29 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade9grammar29 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade9grammar29'), respostas);
            }else{
                enviarAtividade($('#unidade9grammar29'), respostas);
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
                        $('#unidade9grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade9grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade9grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade9grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade9/grammar.blade.php ENDPATH**/ ?>