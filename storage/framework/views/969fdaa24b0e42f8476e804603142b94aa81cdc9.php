
<?php $__env->startSection('titulo','Unit 20 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade20" data-etapa="grammar">
            <h3 class="barlow">UNIT 20</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/Unit6/Grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A - SIMPLE PRESENT X SIMPLE PAST</h5>
            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">Simple Present ( Facts / Repeated action)</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Future (Will / Going to/Present cont.)</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Gleen <b>works</b> as a teacher.<p>
                    </td>
                    <td>
                        <p><b>I’ll search</b> for some new images for the blog.<p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Akira and John <b>love</b> Comic books.<p>
                    </td>
                    <td>
                        <p><b>We’re gonna take</b> the pictures next week.<p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>“Back to the future” <b>is</b> a famous old movie.<p>
                    </td>
                    <td>
                        <p><b>We’re closing</b> the magazine in 10 days.<p>
                    </td>
                </tr>
            </table>

            <h5 class="barlow" style="margin-top:16px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Think of your life now and 10 years from now. Write about it using present and future
                tenses. Be ready to present to your classmates.</h5>
            <form id="unidade20grammar186" method="post" class="metade">
                <textarea class="full" name="grammar186-1" placeholder="Responda aqui" required></textarea>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="20">
                <input type="hidden" name="atividade_id" value="186">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">2 - Give your opinion about one of the next movie releases for the next months. Justify
                your answer using future tenses.</h5>
            <form id="unidade20grammar187" method="post" class="metade">
                <p><textarea class="full" name="grammar187-1" placeholder="Responda aqui" required></textarea></p>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="20">
                <input type="hidden" name="atividade_id" value="187">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
                <img src="<?php echo e(asset('assets/img/dominating/unit20/grammar.jpg')); ?>" alt="Garotos festejando">
            </figure>
            <div class="clear"></div>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade20grammar186").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade20grammar186 textarea').attr("name") + '":"' + $('#unidade20grammar186 textarea').val() + '"}';
        if ($('#unidade20grammar186 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade20grammar186'), respostas);
        } else {
            enviarAtividade($('#unidade20grammar186'), respostas);
        }
    });

    $("#unidade20grammar187").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade20grammar187 textarea').attr("name") + '":"' + $('#unidade20grammar187 textarea').val() + '"}';
        if ($('#unidade20grammar187 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade20grammar187'), respostas);
        } else {
            enviarAtividade($('#unidade20grammar187'), respostas);
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
                    $('#unidade20grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade20grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade20grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade20grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade20grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade20grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);

            }
        });
    }

    function enviarAtividade(formId, respostas) {
        var resposta = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_respostas": respostas,
            "atividade_id": formId.find('input[name="atividade_id"]').val(),
            "unidade_id": formId.find('input[name="unidade_id"]').val()
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade20/grammar.blade.php ENDPATH**/ ?>