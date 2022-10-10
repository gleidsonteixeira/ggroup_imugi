
<?php $__env->startSection('titulo','Unit 6 | Understanding'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade6" data-etapa="understanding">
				<h3 class="barlow">UNIT 06 - Brush and Red Eye Correction</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions according to the information studied in the unit.</h5>
                <div class="metade">
                    <form id="unidade6understanding82" method="post">
                        <p>
                            1 - How many tools does Sophia have to teach the class?<br>
                            <input type="text" name="understanding82-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 - What are the names of the two tools studied in this unit?<br>
                            <input type="text" name="understanding82-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 - Which tool is used to touch up imperfections in a picture?<br>
                            <input type="text" name="understanding82-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - Does Kate know what the Healing Brush is?<br>
                            <input type="text" name="understanding82-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - What is the tool that removes the red from your eyes called?<br>
                            <input type="text" name="understanding82-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - Who uses Healing Brush?<br>
                            <input type="text" name="understanding82-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - Why is it obvious to Kate that Red Eye Correction removes the red from your eyes in pictures?<br>
                            <input type="text" name="understanding82-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            8 - Is Carlos sure about his answer?<br>
                            <input type="text" name="understanding82-8" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="6">
                        <input type="hidden" name="atividade_id" value="82">
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

        $("#unidade6understanding82").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade6understanding82 input[type="text"]').each(function(index){
                if(($('#unidade6understanding82 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade6understanding82 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade6understanding82'), respostas);
            }else{
                enviarAtividade($('#unidade6understanding82'), respostas);
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
                        $('#unidade6understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade6understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade6understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade6understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade6/understanding.blade.php ENDPATH**/ ?>