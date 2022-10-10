
<?php $__env->startSection('titulo','Unit 23 | Listening'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade23" data-etapa="listening">
            <h3 class="barlow">UNIT 23</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 23/5. LISTENING/LISTENING.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top:16px">A – Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade23listening206" method="post">
                <p><input type="text" name="listening206-1" placeholder="Responda aqui" required>can you do? I can direct
                    <input type="text" name="listening206-2" placeholder="Responda aqui" required>. What else can you do?
                    <input type="text" name="listening206-3" placeholder="Responda aqui" required> use my brain, I can play bridge. What else can you do? What else can I do?
                    <input type="text" name="listening206-4" placeholder="Responda aqui" required> of things. I can
                    <input type="text" name="listening206-5" placeholder="Responda aqui" required>, I can play a piano. What else can you do? I can sing, I can
                    <input type="text" name="listening206-6" placeholder="Responda aqui" required>, I can act. What else can you do? I can juggle, play the piano. What else can you do? I can do a lot of things? I don’t know. I can
                    <input type="text" name="listening206-7" placeholder="Responda aqui" required>, I can
                    <input type="text" name="listening206-8" placeholder="Responda aqui" required>, I can
                    <input type="text" name="listening206-9" placeholder="Responda aqui" required>
                </p>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="23">
                <input type="hidden" name="atividade_id" value="206">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <iframe style="margin-top:16px" width="480" height="360" src="https://www.youtube.com/embed/_YLgqOONnJM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade23listening206").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade23listening206 input[type="text"]').each(function(index) {
            if (($('#unidade23listening206 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade23listening206 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade23listening206'), respostas);
        } else {
            enviarAtividade($('#unidade23listening206'), respostas);
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
                    $('#unidade23listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade23listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade23listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade23listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
        console.log(resposta);
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade23/listening.blade.php ENDPATH**/ ?>