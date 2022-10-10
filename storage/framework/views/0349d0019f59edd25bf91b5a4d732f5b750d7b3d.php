<?php $__env->startSection('titulo','Unit 26 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade26" data-etapa="grammar">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit26/grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Used To</h5>
                    <p>To Talk About Routine Actions In The Past.</p>
                    <h5 class="barlow">Simple Past</h5>
                    <p>To Talk About An Isolated Action In The Past.</p>
                    <h5 class="barlow">Past Continuous</h5>
                    <p>To Talk About An Action That Was In Progress In The Past.</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Use the "simple past", "past continuous" or "used to" to complete the sentences.</h5>
                <form id="unidade26grammar67" method="post">
                    <p>1 - I <input type="text" name="grammar67-1" placeholder="Responda aqui" required>   (Run) Every Day When I Was Young.</p>
                    <p>2 - <input type="text" name="grammar67-2" placeholder="Responda aqui" required> You <input type="text" name="grammar67-3" placeholder="Responda aqui" required> (Talk) On The Phone When I Called You?</p>
                    <p>3 - <input type="text" name="grammar67-4" placeholder="Responda aqui" required> She <input type="text" name="grammar67-5" placeholder="Responda aqui" required> (Tell) You I Called?</p>
                    <p>4 - I <input type="text" name="grammar67-6" placeholder="Responda aqui" required> (Work) There Many Years Ago.</p>
                    <p>5 - We <input type="text" name="grammar67-7" placeholder="Responda aqui" required> (Travel) To Mexico Last Year.</p>
                    <p>6 - They <input type="text" name="grammar67-8" placeholder="Responda aqui" required> (Study) When I Arrived.</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="26">
                    <input type="hidden" name="atividade_id" value="67">
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

        $("#unidade26grammar67").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade26grammar67 input[type="text"]').each(function(index){
                if(($('#unidade26grammar67 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade26grammar67 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade26grammar67'), respostas);
            }else{
                enviarAtividade($('#unidade26grammar67'), respostas);
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
                        $('#unidade26grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade26grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade26grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade26grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade26/grammar.blade.php ENDPATH**/ ?>