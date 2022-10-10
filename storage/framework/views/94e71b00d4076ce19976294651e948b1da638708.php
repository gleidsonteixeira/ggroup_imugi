
<?php $__env->startSection('titulo','Unit 16 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade16" data-etapa="grammar">
            <h3 class="barlow">UNIT 16</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 16/03_GRAMMAR/GRAMMAR_16.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top:16px">A - PERFECT FORMS – REVIEW.</h5>
                <p>
                    <b>PERFECT FORMS</b> – Be it in the past, present or future, <b>Perfect forms</b> connect two
                    events or two points in a timeline either by continuity or relevance.
                </p>
                <table class="espacamento left-align bordered" style="margin-top:32px;">
                    <tr>
                        <td><h5 class="barlow">Verb tense</td>
                        <td><h5 class="barlow">Meaning</td>
                        <td><h5 class="barlow">Structure</td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Past Perfect</b></p></td>
                        <td>
                            <p>
                                Connection between two
                                moments in the past expressing
                                a chronological order of the
                                events.
                            </p>
                        </td>
                        <td>
                            <p>(+)Subject + Had + Verb in the Past Participle.</p>
                            <p>(-)Subject + Had + not + Verb in the Past Participle.</p>
                            <p>(?)Had + Subject + Verb in the Past Parti ciple.</p>
                        </td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Past perfect Continuous</b></p></td>
                        <td>
                            <p>
                                Similar to Past perfect but with
                                focus on the progression of the
                                action.
                            </p>
                        </td>
                        <td>
                            <p>(+)Subject + Had been + Verb(ing).</p>
                            <p>(-)Subject + Had been + not + Verb(ing).</p>
                            <p>(?)Had + Subject + been + Verb(ing).</p>
                        </td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Present Perfect </b></p></td>
                        <td>
                            <p>
                                Connection between past and
                                present expressing relevance or
                                continuity.
                            </p>
                        </td>
                        <td>
                            <p>(+)Subject + Have + Verb in the Past Participle.</p>
                            <p>(-)Subject + Have + not + Verb in the Past Participle.</p>
                            <p>(?)Have + Subject + Verb in the Past Participle.</p>
                        </td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Present Perfect Continuous</b></p></td>
                        <td>
                            <p>
                                Similar to Present perfect but
                                with focus on the progression
                                of the action.
                            </p>
                        </td>
                        <td>
                            <p>(+)Subject + Have been + Verb(ing).</p>
                            <p>(-)Subject + Have been + not + Verb(ing).</p>
                            <p>(?)Have + Subject + been + Verb(ing).</p>
                        </td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Future Perfect</b></p></td>
                        <td>
                            <p>
                                Connection between two
                                events in the future showing
                                that first will be finished before
                                a second event.
                            </p>
                        </td>
                        <td>
                            <p>(+)Subject + Will Have + Verb in the Past Participle.</p>
                            <p>(-)Subject + Will Have + not + Verb in the Past Participle.</p>
                            <p>(?)Will + Subject + have + Verb in the Past Participle.</p>
                        </td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Future Perfect Continuous</b></p></td>
                        <td>
                            <p>
                                Similar to Future perfect but
                                with focus on the progression
                                of the action.
                            </p>
                        </td>
                        <td>
                            <p>(+)Subject + will Have been + Verb(ing).</p>
                            <p>(-)Subject + will Have been + not + Verb(ing).</p>
                            <p>(?) Will + Subject + have been + Verb(ing).</p>
                        </td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Use PRESENT PERFECT TENSE or PRESENT PERFECT CONTINUOUS to fi ll in the blanks:</h5>
                <form id="unidade16grammar583" method="post">
                    <p>
                        <p>1. I’ve <input type="radio" name="grammar583-1" value="1" required /> <b>bought</b> / <input type="radio" name="grammar583-1" value="2" required /> <b>have been buying</b> a new pair of shoes.</p>
                        <p>2. <input type="radio" name="grammar583-2" value="1" required /> <b>Have you finished</b> / <input type="radio" name="grammar583-2" value="2" required /><b>Have you been finishing</b> reading that book yet?</p>
                        <p>3. <input type="radio" name="grammar583-3" value="1" required /> <b>They’ve eaten</b> / <input type="radio" name="grammar583-3" value="2" required /> <b>have been eating</b> fruit all afternoon, ever since they came from school.</p>
                        <p>4. <input type="radio" name="grammar583-4" value="1" required /> <b>I’ve been reading</b> / <input type="radio" name="grammar583-4" value="2" required /> <b>have read</b> this book now, so you can have it back.</p>
                        <p>5. <input type="radio" name="grammar583-5" value="1" required /> <b>I’ve been writing</b> / <input type="radio" name="grammar583-5" value="2" required /> <b>have written</b> eight pages already.</p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="583">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">2 - Supply a suitable SIMPLE PAST or PAST PERFECT TENSE:</h5>
                <form id="unidade16grammar584" method="post">
                    <p>
                        <p>They <input type="text" name="grammar584-1" placeholder="Responda aqui" required /> (go) home aft er they <input type="text" name="grammar584-2" placeholder="Responda aqui" required /> (finish) their work.</p>
                        <p>She <input type="text" name="grammar584-3" placeholder="Responda aqui" required /> (just / go) out when I called her.</p>
                        <p>My brother <input type="text" name="grammar584-4" placeholder="Responda aqui" required /> (eat) all the pie before we got back.</p>
                        <p>He wondered why I <input type="text" name="grammar584-5" placeholder="Responda aqui" required /> (not / visit) him before.</p>
                        <p>She said that she <input type="text" name="grammar584-6" placeholder="Responda aqui" required /> (already / see) the Pyramids.</p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="584">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">3 - Supply with an appropriate FUTURE PERFECT TENSE</h5>
                <form id="unidade16grammar585" method="post">
                    <p>Anne <input type="text" name="grammar585-1" placeholder="Responda aqui" required /> her bike next week. <b>(to repair)</b></p>
                    <p><input type="text" name="grammar585-2" placeholder="Responda aqui" required /> the washing by 8 o’clock. <b>(to do)</b></p>
                    <p>She <input type="text" name="grammar585-3" placeholder="Responda aqui" required /> Paris by the end of next year. <b>(to visit)</b></p>
                    <p>I <input type="text" name="grammar585-4" placeholder="Responda aqui" required /> this by 6 o’clock. <b>(to finish)</b></p>
                    <p>Sam <input type="text" name="grammar585-5" placeholder="Responda aqui" required /> by next week. <b>(to leave)</b></p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="585">
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

    $("#unidade16grammar583").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade16grammar583 input[type="radio"]:checked').each(function(index) {
            if (($('#unidade16grammar583 input[type="radio"]:checked').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade16grammar583 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade16grammar583'), respostas);
        } else {
            enviarAtividade($('#unidade16grammar583'), respostas);
        }
    });

    $("#unidade16grammar584").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade16grammar584 input[type="text"]').each(function(index) {
            if (($('#unidade16grammar584 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade16grammar584 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade16grammar584'), respostas);
        } else {
            enviarAtividade($('#unidade16grammar584'), respostas);
        }
    });

    $("#unidade16grammar585").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade16grammar585 input[type="text"]').each(function(index) {
            if (($('#unidade16grammar585 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade16grammar585 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade16grammar585'), respostas);
        } else {
            enviarAtividade($('#unidade16grammar585'), respostas);
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
                    $('#unidade16grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    $('#unidade16grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade16grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade16grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade16grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade16/grammar.blade.php ENDPATH**/ ?>