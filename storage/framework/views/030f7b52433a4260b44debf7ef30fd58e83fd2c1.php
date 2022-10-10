
<?php $__env->startSection('titulo','Unit 19 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade19" data-etapa="grammar">
            <h3 class="barlow">UNIT 19</h3>
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
                        <h5 class="barlow">Simple Present (Facts / repeated action )</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Simple Past (isolated action in the past)</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>I like</b> to study about the movie production.<p>
                    </td>
                    <td>
                        <p>One month ago <b>I was AT </b> Japan for a Java course.<p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Marvel releases</b> a new movie every year.<p>
                    </td>
                    <td>
                        <p>Last week <b>we visited</b> universal studios.<p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Glen reads </b>everything about the movies.<p>
                    </td>
                    <td>
                        <p><b>Laura spent</b> hours to finish her presentation.<p>
                    </td>
                </tr>
            </table>

            <h5 class="barlow" style="margin-top:16px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Compare your life of 3 years ago with your life now. Be ready to present your text to
                your classmates. They may ask you questions about it.</h5>
            <form id="unidade19grammar182" method="post" class="metade">
                <textarea class="full left-align" name="grammar182-1" placeholder="Responda aqui" required></textarea>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="19">
                <input type="hidden" name="atividade_id" value="182">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - In groups of 3 or 4 Create a narration about an imaginary character narrating his past
                and present life. Be ready to answer questions to this person. Additionally, think of questions to ask to your friends to find
                out information about their characters.</h5>
            <form id="unidade19grammar183" method="post" class="metade">
                <textarea class="full" name="grammar183-1" placeholder="Responda aqui" required></textarea>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="19">
                <input type="hidden" name="atividade_id" value="183">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="metade esquerda">
                <img src="<?php echo e(asset('assets/img/dominating/unit19/grammar1.png')); ?>" alt="Garotos festejando">
            </figure>
            <figure class="metade direita">
                <img src="<?php echo e(asset('assets/img/dominating/unit19/grammar2.png')); ?>" alt="Garotos festejando">
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

    $("#unidade19grammar182").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade19grammar182 textarea').attr("name") + '":"' + $('#unidade19grammar182 textarea').val() + '"}';
        if ($('#unidade19grammar182 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade19grammar182'), respostas);
        } else {
            enviarAtividade($('#unidade19grammar182'), respostas);
        }
    });

    $("#unidade19grammar183").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade19grammar183 textarea').attr("name") + '":"' + $('#unidade19grammar183 textarea').val() + '"}';
        if ($('#unidade19grammar183 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade19grammar183'), respostas);
        } else {
            enviarAtividade($('#unidade19grammar183'), respostas);
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
                    $('#unidade19grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade19grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade19grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade19grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade19grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade19grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);

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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade19/grammar.blade.php ENDPATH**/ ?>