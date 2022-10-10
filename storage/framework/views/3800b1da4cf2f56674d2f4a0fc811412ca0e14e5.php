<?php $__env->startSection('titulo','Unit 28 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade28" data-etapa="grammar">
				<h3 class="barlow">UNIT 28 - VICTOR’S STUDENTS</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit28/grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Object Pronouns X Subject Pronouns</h5>
                    <p>Object Pronouns Are Used After Verbs And Prepositions. The Object Receives The Action, While The Subject Executes The Action.</p>
                    <table class="metade center-align">
                        <tr>
                            <td><h5 class="barlow">Subject pronouns</h5></td>
                            <td><h5 class="barlow">Object pronouns</h5></td>
                        </tr>
                        <tr>
                            <td><p>I</p></td>
                            <td><p>ME</p></td>
                        </tr>
                        <tr>
                            <td><p>YOU</p></td>
                            <td><p>YOU</p></td>
                        </tr>
                        <tr>
                            <td><p>WE</p></td>
                            <td><p>US</p></td>
                        </tr>
                        <tr>
                            <td><p>THEY</p></td>
                            <td><p>THEM</p></td>
                        </tr>
                        <tr>
                            <td><p>HE</p></td>
                            <td><p>HIM</p></td>
                        </tr>
                        <tr>
                            <td><p>SHE</p></td>
                            <td><p>HER</p></td>
                        </tr>
                        <tr>
                            <td><p>IT</p></td>
                            <td><p>IT</p></td>
                        </tr>
                    </table>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences using "subject pronouns" or "object pronouns".</h5>
				<form id="unidade28grammar71" method="post">
                    <p>1 - She Loves <input type="text" name="grammar71-1" placeholder="Responda aqui" required/>  (He/Him).</p>
                    <p>2 - Give This To <input type="text" name="grammar71-2" placeholder="Responda aqui" required/> (She/Her).</p>
                    <p>3 - I Have Something For <input type="text" name="grammar71-3" placeholder="Responda aqui" required/>  (They/Them).</p>
                    <p>4 - Do You Need <input type="text" name="grammar71-4" placeholder="Responda aqui" required/> (I/Me)?</p>
                    <p>5 - Talk To <input type="text" name="grammar71-5" placeholder="Responda aqui" required/> (We/Us).</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="28">
                    <input type="hidden" name="atividade_id" value="71">
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

        $("#unidade28grammar71").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade28grammar71 input[type="text"]').each(function(index){
                if(($('#unidade28grammar71 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade28grammar71 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade28grammar71'), respostas);
            }else{
                enviarAtividade($('#unidade28grammar71'), respostas);
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
                        $('#unidade28grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade28grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade28grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade28grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade28/grammar.blade.php ENDPATH**/ ?>