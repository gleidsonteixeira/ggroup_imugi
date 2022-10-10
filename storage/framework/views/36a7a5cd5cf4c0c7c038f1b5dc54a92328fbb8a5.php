
<?php $__env->startSection('titulo','Unit 06 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade6" data-etapa="grammar">
            <h3 class="barlow">UNIT 6 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 06/03_GRAMMAR/GRAMMAR_06.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A – EXPLAINING PROCEDURES: REVIEW</h5>
            <p><b>Pay attention to the “Explaining Procedures” sequence:</b></p>
            <p style="margin-top:16px">a. Organize instructions in a Sequence.</p>
            <p>b. Remind of important steps</p>
            <p>c. Ask for clarification</p>
            <p>d. Add further information</p>
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow"></h5></td>
                    <td><h5 class="barlow">Explaining Procedures – Structure</h5></td>
                    <td><h5 class="barlow"></h5></td>
                </tr>

                <tr class="bordered center-align">
                    <td><p><b>Organizing a Sequence</b></p> <p>“Explain the sequence of the events”</p></td>
                    <td><p><b>Reminders</b></p> <p>“draw the listener’s attention to important steps that can’t be skipped”</p></td>
                    <td><p><b>Adding further Information</b></p> <p>“Clarify steps if necessary”</p></td>
                </tr>
                <tr class="bordered center-align">
                    <td>
                        <p>First, Second, Third…</p>
                        <p>Right After</p>
                        <p>After that</p>
                        <p>Then</p>
                        <p>Start with…</p>
                        <p>Finish by…</p>
                    </td>
                    <td>
                        <p>Make sure you…</p>
                        <p>Don’t forget to…</p>
                        <p>Remember to…</p>
                        <p>Bear in mind that…</p>
                        <p>Keep in mind that…</p>
                        <p>It’s important to…</p>
                    </td>
                    <td>
                        <p>You should…</p>
                        <p>You must…</p>
                        <p>You are supposed to…</p>
                        <p>You have to…</p>
                    </td>
                </tr>
            </table>
            <h5 class="barlow" style="margin-top:32px"><b>EXERCICES</b></h5>
            <h5 class="barlow">1 - Pick one of the pieces of paper from a plastic bag and follow the instructions. Based on
            the explanation of the procedure, you have to find out what the procedure is. In order to
            check the possible outcomes, be prepared to make yes/no questions.</h5>
            <form id="unidade6grammar525" method="post">
                <textarea name="grammar525-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="6">
                <input type="hidden" name="atividade_id" value="525">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - Brainstorm about serious issues and have a quick debate on the topic. Organize your
            ideas in a piece of paper and be prepared to interact with your colleagues using the target
            language from the grammar box.</h5>
            <form id="unidade6grammar526" method="post">
                <textarea name="grammar526-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="6">
                <input type="hidden" name="atividade_id" value="526">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="metade esquerda">
                <img src="<?php echo e(asset('assets/img/masteroflanguage/unit6/grammar1.png')); ?>" alt="foto masculina">
            </figure>
            <figure class="metade direita">
                <img src="<?php echo e(asset('assets/img/masteroflanguage/unit6/grammar2.png')); ?>" alt="foto feminina">
            </figure>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade6grammar525").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade6grammar525 textarea').attr("name") + '":"' + $('#unidade6grammar525 textarea').val() + '"}';
        if ($('#unidade6grammar525 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade6grammar525'), respostas);
        } else {
            enviarAtividade($('#unidade6grammar525'), respostas);
        }
    });
    $("#unidade6grammar526").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade6grammar526 textarea').attr("name") + '":"' + $('#unidade6grammar526 textarea').val() + '"}';
        if ($('#unidade6grammar526 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade6grammar526'), respostas);
        } else {
            enviarAtividade($('#unidade6grammar526'), respostas);
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
                    $('#unidade6grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade6grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade6grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade6grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade6grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade6grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade6/grammar.blade.php ENDPATH**/ ?>