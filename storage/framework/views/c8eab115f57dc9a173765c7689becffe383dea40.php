
<?php $__env->startSection('titulo','Unit 64 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade64" data-etapa="grammar">
            <h3 class="barlow">UNIT 64</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/Unit6/Grammar/completo.ogg')); ?>" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - Fill in the correct tenses of the words given .</h5>
                <form id="unidade64grammar416" method="post">
                    <p>
                        <p>
                            I <input type="text" name="grammar416-1" placeholder="Responda aqui" required /> (be born) in Blackburn , in the northwestern part of England
                            and I <input type="text" name="grammar416-2" placeholder="Responda aqui" required />(live) there until I <input type="text" name="grammar416-1" placeholder="Responda aqui" required /> (leave)
                            home at the age of 18. My parents <input type="text" name="grammar416-3" placeholder="Responda aqui" required /> (move) to England from
                            India in the 1970s.
                        </p>
                        <p>
                            As a child I <input type="text" name="grammar416-4" placeholder="Responda aqui" required /> (go) to the local school and , of course,
                            <input type="text" name="grammar416-5" placeholder="Responda aqui" required /> (speak)English with a local accent, just like all the other children. But at home it was very different. We
                            <input type="text" name="grammar416-6" placeholder="Responda aqui" required /> (live)in an Indian
                            environment , with a great extended family of uncles and aunts. I <input type="text" name="grammar416-7" placeholder="Responda aqui" required />
                            (remember)feeling part of this big thing called “family”, and an even bigger thing called
                            “India” . I think my family really <input type="text" name="grammar416-8" placeholder="Responda aqui" required /> (influence)me a lot while I
                            <input type="text" name="grammar416-9" placeholder="Responda aqui" required /> (grow) up.
                        </p>
                        <p>
                            They often talked about India as “our home” - even though I <input type="text" name="grammar416-10" placeholder="Responda aqui" required />
                            (never/be) there before. To me, it <input type="text" name="grammar416-11" placeholder="Responda aqui" required /> (seem) at all strange to
                            grow up as part of two cultures. I <input type="text" name="grammar416-12" placeholder="Responda aqui" required /> (think) that growing up in
                            two cultures is a kind of gift, not a disadvantage. Now that I <input type="text" name="grammar416-13" placeholder="Responda aqui" required />
                            (have) a child of my own , I want her to get in touch with her Indian roots too, so we
                            <input type="text" name="grammar416-14" placeholder="Responda aqui" required /> (plan) a visit to India later this year. All her Indian cousins and relatives
                            <input type="text" name="grammar416-15" placeholder="Responda aqui" required /> (look) forward to meeting her.
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="64">
                    <input type="hidden" name="atividade_id" value="416">
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

    $("#unidade64grammar416").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade64grammar416 input[type="text"]').each(function(index) {
            if (($('#unidade64grammar416 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade64grammar416 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade64grammar416'), respostas);
        } else {
            enviarAtividade($('#unidade64grammar416'), respostas);
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
                    $('#unidade64grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade64grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade64grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade64grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade64/grammar.blade.php ENDPATH**/ ?>