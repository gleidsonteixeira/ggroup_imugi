
<?php $__env->startSection('titulo','Unit 27 | Listening'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade27" data-etapa="listening">
            <h3 class="barlow">UNIT 27</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 27/06_LISTENING/LISTENING_27.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A -  Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade27listening691" method="post">
                <p>
                    People are <input type="text" name="listening691-1" placeholder="Responda aqui" required /> much more
                    <input type="text" name="listening691-2" placeholder="Responda aqui" required />after the
                    <input type="text" name="listening691-3" placeholder="Responda aqui" required />of social media. It’s very
                    common to see people from different <input type="text" name="listening691-4" placeholder="Responda aqui" required />
                    sharing ideas or just being friends. In the past, our relationships were
                    <input type="text" name="listening691-5" placeholder="Responda aqui" required />to geographic
                    <input type="text" name="listening691-6" placeholder="Responda aqui" required />. Although we may
                    have friends who live far from us, the
                    <input type="text" name="listening691-7" placeholder="Responda aqui" required />today is about the superficiality of our
                    relationships. Are we
                    <input type="text" name="listening691-8" placeholder="Responda aqui" required /> able to
                    <input type="text" name="listening691-9" placeholder="Responda aqui" required /> solid relationships in the
                    <input type="text" name="listening691-10" placeholder="Responda aqui" required /> era?
                </p>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="27">
                <input type="hidden" name="atividade_id" value="691">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
        </div>
    </div>
</main>
<script>
    activeMenu();
    console.log(window.location.pathname);

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade27listening691").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade27listening691 input[type="text"]').each(function(index) {
            if (($('#unidade27listening691 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade27listening691 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade27listening691'), respostas);
        } else {
            enviarAtividade($('#unidade27listening691'), respostas);
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
                    $('#unidade27listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade27listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade27listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade27listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade27/listening.blade.php ENDPATH**/ ?>