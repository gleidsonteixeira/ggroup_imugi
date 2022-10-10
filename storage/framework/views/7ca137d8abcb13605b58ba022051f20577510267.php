<?php $__env->startSection('titulo','Unit 12 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade12" data-etapa="grammar">
				<h3 class="barlow">UNIT 12 - TYPE TOOL & STYLE PANEL</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit12/grammar/grammar.wav')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Future with “GOING TO”</h5>
                    <p>Structure</p>
                    <p><b>Affirmative:</b> SUBJECT + TO BE + GOING TO + VERB</p>
                    <p>EXAMPLE:  I AM GOING TO HAVE A PARTY TOMORROW</p>
                    <p><b>Interrogative:</b> TO BE + SUBJECT + GOING TO + VERB</p>
                    <p>EXAMPLE: ARE YOU GOING TO GO TO CLASS NEXT WEEK?</p>
                    <p><b>Negative:</b> SUBJECT + TO BE + NOT + GOING TO + VERB</p>
                    <p>EXAMPLE: SHE IS NOT GOING TO CHOOSE THE FONT.</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Change the sentences to the other two structures not given.</h5>
				<form id="unidade12grammar35" method="post">
                    <p>
                        1 - <b>Affirmative:</b><br>
                        We are going to travel next week.
                    </p>
                    <div class="metade">
                        <p>
                            <b>Interrogative:</b><br>
                            <input type="text" name="grammar35-1" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                        <p>
                            <b>Negative:</b><br>
                            <input type="text" name="grammar35-2" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="metade">
                        <p>
                            2 - <b>Affirmative:</b><br>
                            <input type="text" name="grammar35-3" class="left-align full" placeholder="Responda aqui" required/>
                        <p>
                    </div>
                    <p>
                        <b>Interrogative:</b><br>
                        Are you going to study tomorrow night?
                    </p>
                    <div class="metade">
                        <p>
                            <b>Negative:</b><br>
                            <input type="text" name="grammar35-4" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="metade">
                        <p>
                            3 - <b>Affirmative:</b><br>
                            <input type="text" name="grammar35-5" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                        <p>
                            <b>Interrogative:</b><br>
                            <input type="text" name="grammar35-6" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <p>
                        <b>Negative:</b><br>
                        She is not going to help you.
                    </p>
                    <p>
                        4 - <b>Affirmative:</b><br>
                        I am going to work tonight.
                    </p>
                    <div class="metade">
                        <p>
                            <b>Interrogative:</b><br>
                            <input type="text" name="grammar35-7" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="metade">
                        <p>
                            <b>Negative:</b><br>
                            <input type="text" name="grammar35-8" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="metade">
                        <p>
                            5. <b>Affirmative:</b><br>
                            <input type="text" name="grammar35-9" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <p>
                        <b>Interrogative:</b> 
                        <p>Are they going to use custom font?</p>
                    </p>
                    <div class="metade">
                        <p>
                            <b>Negative:</b><br>
                            <input type="text" name="grammar35-10" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="12">
                    <input type="hidden" name="atividade_id" value="35">
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

        $("#unidade12grammar35").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade12grammar35 input[type="text"]').each(function(index){
                if(($('#unidade12grammar35 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade12grammar35 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade12grammar35'), respostas);
            }else{
                enviarAtividade($('#unidade12grammar35'), respostas);
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
                        $('#unidade12grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade12grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade12grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade12grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade12/grammar.blade.php ENDPATH**/ ?>