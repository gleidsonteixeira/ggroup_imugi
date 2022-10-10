<?php $__env->startSection('titulo','Unit 2 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade2" data-etapa="grammar">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit2/grammar/grammar.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear" style="margin-bottom: 16px;"></div>
				<div class="metade esquerda">
                    <h5 class="barlow" style="margin-top: 16px">A - Answer the questions. Use short answers.</h5>
                    <form id="unidade2grammar6" method="post">
                        <p><b>1 - </b> Do you have Photoshop in your computer? <input type="text" name="grammar6-1" placeholder="Responda aqui" required ></p>
                        <p><b>2 - </b> Do you use Photoshop to edit photos? <input type="text" name="grammar6-2" placeholder="Responda aqui" required></p>
                        <p><b>3 - </b> Do any of your friends use Photoshop for work? <input type="text" name="grammar6-3" placeholder="Responda aqui" required></p>
                        <p><b>4 - </b> Do you have experience in Photoshop? <input type="text" name="grammar6-4" placeholder="Responda aqui" required></p>
                        <p><b>5 - </b> Do you need Photoshop now? <input type="text" name="grammar6-5" placeholder="Responda aqui" required></p>                    
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="2">
                        <input type="hidden" name="atividade_id" value="6">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
                <div class="metade direita">
                    <figure>
                        <img style="max-width:500px; max-height:600px;" src="<?php echo e(asset('assets/img/playgo/unit2/painel.png')); ?>" alt="Garotos festejando">
                    </figure>
                </div>
                <div class="clear"></div>
                <div class="metade">				
                    <h5 class="barlow">B - Organize the sentences. Use DO when necessary.</h5>
                    <form id="unidade2grammar7" method="post">
                        <p>1 - You/with/work/photography <input class="full left-align" type="text" name="grammar7-1" placeholder="Responda aqui" required></p>
                        <p>2 - They/a software/need/to edit/photos <input class="full left-align" type="text" name="grammar7-2" placeholder="Responda aqui" required></p>
                        <p>3 - Have/you/ a computer <input class="full left-align" type="text" name="grammar7-3" placeholder="Responda aqui" required></p>
                        <p>4 - We/Photoshop/use/for work <input class="full left-align" type="text" name="grammar7-4" placeholder="Responda aqui" required></p>                        
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="2">
                        <input type="hidden" name="atividade_id" value="7">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
                <h5 class="barlow">C - The punctuation is correct.</h5>
                <form id="unidade2grammar8" method="post">
                    <div class="metade">
                        <p>1 - You develop websites? <input class="full left-align" type="text" name="grammar8-1" placeholder="Responda aqui" required>? </p>
                        <p>2 - Do I use layouts I develop on Photoshop for sites. <input class="full left-align" type="text" name="grammar8-2" placeholder="Responda aqui" required>. </p>
                        <p>3 - Thomas and John Knoll are brothers. <input class="full left-align" type="text" name="grammar8-3" placeholder="Responda aqui" required>? </p>                        
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="2">
                        <input type="hidden" name="atividade_id" value="8">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </div>                    
                    <div class="clear"></div>                                        
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

        $("#unidade2grammar6").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade2grammar6 input[type="text"]').each(function(index){
                if(($('#unidade2grammar6 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2grammar6 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2grammar6'), respostas);
            }else{
                enviarAtividade($('#unidade2grammar6'), respostas);
            }
        });

        $("#unidade2grammar7").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade2grammar7 input[type="text"]').each(function(index){
                if(($('#unidade2grammar7 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2grammar7 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2grammar7'), respostas);
            }else{
                enviarAtividade($('#unidade2grammar7'), respostas);
            }
        });

        $("#unidade2grammar8").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade2grammar8 input[type="text"]').each(function(index){
                if(($('#unidade2grammar8 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2grammar8 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2grammar8'), respostas);
            }else{
                enviarAtividade($('#unidade2grammar8'), respostas);
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
                        $('#unidade2grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade2grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade2grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade2/grammar.blade.php ENDPATH**/ ?>