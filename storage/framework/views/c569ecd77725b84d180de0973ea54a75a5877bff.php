<?php $__env->startSection('titulo','Unit 15 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade15" data-etapa="grammar">
				<h3 class="barlow">UNIT 15 - PROFESSOR Akira Suzuki</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit15/grammar/grammar.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Future with will vs. Future with going to</h5>
                    <p>
                        When you want to express a decision use will; use going to after the decision has been
                        made. When we want to talk about future facts or things we believe to be true about the
                        future, we use will.
                    </p>
                   <p>Structure</p>
                   <p><b>Affirmative:</b>  SUBJECT + WILL + VERB</p>
                   <p>EXAMPLE: I WILL BE HOME AT NIGHT</p>
                   <p><b>Interrogative:</b> WILL + SUBJECT + VERB</p>
                   <p>EXAMPLE: WILL YOU BE HOME AT NIGHT?</p>
                   <p><b>Negative:</b>  SUBJECT + WILL + NOT + VERB</p>
                   <p>EXAMPLE:  I WILL NOT BE HOME AT NIGHT.</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences with the verbs in parenthesis using "will".</h5>
				<form id="unidade15grammar42" method="post">
                    <p>1 - EVA <input type="text" name="grammar42-1" placeholder="Responda aqui" required/> ( NOT TRAVEL) TO JAPAN.</p>
                    <p>2 - <input type="text" name="grammar42-2" placeholder="Responda aqui" required/> ROBERTA <input type="text" name="grammar42-3" placeholder="Responda aqui" required/> (HELP) YOU WITH THE EXERCISE?</p>
                    <p>3 - JOHN <input type="text" name="grammar42-4" placeholder="Responda aqui" required/>  (BE) HERE IN 10 MINUTES.</p>
                    <p>4 - THEY <input type="text" name="grammar42-5" placeholder="Responda aqui" required/> (NOT GO) TO THE PARTY.</p>
                    <p>5 - <input type="text" name="grammar42-6" placeholder="Responda aqui" required/> HE <input type="text" name="grammar26-4" placeholder="Responda aqui" required/> (CALL) ME TOMORROW.</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="15">
                    <input type="hidden" name="atividade_id" value="42">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">B - Use "will" or "going to" to complete the sentences.</h5>
				<form id="unidade15grammar43" method="post">
                    <p>1 - THE GAME <input type="text" name="grammar43-1" placeholder="Responda aqui" required/> (BE) GREAT!</p>
                    <p>2 - I PLANNED A PARTY FOR MY BIRTHDAY. I <input type="text" name="grammar43-2" placeholder="Responda aqui" required/> (TRAVEL) TO VISIT MY OLD FRIENDS IN THE UNITED STATES.</p>
                    <p>3 - SHE <input type="text" name="grammar43-3" placeholder="Responda aqui" required/>  (MAKE) A GREAT WEB DESIGNER.</p>
                    <p>4 - WE <input type="text" name="grammar43-4" placeholder="Responda aqui" required/>  (BE) LATE. WE NEED TO GO NOW.</p>
                    <p>5 - YOU <input type="text" name="grammar43-5" placeholder="Responda aqui" required/> (NEED) TO STUDY A LOT TO PASS THE TEST.</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="15">
                    <input type="hidden" name="atividade_id" value="43">
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

        $("#unidade15grammar42").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15grammar42 input[type="text"]').each(function(index){
                if(($('#unidade15grammar42 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15grammar42 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15grammar42'), respostas);
            }else{
                enviarAtividade($('#unidade15grammar42'), respostas);
            }
        });

        $("#unidade15grammar43").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15grammar43 input[type="text"]').each(function(index){
                if(($('#unidade15grammar43 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15grammar43 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15grammar43'), respostas);
            }else{
                enviarAtividade($('#unidade15grammar43'), respostas);
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
                        $('#unidade15grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade15grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade15grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade15grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade15/grammar.blade.php ENDPATH**/ ?>