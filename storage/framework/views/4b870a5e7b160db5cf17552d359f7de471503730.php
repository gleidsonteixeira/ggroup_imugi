
<?php $__env->startSection('titulo','Unit 1 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade1" data-etapa="grammar">
				<h3 class="barlow">UNIT 1 </h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/apostila3/LESSON 01/03_GRAMMAR/GRAMMAR_01.mp3')); ?>" type="audio/mp3">
				</audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px">A - BASIC REPORTING SENTENCES</h5>
                <p>Sentences used to report a story or to retell a story.</p>
                <p>When retelling a story we usually use the verbs <b>Say (something), Tell (a story),</b> and
                <b>ask (a question or favor)</b></p>

                <h5 class="barlow" style="margin-top:16px"><b>Examples:</b></h5>
                <p><b>Paul said that</b> he’s gonna start a new Youtube channel.</p>
                <p><b>Mary told me</b> she loved the live she had with her followers.</p>
                <p><b>I asked her</b> if she used FaceTime, Google or Instagram to run the live.</p>
                <p><b>She said that</b> Instagram is better, although the videos are stored for just 24 hours.</p>
                <p><b>Paul told me</b> he had a lot of insights during the live.</p>
                <p><b>He asked me</b> why I didn’t participate.</p>

                <p><b>News – No plural form.</b></p>
                <p>We use the uncountable noun news to mean ‘information or reports about recent events’.
                It takes a singular verb:</p>

                <p>– The <b>news</b> is good about Mary. The doctors are very happy about her progress.</p>
                <p> Not: <s>The news are good about Mary.</s></p>
                <p>– Do you have <b>any news</b> of your sister? How is she these days?</p>
                <p>– I’ve got <b>some news</b> for you – I’m getting married!</p>
                <p> Not: <s>I’ve got a news for you</s> …</p>

                <p>If we want to talk about news as an individual thing, we can use bit of,
                piece of or item of (more formal):</p>

                <p>– I heard a couple of interesting <b>pieces of news</b> the other day about the company’s
                plans for expansion.</p>
                <p>– An <b>item of news</b> caught her eye in the newspaper. It was about a child who was
                missing.</p>
                <p>We say the news when we refer to the television or radio programme that gives
                reports of recent events:</p>
                <p>– I always watch <b>the news</b> on CNN before I go to bed.</p>

                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES:</b></h5>
                <h5 class="barlow">1 - Think of a fact, a movie scene or a story that was interesting for you and prepare a narrative
                using “Say, Tell and Ask”. Be prepared to report the story to the class. (minimum 10 lines). </h5>

                <form id="unidade1grammar500" method="post">
                    <textarea name="grammar500-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="500">
                    <div class="clear"></div>
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="<?php echo e(asset('assets/img/masteroflanguage/unit1/grammar.png')); ?>" alt="marvel">
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

        $("#unidade1grammar500").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade1grammar500 textarea').attr("name")+'":"'+$('#unidade1grammar500 textarea').val()+'"}';
            if($('#unidade1grammar500 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar500'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar500'), respostas);
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
                        $('#unidade1grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade1grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade1grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade1grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);

                }
                    $('#unidade1grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade1grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade1/grammar.blade.php ENDPATH**/ ?>