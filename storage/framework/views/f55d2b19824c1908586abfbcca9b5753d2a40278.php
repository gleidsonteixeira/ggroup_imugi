<?php $__env->startSection('titulo','Unit 4 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade4" data-etapa="grammar">
				<h3 class="barlow">UNIT 04 - NICE TO MEET YOU, KATE!</h3>
				<h5 class="barlow">3 - GRAMMAR (demonstrative pronouns)</h5>
                <table class="metade center-align">
                    <tr>
                        <td></td>
                        <td><h5 class="barlow">Close</h5></td>
                        <td><h5 class="barlow">far</h5></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="upper"><p><b>singular</b></p></td>
                        <td><p>This</p></td>
                        <td><p>That</p></td>
                        <td><p>(is)</p></td>
                    </tr>
                    <tr>
                        <td class="upper"><p><b>plural</b></p></td>
                        <td><p>These</p></td>
                        <td><p>Those</p></td>
                        <td><p>(are)</p></td>
                    </tr>
                </table>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit4/grammar/grammar.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the exercise with the correct demonstrative pronouns in the questions and personal pronouns in the answers.</h5>
				<form id="unidade4grammar14" method="post">
                    <div class="umterco">
                        <figure>
                            <img src="<?php echo e(asset('assets/img/playgo/unit4/01.png')); ?>" alt="Garotos festejando">
                        </figure>
                        <p>What <input type="text" name="grammar14-1" placeholder="Responda aqui" required/> ?</p>
                        <p><input type="text" name="grammar14-2" placeholder="Responda aqui" required/> book.</p>
                    </div>
                    <div class="umterco">
                        <figure>
                            <img src="<?php echo e(asset('assets/img/playgo/unit4/02.png')); ?>" alt="Garotos festejando">
                        </figure>
                        <p>Who is <input type="text" name="grammar14-3" placeholder="Responda aqui" required/> ?</p>
                        <p><input type="text" name="grammar14-4" placeholder="Responda aqui" required/> Kate.</p>
                    </div>
                    <div class="umterco">
                        <figure>
                            <img src="<?php echo e(asset('assets/img/playgo/unit4/03.png')); ?>" alt="Garotos festejando">
                        </figure>
                        <p>What <input type="text" name="grammar14-5" placeholder="Responda aqui" required/> ?</p>
                        <p><input type="text" name="grammar14-6" placeholder="Responda aqui" required/> glasses.</p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="4">
                    <input type="hidden" name="atividade_id" value="14">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                
				<h5 class="barlow">B. Fill in the blanks with the appropriate form of the verb be using information from the text.</h5>
				<form id="unidade4grammar15" method="post">
                    <p>1 - This <input type="text" name="grammar15-1" placeholder="Responda aqui" required/> Kate. She <input type="text" name="grammar15-2" placeholder="Responda aqui" required/> from here. She <input type="text" name="grammar15-3" placeholder="Responda aqui" required/> from Japan.</p>
                    <p>2 - Carlos and Kate <input type="text" name="grammar15-4" placeholder="Responda aqui" required/>  Photoshop students. They <input type="text" name="grammar15-5" placeholder="Responda aqui" required/> from Australia. Carlos <input type="text"  name="grammar15-6" placeholder="Responda aqui" required/> Brasilian and she <input type="text" name="grammar15-7" placeholder="Responda aqui" required/> Japanese.</p>
                    <p>3 - <input type="text" name="grammar15-8" placeholder="Responda aqui" required/> you Brazilian?</p>
           
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="4">
                    <input type="hidden" name="atividade_id" value="15">
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

        $("#unidade4grammar14").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade4grammar14 input[type="text"]').each(function(index){
                if(($('#unidade4grammar14 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade4grammar14 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade4grammar14'), respostas);
            }else{
                enviarAtividade($('#unidade4grammar14'), respostas);
            }
        });

        $("#unidade4grammar15").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade4grammar15 input[type="text"]').each(function(index){
                if(($('#unidade4grammar15 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade4grammar15 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade4grammar15'), respostas);
            }else{
                enviarAtividade($('#unidade4grammar15'), respostas);
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
                        $('#unidade4grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade4grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade4grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade4grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade4/grammar.blade.php ENDPATH**/ ?>