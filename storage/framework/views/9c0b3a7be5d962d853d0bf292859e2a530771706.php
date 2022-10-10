<?php $__env->startSection('titulo','Unit 15 | Understanding'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade15" data-etapa="understanding">
				<h3 class="barlow">UNIT 15 - PROFESSOR Akira Suzuki</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions, according to what you have learned in the unit.</h5>
                <div class="metade">
                    <form id="unidade15understanding44" method="post">
                        <p>
                            1 -  Where Is Akira From?<br>
                            <input type="text" name="understanding44-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 -  When Did Akira Start To Work As A Web Designer?<br>
                            <input type="text" name="understanding44-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 -  How Old Was Akira When He Moved?<br>
                            <input type="text" name="understanding44-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - How Long Has He Worked In Web Designing?<br>
                            <input type="text" name="understanding44-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - How Long Did He Work As A Graphic Designer For?<br>
                            <input type="text" name="understanding44-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - Why Did He Start Working As A Web Designer?<br>
                            <input type="text" name="understanding44-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - Who Had A Small Company?<br>
                            <input type="text" name="understanding44-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            8 - How Is Photoshop Important In Web Designing?<br>
                            <input type="text" name="understanding44-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            9 - Is Layout Development A Simple Process In Akira’s Opinion?<br>
                            <input type="text" name="understanding44-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="15">
                        <input type="hidden" name="atividade_id" value="44">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
                <div class="metade" style="margin-top: 36px">
                    <figure>
                        <img src="<?php echo e(asset('assets/img/playgo/unit15/U15.jpg')); ?>" alt="Dica">
                    </figure>
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

        $("#unidade15understanding44").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15understanding44 input[type="text"]').each(function(index){
                if(($('#unidade15understanding44 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15understanding44 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15understanding44'), respostas);
            }else{
                enviarAtividade($('#unidade15understanding44'), respostas);
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
                        $('#unidade15understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade15understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade15understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade15understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade15/understanding.blade.php ENDPATH**/ ?>