
<?php $__env->startSection('titulo','Unit 21 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade21" data-etapa="grammar">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit21/grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Used To</h5>
                    <p>Used To Is Utilized To Reffer To An Action That Happened At A Certain Frequency But Doesn’t Occur Any Longer.</p>
                    <h5 class="barlow">Structure</h5>
                    <p><b>Affirmative :</b> SUBJECT + USED TO + VERB I USED TO WORK ON SATURDAYS.</p>
                    <p><b>Interrogative :</b> DID + SUBJECT + USED TO + VERB DID YOU USED TO TRAVEL EVERY WEEKEND?</p>
                    <p><b>Negative :</b> SUBJECT + DID + NOT + USED TO + VERBSHE DIDN’T USED TO PAY ATTENTION TO THE CLASS, BUT NOW SHE DOES.</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Fill in the blanks with the verbs in parenthesis using "used to".</h5>
                <form id="unidade21grammar57" method="post">
                    <p>1 - <input type="text" name="grammar57-1" placeholder="Responda aqui" required> You <input type="text" name="grammar57-2" placeholder="Responda aqui" required> (Draw) For The School Paper?</p>
                    <p>2 - They <input type="text" name="grammar57-3" placeholder="Responda aqui" required>  (Not Go) To The Meetings, But Now They Do</p>
                    <p>3 - We <input type="text" name="grammar57-4" placeholder="Responda aqui" required>  (Talk) Every Day.</p>
                    <p>4 - <input type="text" name="grammar57-5" placeholder="Responda aqui" required> She <input type="text" name="grammar57-6" placeholder="Responda aqui" required>  (Produce) Ilustrations For Magazines?</p>
                    <p>5 - <input type="text" name="grammar57-7" placeholder="Responda aqui" required>  (Not Work) In The Evenings.</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="21">
                    <input type="hidden" name="atividade_id" value="57">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">B - Answer the questions about yourself.</h5>
                <form id="unidade21grammar58" method="post">
                <div class="metade">
                    <p>
                        1 - Did you use to play sports?</br>
                        <input type="text" name="grammar58-1" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        2 - Did you use to have pets?</br>
                        <input type="text" name="grammar58-2" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        3 - Did you use to be a good student?</br>
                        <input type="text" name="grammar58-3" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        4 - Did you use to live in a different city?</br>
                        <input type="text" name="grammar58-4" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        5 - Did you use to work in another area?</br>
                        <input type="text" name="grammar58-5" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                </div>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="21">
                <input type="hidden" name="atividade_id" value="58">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade21grammar57").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade21grammar57 input[type="text"]').each(function(index){
                if(($('#unidade21grammar57 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade21grammar57 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade21grammar57'), respostas);
            }else{
                enviarAtividade($('#unidade21grammar57'), respostas);
            }
        });

        $("#unidade21grammar58").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade21grammar58 input[type="text"]').each(function(index){
                if(($('#unidade21grammar58 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade21grammar58 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade21grammar58'), respostas);
            }else{
                enviarAtividade($('#unidade21grammar58'), respostas);
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
                        $('#unidade21grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade21grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade21grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade21grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade21/grammar.blade.php ENDPATH**/ ?>