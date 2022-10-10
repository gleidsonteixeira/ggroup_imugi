<?php $__env->startSection('titulo','Unit 29 | Listening'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade29" data-etapa="grammar">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit29/grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Possessive Adjectives X Possessive Pronouns</h5>
                    <p>Possessive Adjectives: Used Before Nouns.</p>
                    <p>Possessive Pronoun: Used To Express Possession While Substituting The Noun/ Or At The End Of Sentences To Give Enphasis To The Possession.</p>
                </div>
                <table class="metade center-align">
                    <tr>
                        <td colspan="2"><h5 class="barlow">Possessive adjectives</h5></td>
                        <td><h5 class="barlow">Possessive pronouns</h5></td>
                    </tr>
                    <tr>
                        <td><p>I</p></td>
                        <td><p>MY</p></td>
                        <td><p>MINE</p></td>
                    </tr>
                    <tr>
                        <td><p>YOU</p></td>
                        <td><p>YOUR</p></td>
                        <td><p>YOURS</p></td>
                    </tr>
                    <tr>
                        <td><p>WE</p></td>
                        <td><p>OUR</p></td>
                        <td><p>OURS</p></td>
                    </tr>
                    <tr>
                        <td><p>THEY</p></td>
                        <td><p>THEIR</p></td>
                        <td><p>THEIRS</p></td>
                    </tr>
                    <tr>
                        <td><p>HE</p></td>
                        <td><p>HIS</p></td>
                        <td><p>HIS</p></td>
                    </tr>
                    <tr>
                        <td><p>SHE</p></td>
                        <td><p>HER</p></td>
                        <td><p>HERS</p></td>
                    </tr>
                    <tr>
                        <td><p>IT</p></td>
                        <td><p>ITS</p></td>
                        <td><p>X</p></td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences using possessive adjectives or possessive pronouns.</h5>
				<form id="unidade29grammar73" method="post">
                    <p>1. These Are Not <input type="text" name="grammar73-1" placeholder="Responda aqui" required/>  (My/Mine) Books, <input type="text" name="grammar73-2" placeholder="Responda aqui" required/> (My/Mine) Are Over There.</p>
                    <p>2. That Pen Is <input type="text" name="grammar73-3" placeholder="Responda aqui" required/> (My/Mine).</p>
                    <p>3. Is This Car <input type="text" name="grammar73-4" placeholder="Responda aqui" required/>  (Your/Yours)?</p>
                    <p>4. Where Are <input type="text" name="grammar73-5" placeholder="Responda aqui" required/> (My/Mine) Car Keys?</p>
                    <p>5. Are They <input type="text" name="grammar73-6" placeholder="Responda aqui" required/> (Her/Hers) Friends?</p>
                    <p>6. This Money Isn’t <input type="text" name="grammar73-7" placeholder="Responda aqui" required/> (My/Mine), It’s <input type="text" name="grammar73-8" placeholder="Responda aqui" required/> (Their/Theirs).</p>
                    <p>7. She Needs <input type="text" name="grammar73-9" placeholder="Responda aqui" required/> (Your/Yours) Help.</p>
                    <p>8. That Is Not <input type="text" name="grammar73-10" placeholder="Responda aqui" required/> (Our/Ours) Because <input type="text" name="grammar73-11" placeholder="Responda aqui" required/>  (Our/Ours) Car Is In The Garage.</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="29">
                    <input type="hidden" name="atividade_id" value="73">
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

        $("#unidade29grammar73").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade29grammar73 input[type="text"]').each(function(index){
                if(($('#unidade29grammar73 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade29grammar73 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade29grammar73'), respostas);
            }else{
                enviarAtividade($('#unidade29grammar73'), respostas);
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
                        $('#unidade29grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade29grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade29grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade29grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade29/grammar.blade.php ENDPATH**/ ?>