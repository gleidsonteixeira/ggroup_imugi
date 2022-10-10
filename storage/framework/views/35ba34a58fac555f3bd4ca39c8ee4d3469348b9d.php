<?php $__env->startSection('titulo','Unit 3 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade3" data-etapa="grammar">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit3/grammar/grammar.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>                
                <div class="espacamento">
                    <p>I am a teacher <b>and</b> a photographer. (addition)</p>
                    <p>My hobby is wildlife photography, <b>but</b> my profession is fashion photography. (contrast)</p>
                    <p>My work is published in magazines and websites, <b>so</b> I need the photos to be perfect. (conclusion)</p>
                </div>
				<h5 class="barlow" style="margin-top: 16px">A - Complete the sentences with the appropriate conjunction. Use "and", "but" or "so".</h5>
				<form id="unidade3grammar11" method="post">
                    <p>1. Sophia works with teaching <input type="text" name="grammar-11-1" placeholder="Responda aqui" required> photography.</p>
                    <p>2. My photos are published in magazines, <input type="text" name="grammar-11-2" placeholder="Responda aqui" required> they need to be perfect.</p>
                    <p>3. The teacher’s name is Sophia Jones, <input type="text" name="grammar-11-3" placeholder="Responda aqui" required> she likes to be called by her first name, Sophia.</p>
                    <p>4. Sophia’s work is published in websites <input type="text" name="grammar-11-4" placeholder="Responda aqui" required> magazines.</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="3">
                    <input type="hidden" name="atividade_id" value="11">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">B - Correct the conjunctions in the sentences, if necessary.</h5>
				<form id="unidade3grammar12" method="post">
                    <p>1. I work with photography <input type="text" name="grammar-12-1" value="but" required> design.</p>
                    <p>2. Photoshop offers complete <input type="text" name="grammar-12-2" value="so" required> advanced editing tools.</p>
                    <p>3. Klaus <input type="text" name="grammar-12-3" value="and" required> Katia are Sophia’s students.</p>
                    <p>4. I am a photographer, <input type="text" name="grammar-12-4" value="but" required> I need Photoshop.</p>
                    <p>5. Sophia is from the United States, <input type="text" name="grammar-12-5" value="and" required> she lives in Brazil.</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="3">
                    <input type="hidden" name="atividade_id" value="12">
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

        $("#unidade3grammar11").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade3grammar11 input[type="text"]').each(function(index){
                if(($('#unidade3grammar11 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade3grammar11 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade3grammar11'), respostas);
            }else{
                enviarAtividade($('#unidade3grammar11'), respostas);
            }
        });

        $("#unidade3grammar12").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade3grammar12 input[type="text"]').each(function(index){
                if(($('#unidade3grammar12 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade3grammar12 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade3grammar12'), respostas);
            }else{
                enviarAtividade($('#unidade3grammar12'), respostas);
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
                        $('#unidade3grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade3grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade3grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade3grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade3/grammar.blade.php ENDPATH**/ ?>