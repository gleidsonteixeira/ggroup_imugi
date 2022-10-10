
<?php $__env->startSection('titulo','Unit 2 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade2" data-etapa="grammar">
				<h3 class="barlow">UNIT 2 </h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/apostila3/LESSON 02/03_GRAMMAR/GRAMMAR_02.mp3')); ?>" type="audio/mp3">
				</audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px">A - GIVING GOOD AND BAD NEWS</b></h5>

                <p><b>Giving Good News:</b></p>
                <p style="margin-top:16px;">The good news is …</p>
                <p>The good thing is…</p>
                <p>Here is some great News…</p>
                <p>I’m glad to tell you…</p>
                <p>I’m really thrilled that…</p>
                <p>I am happy to say that …</p>

                <p style="margin-top:32px;"><b>Giving Bad news:</b></p>
                <p style="margin-top:16px;">The bad news is …</p>
                <p>Unfortunately …</p>
                <p>How can I put this…</p>
                <p>I regret to say that…</p>
                <p>I’m sorry to say that…</p>
                <p>I’m afraid that …</p>

                <h5 class="barlow">Information – No plural form.</h5>
                <p>Information is an uncountable noun meaning ‘facts about someone or
                something’. It is often followed by about:</p>

                <p><b>P</b> : Can I help you?</p>
                <p><b>R</b> : Can you give us some <b>information about</b> restaurants in the area, please?</p>
                <p><b>Warning:</b></p>
                <p>We do not use information in the plural form and we do not use it with a/an. We</p>
                <p>use piece or pieces to make information countable:</p>
                <p>– I found a lot of <b>information</b> about Ecuador on the Internet.</p>
                <p>Not: <s>I found a lot of informations about Ecuador</s> …</p>
                <p>– She told me <b>an</b> interesting <b>piece of information</b> about the new manager.</p>
                <p>Not: <s>She told me an interesting information</s>…</p>
                <p>In more formal contexts, information may be followed by on:</p>
                <p>– The report included <b>information on</b> family incomes in 2006.</p>
                <p>– The airline’s website gives <b>information on</b> hand baggage.</p>

                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES:</b></h5>
                <h5 class="barlow">1 -  Pick two of the situations below and create a dialogue according to each case. Use the
                sentences from the Grammar topic.</h5>
                <div class="espacamento">
                    <p>A. Losing a friend’s favorite book.</p>
                    <p>B. Crashing your father’s car.</p>
                    <p>C. Failing your final exam.</p>
                    <p>D. Receiving a scholarship of your favorite course.</p>
                    <p>E. Being invited for Comic.com for free.</p>
                    <p>F. Passing Enem.</p>
                </div>

                <figure class="umterco">
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit2/grammar1.png')); ?>" alt="carro batido">
				</figure>
				<figure class="umterco">
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit2/grammar2.png')); ?>" alt="nota">
                </figure>
                <figure class="umterco">
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit2/grammar3.png')); ?>" alt="personagens">
				</figure>
                <div class="clear"></div>

                <h5 class="barlow espacamento" style="margin-top:16px">Dialogue 1 – Giving Bad news.</h5>
                <form id="unidade2grammar504" method="post">
                    <textarea name="grammar504-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="2">
                    <input type="hidden" name="atividade_id" value="504">
                    <div class="clear"></div>
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow espacamento">Dialogue 2 – Giving good news.</h5>
                <form id="unidade2grammar505" method="post">
                    <textarea name="grammar505-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="2">
                    <input type="hidden" name="atividade_id" value="505">
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

        $("#unidade2grammar504").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade2grammar504 textarea').attr("name")+'":"'+$('#unidade2grammar504 textarea').val()+'"}';
            if($('#unidade2grammar504 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2grammar504'), respostas);
            }else{
                enviarAtividade($('#unidade2grammar504'), respostas);
            }
        });
        $("#unidade2grammar505").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade2grammar505 textarea').attr("name")+'":"'+$('#unidade2grammar505 textarea').val()+'"}';
            if($('#unidade2grammar505 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2grammar505'), respostas);
            }else{
                enviarAtividade($('#unidade2grammar505'), respostas);
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
                        $('#unidade2grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade2grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);

                }
                    $('#unidade2grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade2grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade2/grammar.blade.php ENDPATH**/ ?>