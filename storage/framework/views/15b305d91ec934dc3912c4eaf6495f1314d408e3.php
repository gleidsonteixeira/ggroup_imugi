<?php $__env->startSection('titulo','Unit 18 | Understanding'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade18" data-etapa="understanding">
				<h3 class="barlow">UNIT 18 - SHAPE TOOL & ADOBE KULER</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>                
                <form id="unidade18understanding51" method="post" class="metade">
                    <p>
                        1 - What Was Angelique’s Question About Last Class?<br>
                        <input type="text" name="understanding51-1" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        2 - What Does The Word Kuler Sound Like?<br>
                        <input type="text" name="understanding51-2" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        3 - Explain What Adobe Kuler Is.<br>
                        <input type="text" name="understanding51-3" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        4 - How Did Angelique Use Shape Tool For Her Website?<br>
                        <input type="text" name="understanding51-4" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        5 - What Is Shape Tool?<br>
                        <input type="text" name="understanding51-5" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        6 - Which Is Not An Extension For Photoshop: Shape Tool Or Adobe Kuler?<br>
                        <input type="text" name="understanding51-6" class="full left-align" required>
                    </p>
                    <p>
                        7 - What Shapes Can Shape Tool Create?<br>
                        <input type="text" name="understanding51-7" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        8 - Can You Create Colors With Adobe Kuler?<br>
                        <input type="text" name="understanding51-8" class="full left-align" placeholder="Responda aqui" required>
                    </p>                                        
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="18">
                    <input type="hidden" name="atividade_id" value="51">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div class="metade esquerda">
                    <figure>
                        <img src="<?php echo e(asset('assets/img/playgo/unit18/U18.jpg')); ?>" alt="">
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

        $("#unidade18understanding51").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade18understanding51 input[type="text"]').each(function(index){
                if(($('#unidade18understanding51 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade18understanding51 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade18understanding51'), respostas);
            }else{
                enviarAtividade($('#unidade18understanding51'), respostas);
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
                        $('#unidade18understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade18understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade18understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade18understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade18/understanding.blade.php ENDPATH**/ ?>