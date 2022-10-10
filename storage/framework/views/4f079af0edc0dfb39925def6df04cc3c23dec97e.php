
<?php $__env->startSection('titulo','Unit 27 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade27" data-etapa="grammar">
            <h3 class="barlow">UNIT 27</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 27/03_GRAMMAR/GRAMMAR_27.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - ARGUMENTATION (2) – Advice-giving strategies.</h5>

                <table class="espacamento left-align borderedfull">
                    <tr>
                        <td rowspan="4"><h5 class="barlow">Advice – giving Strategies.</h5></td>
                    </tr>
                    <tr>
                        <td><p>Using Commands</p></td>
                    </tr>
                    <tr>
                        <td><p>Suggestions</p></td>
                    </tr>
                    <tr>
                        <td><p>Hypothesis</p></td>
                    </tr>
                </table>

                <p><b>Situation:</b> A friend calls you interested in starting a Channel on Youtube.</p>
                <p>
                    <b>Giving advice using imperatives:</b> The use of imperatives is a common resource. it’s
                    important to mind your tone of voice when using it.
                </p>
                <h5 class="barlow" style="margin-top:16px"><b>Example:</b></h5>
                <p>
                    <b>Decide</b> what your objective is. After that, <b>think about</b> the content you want to
                    share. If possible, <b>have</b> someone to help you with the posting schedule.
                    Giving advice by using suggestions:
                </p>
                <h5 class="barlow" style="margin-top:16px"><b>Example:</b></h5>
                <p><b>Why don’t you</b> start deciding what your objective is.</p>
                <p><b>Don’t you think</b> it could be a nice idea to have someone to help you with the posting schedule?</p>
                <p style="margin-top:32px"><b>Giving advice by raising hypothesis:</b></p>
                <h5 class="barlow" style="margin-top:16px"><b>Example:</b></h5>
                <p>
                    <b>If I were</b> you, <b>I would start</b> by deciding what my objective is.
                    After that, <b>I would get</b> someone to help me with the posting schedule <b>if I could.</b>
                </p>

                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">
                    1 - In groups, create a 3 to 5-line story about the problems from the list. Be prepared to
                    come up with advices to solve each problem.
                </h5>

                <p>- You won’t have internet for one month.</p>
                <p>- Your boss is being very rude with your team at work.</p>
                <p>- You need to have your laptop repaired during 3 days and you have a project to finish.</p>
                <p>- Your cell phone was stolen and you lost all your contacts</p>


                <form id="unidade27grammar689" method="post" style="margin-top:32px">
                    <textarea name="grammar689-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="27">
                    <input type="hidden" name="atividade_id" value="689">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top:16px">2 - Write 5 possible advices to solve the problems.</h5>
                <form id="unidade27grammar690" method="post" style="margin-top:32px">
                    <textarea name="grammar690-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="27">
                    <input type="hidden" name="atividade_id" value="690">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <figure>
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit27/grammar.png')); ?>" alt="almoço em família">
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

    $("#unidade27grammar689").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade27grammar689 textarea').attr("name") + '":"' + $('#unidade27grammar689 textarea').val() + '"}';
        if ($('#unidade27grammar689 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade27grammar689'), respostas);
        } else {
            enviarAtividade($('#unidade27grammar689'), respostas);
        }
    });

    $("#unidade27grammar690").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade27grammar690 textarea').attr("name") + '":"' + $('#unidade27grammar690 textarea').val() + '"}';
        if ($('#unidade27grammar690 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade27grammar690'), respostas);
        } else {
            enviarAtividade($('#unidade27grammar690'), respostas);
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
                    $('#unidade27grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade27grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade27grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade27grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade27grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade27grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade27/grammar.blade.php ENDPATH**/ ?>