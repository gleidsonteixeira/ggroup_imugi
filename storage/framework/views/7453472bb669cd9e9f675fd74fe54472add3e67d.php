<?php $__env->startSection('titulo','Unit 1 | Understanding'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade1" data-etapa="understanding">
				<h3 class="barlow">UNIT 01 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions, according to what you have learned in the unit.</h5>
                <form id="unidade1understanding5" method="post">
                    <p>
                        1 - Where is Professor Ludemann from?<br>
                        <input type="text" name="understanding5-1" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        2 - What is João’s profession?<br>
                        <input type="text" name="understanding5-2" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        3 - Why is Photoshop ideal for Bruno?<br>
                        <input type="text" name="understanding5-3" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        4 - Name two professionals who work with Photoshop.<br>
                        <input type="text" name="understanding5-4" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        5 - What is João’s personal opinion about Photoshop?<br>
                        <input type="text" name="understanding5-5" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        6 - According to João, what is the ideal software to use for image edit on?<br>
                        <input type="text" name="understanding5-6" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        7 - What did Professor Ludemann do five years ago?<br>
                        <input type="text" name="understanding5-7" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        8 - Why do professionals of graphic design production have an infinite number of opportunities?<br>
                        <input type="text" name="understanding5-8" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        9 - What is Bruno’s hobby?<br>
                        <input type="text" name="understanding5-9" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        10 - What does Professor Ludemann work with?<br>
                        <input type="text" name="understanding5-10" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="5">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div class="metade esquerda">
                    <figure>
                        <img src="<?php echo e(asset('assets/img/playgo/unit1/pagina-1.jpg')); ?>" alt="">
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

        $("#unidade1understanding5").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1understanding5 input[type="text"]').each(function(index){
                if(($('#unidade1understanding5 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1understanding5 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1understanding5'), respostas);
            }else{
                enviarAtividade($('#unidade1understanding5'), respostas);
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
                        $('#unidade1understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade1understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade1understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade1understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade1/understanding.blade.php ENDPATH**/ ?>