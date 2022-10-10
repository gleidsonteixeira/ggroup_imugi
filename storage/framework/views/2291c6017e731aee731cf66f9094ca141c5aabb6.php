
<?php $__env->startSection('titulo','Unit 26 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade26" data-etapa="grammar">
            <h3 class="barlow">UNIT 26</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 26/03_GRAMMAR/GRAMMAR_26.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - ARGUMENTATIVE STRATEGIES (1)</h5>
                <table class="espacamento left-align borderedfull">
                    <tr>
                        <td rowspan="5"><h5 class="barlow">Argumentation</h5></td>
                    </tr>
                    <tr>
                        <td><p>Based in research, analysis and critical view on the topic.</p></td>
                    </tr>
                    <tr>
                        <td><p>Not only exposes the topic but also the writer’s point of view</p></td>
                    </tr>
                    <tr>
                        <td><p>The Writer or speaker defends the point of view using data as support</p></td>
                    </tr>
                    <tr>
                        <td><p>Usually Written in the third person.</p></td>
                    </tr>
                </table>

                <p style="margin-top:32px"><b>Argumentation Essay in Spoken Language</b></p>

                <div class="lista-vertical bordaVerde">
                    <li><p>• The conversation must be complete: Beginning, middle and end.</p></li>
                    <li><p>• The conversation only ends once the arguments is based on evidence.</p></li>
                    <li>
                        <p>
                            • If the strategies and steps aren’t followed, probably there will be questions to
                            gather extra information and then the audience will reach a conclusion.
                        </p>
                    </li>
                </div>

                <h5 class="barlow" style="margin-top:32px"><b>Example of technique to expose data and support opinion convincingly.</b></h5>
                <p><b>Analyzing Pros and Cons.</b></p>

                <p>
                    Taking into consideration positive and negative aspects helps make a reasonable
                    analysis in your speech or text. They will also help you reach a conclusion, so you can
                    structure your text like this:
                </p>
                <p style="margin-top:16px">Paragraph 1 – Introduction</p>
                <p>Paragraph 2 – Positive aspects</p>
                <p>Paragraph 3 – negative aspects</p>
                <p>Paragraph 4 – Evaluation of both positive and negative aspects.</p>
                <p>Paragraph 5 – Conclusion </p>

                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">
                    1 - Research about the rise of mobile technology and its use by children and teenagers.
                    Prepare a presentation about the pros and cons of extended exposure to internet
                    content. In groups, write a 5 to 10- line text following the structure presented in the
                    class.
                </h5>
                <form id="unidade26grammar685" method="post" style="margin-top:32px">
                    <textarea name="grammar685-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="26">
                    <input type="hidden" name="atividade_id" value="685">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top:16px">
                    2 - Debate about the use of cell phones. Your teacher will group you in two teams. One will
                    be in favor and the other will be against the use of cell phones by children and teens.
                    Be ready to support your point of view.
                </h5>
                <form id="unidade26grammar686" method="post" style="margin-top:32px">
                    <textarea name="grammar686-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="26">
                    <input type="hidden" name="atividade_id" value="686">
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

    $("#unidade26grammar685").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade26grammar685 textarea').attr("name") + '":"' + $('#unidade26grammar685 textarea').val() + '"}';
        if ($('#unidade26grammar685 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade26grammar685'), respostas);
        } else {
            enviarAtividade($('#unidade26grammar685'), respostas);
        }
    });

    $("#unidade26grammar686").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade26grammar686 textarea').attr("name") + '":"' + $('#unidade26grammar686 textarea').val() + '"}';
        if ($('#unidade26grammar686 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade26grammar686'), respostas);
        } else {
            enviarAtividade($('#unidade26grammar686'), respostas);
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
                    $('#unidade26grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade26grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade26grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade26grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade26grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade26grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade26/grammar.blade.php ENDPATH**/ ?>