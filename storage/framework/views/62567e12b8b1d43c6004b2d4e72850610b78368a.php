
<?php $__env->startSection('titulo','Unit 47 | Understanding'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade47" data-etapa="understanding">
            <h3 class="barlow">UNIT 47</h3>
            <h5 class="barlow">6 - UNDERSTANDING</h5>
            <div class="metade">
                <form id="unidade47understanding331" method="post">
                    <p>
                        1. What ‘s John’s opinions about the strategies ?<br>
                        <input type="text" name="understanding331-1" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        2. What does John recommend to do at first ?<br>
                        <input type="text" name="understanding331-2" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        3. What did Akira forget to consider ?<br>
                        <input type="text" name="understanding331-3" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        4. What does Laura feel comfortable about ?<br>
                        <input type="text" name="understanding331-4" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        5. What’s their final decision ?<br>
                        <input type="text" name="understanding331-5" placeholder="Responda aqui" class="full left-align" required>
                    </p>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="47">
                    <input type="hidden" name="atividade_id" value="331">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade47understanding331").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade47understanding331 input[type="text"]').each(function(index) {
            if (($('#unidade47understanding331 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade47understanding331 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade47understanding331'), respostas);
        } else {
            enviarAtividade($('#unidade47understanding331'), respostas);
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
                    $('#unidade47understanding' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade47understanding' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade47understanding' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade47understanding' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade47/understanding.blade.php ENDPATH**/ ?>