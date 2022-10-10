
<?php $__env->startSection('titulo','Unit 12 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade12" data-etapa="grammar">
            <h3 class="barlow">UNIT 12 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 12/03_GRAMMAR/GRAMMAR_12.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A –  CONDITIONALS - REVIEW</h5>
            <p>We use conditional sentences to express <b>Hypothesis, Conditions, Uncertain Events or
            Situations.</b></p>
            <table class="espacamento left-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow center-align">Conditionals</h5></td>
                    <td><h5 class="barlow center-align">Examples</h5></td>
                </tr>
                <tr class="bordered">
                    <td>
                    <p><b>Zero Conditional</b></p>
                    <p>If + Simple present + simple present</p>
                    </td>
                    <td><p><b>If you click</b> on this icon, <b>you activate</b> the tool.</p></td>
                </tr>
                <tr class="bordered">
                    <td>
                    <p><b>First Conditional</b></p>
                    <p>If + Simple present + Will</p>
                    </td>
                    <td><p><b>If she finishes</b> the report in time, <b>she’ll send</b> it to him.</p></td>
                </tr>
                <tr class="bordered">
                    <td>
                    <p><b>Second Conditional</b></p>
                    <p>If + Simple past + Would</p>
                    </td>
                    <td><p><b>If she finished</b> the report in time, <b>She would send</b> it to him.</p></td>
                </tr>
                <tr class="bordered">
                    <td>
                    <p><b>Third Conditional</b></p>
                    <p>If + Past Perfect + Would + Perfect</p>
                    </td>
                    <td><p><b>If she had finished</b> the report in time, <b>she would have sent</b> it to him..</p></td>
                </tr>
            </table>
            <h5 class="barlow" style="margin-top:32px"><b>EXERCICES</b></h5>
            <h5 class="barlow">1 -  Finish these sentences:</h5>
            <form id="unidade12grammar567" method="post">
                <p>1. If you drive very fast,
                <input type="text" name="grammar567-1" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>2. Would you give me some money if
                <input type="text" name="grammar567-2" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>3. If she were my sister,
                <input type="text" name="grammar567-3" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>4. I would have spent every winter in Miami if
                <input type="text" name="grammar567-4" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>5. If they have time tomorrow,
                <input type="text" name="grammar567-5" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>6. Don’t give him anything if
                <input type="text" name="grammar567-6" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>7. We would go to the cinema if
                <input type="text" name="grammar567-7" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>8. If John had worked harder,
                <input type="text" name="grammar567-8" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>9. They would fi nd me if
                <input type="text" name="grammar567-9" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>10. If I had a lot of money,
                <input type="text" name="grammar567-10" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>11. You could have lived more comfortably if
                <input type="text" name="grammar567-11" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>12. If she were a good girl,
                <input type="text" name="grammar567-12" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>13. If she goes to his office,
                <input type="text" name="grammar567-13" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>14. She would enjoy the party if
                <input type="text" name="grammar567-14" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p>15. If I weren’t busy,
                <input type="text" name="grammar567-15" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="12">
                <input type="hidden" name="atividade_id" value="567">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - Think about your life and write some things you would do differently.</h5>
            <h5 class="barlow">Example:</h5>
            <p><b>If I had</b> more time, <b>I would take</b> another course.</p>
            <p><b>I’ll travel</b> to Rio <b>if I find</b> a cheaper ticket.</p>
            <p><b>If I had studied</b> English before, <b>I would have visited</b> more sites about movie
            editing.</p>
            <form id="unidade12grammar568" method="post">
                <textarea name="grammar564-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="12">
                <input type="hidden" name="atividade_id" value="568">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

        $("#unidade12grammar567").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade12grammar567 input[type="text"]').each(function(index){
                if(($('#unidade12grammar567 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade12grammar567 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade12grammar567'), respostas);
            }else{
                enviarAtividade($('#unidade12grammar567'), respostas);
            }
        });

        $("#unidade12grammar568").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade12grammar568 textarea').attr("name")+'":"'+$('#unidade12grammar568 textarea').val()+'"}';
            if($('#unidade12grammar568 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade12grammar568'), respostas);
            }else{
                enviarAtividade($('#unidade12grammar568'), respostas);
            }
        });

    function checkAtividade(atividade_id) {
        request = $.ajax({
            url: window.location.pathname + '/respostasCheck/' + atividade_id,
            type: 'get',
            error: function() {
                console.log("Erro de retorno de dados.");
            }
        });
        request.done(function(response) {
            if (response == 0) {
                console.log("não veio nada");
            } else {
                var objeto = JSON.parse(response[0].resposta_respostas);
                var chaves = Object.keys(objeto);
                var respostas = Object.values(objeto);
                for (j = 0; j < respostas.length; j++) {
                    $('#unidade12grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade12grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade12grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade12grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade12grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade12grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
            }
        });
    }

    function enviarAtividade(formId, respostas) {
        var atividade = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_respostas": respostas,
            "atividade_id": formId.find('input[name="atividade_id"]').val(),
            "unidade_id": formId.find('input[name="unidade_id"]').val()
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: atividade,
            type: 'post',
            error: function() {
                console.log("Erro de envio.");
            }
        });
        request.done(function(response) {
            if (response == "1") {
                alert("Respostas salvas");
                window.location.reload();
            } else if (response == 2) {
                alert("Respostas atualizadas");
                window.location.reload();
            }
        });
    }

    function atualizarAtividade(formId, respostas) {
        var resposta = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_id": formId.find('input[name="resposta_id"]').val(),
            "resposta_respostas": respostas
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: resposta,
            type: 'post',
            error: function() {
                console.log("Erro de envio.");
            }
        });
        request.done(function(response) {
            if (response == "1") {
                alert("Respostas salvas");
                window.location.reload();
            } else if (response == 2) {
                alert("Respostas atualizadas");
                window.location.reload();
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade12/grammar.blade.php ENDPATH**/ ?>