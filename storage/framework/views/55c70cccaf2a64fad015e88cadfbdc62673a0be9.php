<?php $__env->startSection('titulo','Unit 27 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="grammar">
				<h3 class="barlow">UNIT 27 - PROFESSOR VICTOR</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit27/grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Countables And Uncountables</h5>
                    <p>Some Objects Can Be Counted While Others Cannot. We Use “Many” To Refer To Countable Nouns And “Much” For Uncountable Nouns.</p>
                </div>
                <table class="metade center-align">
                    <tr>
                        <td><h5 class="barlow">Countable Nouns</h5></td>
                        <td><h5 class="barlow">Uncountable Nouns</h5></td>
                    </tr>
                    <tr>
                        <td><p>Cups</p></td>
                        <td><p>Water</p></td>
                    </tr>
                    <tr>
                        <td><p>Hours</p></td>
                        <td><p>Time</p></td>
                    </tr>
                    <tr>
                        <td><p>Books</p></td>
                        <td><p>Information</p></td>
                    </tr>
                    <tr>
                        <td><p>Chairs</p></td>
                        <td><p>Furniture</p></td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences using "Much" or "Many".</h5>
				<form id="unidade27grammar69" method="post">
                    <p>1 - There Is <input type="text" name="grammar69-1" placeholder="Responda aqui" required/> Food On The Plate.</p>
                    <p>2 - We Have <input type="text" name="grammar69-2" placeholder="Responda aqui" required/> Information About The Program.</p>
                    <p>3 - I Work For <input type="text" name="grammar69-3" placeholder="Responda aqui" required/>  Hours A Day.</p>
                    <p>4 - You Need To Drink <input type="text" name="grammar69-4" placeholder="Responda aqui" required/> Glasses Of Water Every Day.</p>
                    <p>5 - He Has <input type="text" name="grammar69-5" placeholder="Responda aqui" required/> Work To Don.</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="27">
                    <input type="hidden" name="atividade_id" value="69">
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

        $("#unidade27grammar69").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade27grammar69 input[type="text"]').each(function(index){
                if(($('#unidade27grammar69 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade27grammar69 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade27grammar69'), respostas);
            }else{
                enviarAtividade($('#unidade27grammar69'), respostas);
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
                        $('#unidade27grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade27grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade27grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade27grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade27/grammar.blade.php ENDPATH**/ ?>