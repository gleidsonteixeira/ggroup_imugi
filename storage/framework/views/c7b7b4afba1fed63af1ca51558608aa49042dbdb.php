
<?php $__env->startSection('titulo','Unit 10 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade10" data-etapa="grammar">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit10/grammar/grammar.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Gerund</h5>
                    <p>Observe how when an action is represented as an activity, "ing" is added to the end of it.</p>
                    <ul class="lista-inline">
                        <li><p><b>SINGING</b></p></li>
                        <li><p><b>DANCING</b></p></li>
                        <li><p><b>COOKING</b></p></li>
                        <li><p><b>RUNNING</b></p></li>
                        <li><p><b>SWIMMING</b></p></li>
                    </ul>         
                    <p>Observation: There are two rules you need to know when using “ing”.</p>
                    <h5 class="barlow">If the action ends with an "e", remove the "e" and add "ing".</h5>
                    <p>EXAMPLE: DANCE- DANCING</p>
                    <h5 class="barlow">If the action ends with a consonant, vowel, consonant, double the last consonant and add "ing".</h5>
                    <p>EXAMPLE: RUN- RUNNING; SWIM- SWIMMING</p>
                </div>
                <div class="metade">
                    <div class="clear"></div>
                    <h5 class="barlow" style="margin-top: 16px">A - Complete the exercise by putting the verbs in the gerund form</h5>
                    <form id="unidade10grammar31" method="post">
                        <p>1. She likes <input type="text" name="grammar31-1" placeholder="Responda aqui" required> (study) English.</p>
                        <p>2. He loves <input type="text" name="grammar31-2" placeholder="Responda aqui" required> (take) pictures of animals.</p>
                        <p>3. They enjoy <input type="text" name="grammar31-3" placeholder="Responda aqui" required> (dance).</p>
                        <p>4. I don’t like <input type="text" name="grammar31-4" placeholder="Responda aqui" required> (swim).</p>
                        <p>5. Does she like <input type="text" name="grammar31-5" placeholder="Responda aqui" required> (cook)?</p>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="10">
                        <input type="hidden" name="atividade_id" value="31">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade10grammar31").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar31 input[type="text"]').each(function(index){
                if(($('#unidade10grammar31 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar31 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar31'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar31'), respostas);
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
                        $('#unidade10grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade10grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade10grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade10grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade10/grammar.blade.php ENDPATH**/ ?>