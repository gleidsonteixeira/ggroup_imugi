<?php $__env->startSection('titulo','Unit 2 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade2" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit2/pronuciation/pronuciation.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to your teacher and repeat the words to practice the pronunciation of words with the letter "R".</h5>
				<ul class="lista-inline">
                    <li><p><b class="upper">For</b></p></li>
                    <li><p><b class="upper">Designer</b></p></li>
                    <li><p><b class="upper">Importance</b></p></li>
                    <li><p><b class="upper">Photographer</b></p></li>
                    <li><p><b class="upper">Great</b></p></li>
                    <li><p><b class="upper">Brother</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to your teacher and repeat the words to practice the pronunciation of words with the letter "P".</h5>
                <ul class="lista-inline">
                    <li><p><b class="upper">Production</b></p></li>
                    <li><p><b class="upper">Professional</b></p></li>
                    <li><p><b class="upper">Professor</b></p></li>
                    <li><p><b class="upper">Develop</b></p></li>
                    <li><p><b class="upper">Photoshop</b></p></li>
                    <li><p><b class="upper">Profession</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Now, read the sentence below to check your understanding.</h5>
                <div class="espacamento">
                    <p>“Photoshop, for professionals of graphic production, is of great importance.”</p>
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

        $("#unidade2listening9").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade2listening9 input[type="text"]').each(function(index){
                if(($('#unidade2listening9 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2listening9 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2listening9'), respostas);
            }else{
                enviarAtividade($('#unidade2listening9'), respostas);
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
                        $('#unidade2listening'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2listening'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade2listening'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade2listening'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade2/pronunciation.blade.php ENDPATH**/ ?>