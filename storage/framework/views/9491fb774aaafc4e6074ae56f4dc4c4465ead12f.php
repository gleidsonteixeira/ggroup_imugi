
<?php $__env->startSection('titulo','Unit 18 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade17" data-etapa="grammar">
            <h3 class="barlow">UNIT 17</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 17/3. GRAMMAR/GRAMMAR.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A - PAST CONTINUOUS</h5>
            <p><b>Past continuous</b> is used to express <b>actions in progress during a certain period of time in the past</b></p>
            <p class="bordaVerde">Past Continuous = Subject + was / were + verb(ing)</p>
            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">Subject</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Was/were</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Verb</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Action in progress</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Akira</p>
                    </td>
                    <td>
                        <p>Was</p>
                    </td>
                    <td>
                        <p>Share</p>
                    </td>
                    <td>
                        <p><b>Akira was sharing</b> some stories about Kris Costa.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>I</p>
                    </td>
                    <td>
                        <p>Was</p>
                    </td>
                    <td>
                        <p>Cross</p>
                    </td>
                    <td>
                        <p><b>I was crossing</b> the bridge when a car hit me.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>They</p>
                    </td>
                    <td>
                        <p>were</p>
                    </td>
                    <td>
                        <p>talk</p>
                    </td>
                    <td>
                        <p><b>They were talking</b> about the new software.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>She</p>
                    </td>
                    <td>
                        <p>Was</p>
                    </td>
                    <td>
                        <p>do</p>
                    </td>
                    <td>
                        <p><b>She was doing</b> well when she arrived.</p>
                    </td>
                </tr>
            </table>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">B - YES/NO QUESTION – WH-QUESTIONS</h5>
            <table class="metade center-align">
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Yes/no Questions</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Was Laura editing</b> a new video?</p>
                    </td>
                    <td>
                        <p><b>Yes, Laura was editing</b> a new video./ <b>Yes, She is.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Were you Listening to</b> what I said?</p>
                    </td>
                    <td>
                        <p><b>No, I was not listening</b> to you./ <b>No, I Was not.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Were they studying</b> the project?</p>
                    </td>
                    <td>
                        <p><b>Yes, they were studying</b> the project./ <b>Yes, were.</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Wh-Questions</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>What were you doing </b>there?</p>
                    </td>
                    <td>
                        <p><b>I was trying</b> to learn new techniques.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Why were you feeling</b> bad?</p>
                    </td>
                    <td>
                        <p><b>Because i didn't finish</b> the project in time.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Where was he living</b> last year?</p>
                    </td>
                    <td>
                        <p><b>He was living</b> in London.</p>
                    </td>
                </tr>
            </table>

            <h5 class="barlow"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Fill in the blanks with a correct form of PAST CONTINUOUS:</h5>
            <form id="unidade17grammar173" method="post">
                <p>1. It was very cold. The sun <input type="text" placeholder="Responda aqui" name="grammar173-1" required> was not shining. <input type="text" placeholder="Responda aqui" name="grammar173-2" required> (not / shine)</p>
                <p>2. It wasn’t a stormy night. The wind <input type="text" placeholder="Responda aqui" name="grammar173-3" required> (not / blow)</p>
                <p>3. He wasn’t sleeping. He <input type="text" placeholder="Responda aqui" name="grammar173-4" required> (look) at the ceiling.</p>
                <p>4. They were having a rest. They <input type="text" placeholder="Responda aqui" name="grammar173-5" required> (not / work).</p>
                <p>5. They were very happy. They <input type="text" placeholder="Responda aqui" name="grammar173-6" required> (enjoy) the party.</p>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="17">
                <input type="hidden" name="atividade_id" value="173">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - Write the sentences above in the negative and interrogative.</h5>
            <form id="unidade17grammar174" method="post" class="metade">
                <p>1. <input type="text" placeholder="Responda aqui" name="grammar174-1" class="full left-align" required></p>
                <p>2. <input type="text" placeholder="Responda aqui" name="grammar174-2" class="full left-align" required></p>
                <p>3. <input type="text" placeholder="Responda aqui" name="grammar174-3" class="full left-align" required></p>
                <p>4. <input type="text" placeholder="Responda aqui" name="grammar174-4" class="full left-align" required></p>
                <p>5. <input type="text" placeholder="Responda aqui" name="grammar174-5" class="full left-align" required></p>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="17">
                <input type="hidden" name="atividade_id" value="174">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">3 - Your teacher is going to give a piece of paper with a verb and a time expression.
                With the time expression, you are going to create a question to a classmate. With the
                verb , you are going to answer what a classmate is gonna ask you.</h5>

            <form id="unidade17grammar175" method="post" class="metade">
                <textarea class="full left-align" name="grammar175-1" required></textarea>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="17">
                <input type="hidden" name="atividade_id" value="175">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div class="quadradoVerdeGrande center-align" style="margin-top:32px">
                <p><b>What</b></p>
                <p><b>Where</b></p>
                <p><b>Why</b></p>
                <p><b>How</b></p>
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

    $("#unidade17grammar173").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade17grammar173 input[type="text"]').each(function(index) {
            if (($('#unidade17grammar173 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade17grammar173 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade17grammar173'), respostas);
        } else {
            enviarAtividade($('#unidade17grammar173'), respostas);
        }
    });
    $("#unidade17grammar174").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade17grammar174 input[type="text"]').each(function(index) {
            if (($('#unidade17grammar174 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade17grammar174 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade17grammar174'), respostas);
        } else {
            enviarAtividade($('#unidade17grammar174'), respostas);
        }
    });

    $("#unidade17grammar175").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade17grammar175 textarea').attr("name") + '":"' + $('#unidade17grammar175 textarea').val() + '"}';
        if ($('#unidade17grammar175 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade17grammar175'), respostas);
        } else {
            enviarAtividade($('#unidade17grammar175'), respostas);
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
                    $('#unidade17grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade17grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade17grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade17grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade17grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade17grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade17/grammar.blade.php ENDPATH**/ ?>