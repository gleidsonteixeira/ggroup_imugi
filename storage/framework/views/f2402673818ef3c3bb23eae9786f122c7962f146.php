<?php $__env->startSection('titulo','Unit 6 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade6" data-etapa="grammar">
				<h3 class="barlow">UNIT 06 - Brush and Red Eye Correction</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit6/grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <table class="metade center-align">
                    <tr>
                        <td colspan="2"><h5 class="barlow">Imperative form</h5></td>
                    </tr>
                    <tr>
                        <td><p>Open your books.</p></td>
                        <td><p>Use the brush.</p></td>
                    </tr>
                    <tr>
                        <td><p>Edit the picture.</p></td>
                        <td><p>Click on burn tool.</p></td>
                    </tr>
                    <tr>
                        <td><p>Remove brightness.</p></td>
                        <td><p>Delete the photo.</p></td>
                    </tr>
                    <tr>
                        <td><p>Add contrast.</p></td>
                        <td><p>Touch up the imperfections.</p></td>
                    </tr>
                </table>
				<h5 class="barlow" style="margin-top: 16px">A - Select the correct option of the underlined verbs.</h5>
				<form id="unidade6grammar21" method="post">
                    <p>1 - <input type="radio" name="grammar-21-1" value="1" required> <b>Open</b> <input type="radio" name="grammar-21-1" value="2" required> <b>Edit</b> Photoshop.</p>
                    <p>2 - <input type="radio" name="grammar-21-2" value="1" required> <b>Add</b> <input type="radio" name="grammar-21-2" value="2" required> <b>Touch</b> up the picture.</p>
                    <p>3 - <input type="radio" name="grammar-21-3" value="1" required> <b>Remove</b> <input type="radio" name="grammar-21-3" value="2" required> <b>Click</b> on the brush.</p>
                    <p>4 - <input type="radio" name="grammar-21-4" value="1" required> <b>Delete</b> <input type="radio" name="grammar-21-4" value="2" required> <b>Edit</b> the brightness.</p>
                    <p>5 - <input type="radio" name="grammar-21-5" value="1" required> <b>Use</b> <input type="radio" name="grammar-21-5" value="2" required> <b>Touch</b> the brightness.</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="6">
                    <input type="hidden" name="atividade_id" value="21">
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

        $("#unidade6grammar21").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade6grammar21 input[type="radio"]:checked').each(function(index){
                if(($('#unidade6grammar21 input[type="radio"]:checked').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade6grammar21 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade6grammar21'), respostas);
            }else{
                enviarAtividade($('#unidade6grammar21'), respostas);
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
                        $('#unidade6grammar'+atividade_id+' input[name="'+chaves[j]+'"][value="'+respostas[j]+'"]').attr("checked", true);
                    }
                    $('#unidade6grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade6grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(form, respostas){
            var atividade = {
                "_token" : form.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : form.find('input[name="atividade_id"]').val(),
                "unidade_id" : form.find('input[name="unidade_id"]').val()
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: atividade,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    //window.location.reload();
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade6/grammar.blade.php ENDPATH**/ ?>