
<?php $__env->startSection('titulo','Unit 24 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade24" data-etapa="grammar">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit24/grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">There To Be</h5>
                    <p>The Verb There To Be Is Used To Express The Existance Or Presence Of Something Or Someone.</p>
                    <table class="doisterco center-align">
                        <tr>
                            <td></td>
                            <td><h5 class="barlow">Affirmative</h5></td>
                            <td><h5 class="barlow">Interrogative</h5></td>
                            <td><h5 class="barlow">Negative</h5></td>
                        </tr>
                        <tr>
                            <td><p><b>Singular</b></p></td>
                            <td><p>There Is.</p></td>
                            <td><p>Is There?</p></td>
                            <td><p>There Isn’t/ There Is No.</p></td>
                        </tr>
                        <tr>
                            <td><p><b>Plural</b></p></td>
                            <td><p>There Are</p></td>
                            <td><p>Are There?</p></td>
                            <td><p>There Aren’t/ There Are No</p></td>
                        </tr>
                    </table>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences with the correct form of the verb there to be.</h5>
                <form id="unidade24grammar64" method="post">
                    <p>1 - <input type="text" name="grammar64-1" placeholder="Responda aqui" required> Many People At The Party</p>
                    <p>2 - <input type="text" name="grammar64-2" placeholder="Responda aqui" required> Animals In The Park?</p>
                    <p>3 - <input type="text" name="grammar64-3" placeholder="Responda aqui" required> Cars Parked On The Street. (Negative)</p>
                    <p>4 - <input type="text" name="grammar64-4" placeholder="Responda aqui" required> Anyone Home?</p>
                    <p>5 - <input type="text" name="grammar64-5" placeholder="Responda aqui" required> Tickets For The Movie?</p>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="24">
                    <input type="hidden" name="atividade_id" value="64">
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

        $("#unidade24grammar64").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade24grammar64 input[type="text"]').each(function(index){
                if(($('#unidade24grammar64 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade24grammar64 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade24grammar64'), respostas);
            }else{
                enviarAtividade($('#unidade24grammar64'), respostas);
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
                        $('#unidade24grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade24grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade24grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade24grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade24/grammar.blade.php ENDPATH**/ ?>