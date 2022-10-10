
<?php $__env->startSection('titulo','Unit 3 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade3" data-etapa="grammar">
				<h3 class="barlow">UNIT 3 </h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
                    <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 03/03_GRAMMAR/GRAMMAR_03.mp3')); ?>" type="audio/mp3">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px">A - EXPLAINING PROCEDURES: EXPRESSING SEQUENCE</p>
                <figure>
                    <img src="<?php echo e(asset('assets/img/masteroflanguage/unit3/grammar.png')); ?>" alt="mapa">
                </figure>
                <div class="clear"></div>
                <p class="bordaVerde" style="margin-top:32px">Explaining Procedures = Giving instructions = Sequence of steps to be follow.</p>

                <h5 class="barlow"><b>Expressions used to Express sequence:</b></h5>
                <div class="espacamento">
                    <p><b>First</b></p>
                    <p><b>Second</b></p>
                    <p><b>Third</b></p>
                    <p><b>Then</b></p>
                    <p><b>Right after that</b></p>
                    <p><b>After that/Afterwards, After</b></p>
                    <p><b>Finish by</b></p>
                    <p><b>Start by.</b></p>
                </div>
                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES:</b></h5>
                <p>Think of 2 different procedures and explain how to execute on them step by step.</p>
                <p>Examples: Uploading a video on Youtube; Opening a Facebook account; uploading
                a story on instagram.</p>
                <p>Have in mind that you are supposed to use as many sequence words as you can. If you want,
                you can write about a different procedure. Be prepared to share your ideas.</p>
                <h5 class="barlow">Procedure 1</h5>
                <form id="unidade3grammar510" method="post">
                    <textarea name="grammar510-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="3">
                    <input type="hidden" name="atividade_id" value="510">
                    <div class="clear"></div>
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">Procedure 2</h5>
                <form id="unidade3grammar511" method="post">
                    <textarea name="grammar511-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="3">
                    <input type="hidden" name="atividade_id" value="511">
                    <div class="clear"></div>
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

        $("#unidade3grammar510").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade3grammar510 textarea').attr("name")+'":"'+$('#unidade3grammar510 textarea').val()+'"}';
            if($('#unidade3grammar510 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade3grammar510'), respostas);
            }else{
                enviarAtividade($('#unidade3grammar510'), respostas);
            }
        });
        $("#unidade3grammar511").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade3grammar511 textarea').attr("name")+'":"'+$('#unidade3grammar511 textarea').val()+'"}';
            if($('#unidade3grammar511 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade3grammar511'), respostas);
            }else{
                enviarAtividade($('#unidade3grammar511'), respostas);
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
                        $('#unidade3grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade3grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade3grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade3grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);

                }
                    $('#unidade3grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade3grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(formId, respostas){
            var atividade = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : formId.find('input[name="atividade_id"]').val(),
                "unidade_id" : formId.find('input[name="unidade_id"]').val()
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade3/grammar.blade.php ENDPATH**/ ?>