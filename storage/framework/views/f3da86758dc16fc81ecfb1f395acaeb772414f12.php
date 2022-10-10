<?php $__env->startSection('titulo','Unit 18 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade18" data-etapa="grammar">
				<h3 class="barlow">UNIT 18 - SHAPE TOOL & ADOBE KULER</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit18/grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio> 
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Irregular verbs</h5>
                    <p>Irregular Verbs Differ From Regular Verbs Because Their Form In The Past Does Not Follow A Specific Rule.</p>
                    <h5 class="barlow">Examples of common irregular verbs:</h5>
                </div>
                <table class="metade center-align">
                    <tr>
                        <td><h5 class="barlow">Present</h5></td>
                        <td><h5 class="barlow">Paste</h5></td>
                    </tr>
                    <tr>
                        <td><p>GO</p></td>
                        <td><p>WENT</p></td>
                    </tr>
                    <tr>
                        <td><p>MAKE</p></td>
                        <td><p>MADE</p></td>
                    </tr>
                    <tr>
                        <td><p>AM / ARE / IS</p></td>
                        <td><p>WAS / WHERE</p></td>
                    </tr>
                    <tr>
                        <td><p>THINK</p></td>
                        <td><p>THOUGHT</p></td>
                    </tr>
                    <tr>
                        <td><p>CHOOSE</p></td>
                        <td><p>CHOSE</p></td>
                    </tr>
                    <tr>
                        <td><p>CUTE</p></td>
                        <td><p>CUT</p> </td>
                    </tr>
                </table>
				<h5 class="barlow" style="margin-top: 16px">A - Change the sentence into the other two forms.</h5>
				<form class="metade" id="unidade18grammar50" method="post">
                    <p>
                        <b>1 - Affirmative:</b><br>
                        She went to class yesterday.
                    </p>
                    <p>
                        <b>Interrogative:</b><br>
                        <input class="full left-align" type="text" name="grammar50-1" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        <b>Negative:</b><br>
                        <input class="full left-align" type="text" name="grammar50-2" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        <b>2 - Affirmative:</b><br>
                        <input class="full left-align" type="text" name="grammar50-3" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        <b>Interrogative:</b><br>
                        Did he choose the color? 
                    </p>
                    <p>
                        <b>Negative:</b><br>
                        <input class="full left-align" type="text" name="grammar50-4" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        <b>3 - Affirmative:</b><br>
                        <input class="full left-align" type="text" name="grammar50-5" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        <b>Interrogative:</b><br>
                        <input class="full left-align" type="text" name="grammar50-6" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        <b>Negative:</b><br>
                        They didn’t make the layout.
                    </p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="18">
                    <input type="hidden" name="atividade_id" value="50">
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

        $("#unidade18grammar50").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade18grammar50 input[type="text"]').each(function(index){
                if(($('#unidade18grammar50 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade18grammar50 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade18grammar50'), respostas);
            }else{
                enviarAtividade($('#unidade18grammar50'), respostas);
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
                        $('#unidade18grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade18grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade18grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade18grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade18/grammar.blade.php ENDPATH**/ ?>