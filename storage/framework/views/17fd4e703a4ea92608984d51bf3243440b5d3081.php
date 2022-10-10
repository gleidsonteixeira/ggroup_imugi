<?php $__env->startSection('titulo','Unit 7 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade7" data-etapa="grammar">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit7/grammar/grammar.ogg')); ?>" type="audio/ogg">
                </audio> 
                <div class="clear"></div>
                <table class="metade center-align">
                    <tr>
                        <td><p>I remenber</p></td>
                        <td><p>He remenbers</p></td>
                    </tr>
                    <tr>
                        <td><p>You utilize</p></td>
                        <td><p>She utilizes</p></td>
                    </tr>
                    <tr>
                        <td><p>We need</p></td>
                        <td><p>It need</p></td>
                    </tr>
                    <tr>
                        <td><p>They give</p></td>
                        <td><p>He/She/It gives</p></td>
                    </tr>
                    <tr>
                        <td><p>Do i remember ?</p></td>
                        <td><p>Does he remember ?</p></td>
                    </tr>
                    <tr>
                        <td><p>Do you ultilize ?</p></td>
                        <td><p>Does she utilize ?</p></td>
                    </tr>
                    <tr>
                        <td><p>Do we need ?</p></td>
                        <td><p>Does it need ?</p></td>
                    </tr>
                    <tr>
                        <td><p>Do they give ?</p></td>
                    </tr>
                </table>
				<h5 class="barlow" style="margin-top: 16px">A - Complete the sentences using the correct verb form.</h5>
				<form id="unidade7grammar23" method="post">
                    <p><b>1 - </b>Carlos <input type="text" name="grammar23-1" placeholder="Responda aqui" required>  (use/uses) the Adjustment Panel for his pictures.</p>
                    <p><b>2 - </b>My friend and I <input type="text" name="grammar23-2" placeholder="Responda aqui" required>   (need/needs) it to edit our photos.</p>
                    <p><b>3 - </b>I <input type="text" name="grammar23-3" placeholder="Responda aqui" required>   (remember/remembers) the name of the tool.</p>
                    <p><b>4 - </b>The teacher <input type="text" name="grammar23-4" placeholder="Responda aqui" required>   (say/says) the Adjustment Panel is crucial for photographers.</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="7">
                    <input type="hidden" name="atividade_id" value="23">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">B - Choose the correct helping verb for each sentence.</h5>
				<form id="unidade7grammar24" method="post">
                    <p><b>1 - </b><input type="radio" name="grammar24-1" value="1" required><b>DO</b></input> <input type="radio" name="grammar24-1" value="2" required><b>Does</b></input>  Lee know how to use the Black & White effect?</p>
                    <p><b>2 - </b><input type="radio" name="grammar24-2" value="1" required><b>DO</b></input> <input type="radio" name="grammar24-2" value="2" required><b>Does</b></input>  you remember how to edit the contrast with the Adjustment Panel?</p>
                    <p><b>3 - </b><input type="radio" name="grammar24-3" value="1" required><b>DO</b></input> <input type="radio" name="grammar24-3" value="2" required><b>Does</b></input>  Beatriz remember the name of the panel?</p>
                    <p><b>4 - </b><input type="radio" name="grammar24-4" value="1" required><b>DO</b></input> <input type="radio" name="grammar24-4" value="2" required><b>Does</b></input>  Lee and Sophia use Photoshop?</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="7">
                    <input type="hidden" name="atividade_id" value="24">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        checkAtividade(23);
        checkAtividade2(24);

        $("#unidade7grammar23").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade7grammar23 input[type="text"]').each(function(index){
                if(($('#unidade7grammar23 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade7grammar23 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade7grammar23'), respostas);
            }else{
                enviarAtividade($('#unidade7grammar23'), respostas);
            }
        });

        $("#unidade7grammar24").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade7grammar24 input[type="radio"]:checked').each(function(index){
                if(($('#unidade7grammar24 input[type="radio"]:checked').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade7grammar24 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade7grammar24'), respostas);
            }else{
                enviarAtividade($('#unidade7grammar24'), respostas);                
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
                        $('#unidade7grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade7grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade7grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade7grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }
        
        function checkAtividade2(atividade_id){
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
                        $('#unidade7grammar'+atividade_id+' input[name="'+chaves[j]+'"][value="'+respostas[j]+'"]').attr("checked", true);
                    }
                    $('#unidade7grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade7grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade7/grammar.blade.php ENDPATH**/ ?>