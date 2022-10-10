<?php $__env->startSection('titulo','Unit 14 | Understanding'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade14" data-etapa="understanding">
				<h3 class="barlow">UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions, according to what you have learned in the unit.</h5>
                <div class="metade">
                    <form id="unidade14understanding41" method="post">
                        <p>
                            1 -  Who Remembered The Color Tools?<br>
                            <input type="text" name="understanding41-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 -  How Many Tools Does ADAM Remember?<br>
                            <input type="text" name="understanding41-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 -  What Tool Do We Use To Save Colors Created In The Color Picker?<br>
                            <input type="text" name="understanding41-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - What Is The Color Picker Used For?<br>
                            <input type="text" name="understanding41-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - Did Medina Remember All Of The Typography Tools He Studied?<br>
                            <input type="text" name="understanding41-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - What Is The Name Of The Tool Used To Select Fonts?<br>
                            <input type="text" name="understanding41-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - What Can The Layer Panel Do?<br>
                            <input type="text" name="understanding41-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            8 - What Is The Difference Between The Style Panel And The Layer Panel?<br>
                            <input type="text" name="understanding41-8" class="full left-align" required>
                        </p>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="14">
                        <input type="hidden" name="atividade_id" value="41">
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

        $("#unidade14understanding41").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade14understanding41 input[type="text"]').each(function(index){
                if(($('#unidade14understanding41 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade14understanding41 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade14understanding41'), respostas);
            }else{
                enviarAtividade($('#unidade14understanding41'), respostas);
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
                        $('#unidade14understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade14understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade14understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade14understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade14/understanding.blade.php ENDPATH**/ ?>