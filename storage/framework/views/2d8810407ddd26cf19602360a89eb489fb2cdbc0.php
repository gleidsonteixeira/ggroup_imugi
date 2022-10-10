
<?php $__env->startSection('titulo','Unit 5 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade5" data-etapa="grammar">
            <h3 class="barlow">UNIT 5</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 5/3. GRAMMAR/GRAMMAR.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - YES/NO QUESTIONS</h5>

            <table class="metade center-align">
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Verb to Be</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Are you</b> an illustrator?</p>
                    </td>
                    <td>
                        <p><b>Yes, I am</b> an illustrator./ Yes, I am.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Is She</b> in San Diego right now?</p>
                    </td>
                    <td>
                        <p><b>No, She’s not</b> in San Diego. / No, She’s not.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Is it</b> a nice software for videos editing?</p>
                    </td>
                    <td>
                        <p><b>Yes, It’s</b> nice for editing./ Yes, It is.</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Other Verbs</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Do we have</b> class tomorrow?</p>
                    </td>
                    <td>
                        <p><b>Yes, we have</b> class tomorrow./ <b>Yes, we do.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Does he speak</b> Chinese?</p>
                    </td>
                    <td>
                        <p><b>No, he doesn’ts</b> speak Chinese./ <b>No, he doesn’t.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Do the clients need</b> a video?</p>
                    </td>
                    <td>
                        <p><b>Yes, they</b> need a video./ <b>Yes, they do.</b></p>
                    </td>
                </tr>
            </table>

            <h5><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Build up questions and give answers:</h5>
            <h5 class="barlow"><b>Example:</b></h5>
            <p>engineer / William Is William an engineer? Yes, he is an engineer. (+)</p>
            <form id="unidade5grammar123" action="post" style="margin-top:32px">
                <p>1. Good designer / Steve<input type="text" name="grammar123-1" placeholder="Responda aqui" required>?<input type="text" name="grammar123-2" placeholder="Responda aqui" required>(+)</p>
                <p>2. lazy students / Mark and Lucy<input type="text" name="grammar123-3" placeholder="Responda aqui" required>?<input type="text" name="grammar123-4" placeholder="Responda aqui" required>(-)</p>
                <p>3. App / good<input type="text" name="grammar123-5" placeholder="Responda aqui" required>?<input type="text" name="grammar123-6" placeholder="Responda aqui" required>(+)</p>
                <p>4. the class / nice<input type="text" name="grammar123-7" placeholder="Responda aqui" required>?<input type="text" name="grammar123-8" placeholder="Responda aqui" required>(-)</p>
                <p>5. CS go / good game<input type="text" name="grammar123-9" placeholder="Responda aqui" required>?<input type="text" name="grammar123-10" placeholder="Responda aqui" required>(+)</p>
                <p>6. Akira / study Ps<input type="text" name="grammar123-11" placeholder="Responda aqui" required>?<input type="text" name="grammar123-12" placeholder="Responda aqui" required>(-)</p>
                <p>7. Glee / Live in NY<input type="text" name="grammar123-13" placeholder="Responda aqui" required>?<input type="text" name="grammar123-14" placeholder="Responda aqui" required>(+)</p>
                <p>8. You / need help<input type="text" name="grammar123-15" placeholder="Responda aqui" required>?<input type="text" name="grammar123-16" placeholder="Responda aqui" required>(-)</p>
                <p>9. They /go to school<input type="text" name="grammar123-17" placeholder="Responda aqui" required>?<input type="text" name="grammar123-18" placeholder="Responda aqui" required>(+)</p>
                <p>10. You / play BF4<input type="text" name="grammar123-19" placeholder="Responda aqui" required>?<input type="text" name="grammar123-20" placeholder="Responda aqui" required>(-)</p>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="5">
                <input type="hidden" name="atividade_id" value="123">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>


            <h5 class="barlow">2 - Using the verbs below ,create questions to ask your friend.</h5>

            <ul class="lista-inline">
                <li>
                    <p>Study</p>
                </li>
                <li>
                    <p>Play</p>
                </li>
                <li>
                    <p>Work</p>
                </li>
                <li>
                    <p>Draw</p>
                </li>
                <li>
                    <p>Speak</p>
                </li>
                <li>
                    <p>Plan</p>
                </li>
                <li>
                    <p>Read</p>
                </li>
                <li>
                    <p>Write</p>
                </li>
                <li>
                    <p>Code</p>
                </li>
                <li>
                    <p>Open</p>
                </li>
                <li>
                    <p>Live</p>
                </li>
                <li>
                    <p>Close</p>
                </li>
                <li>
                    <p>Help</p>
                </li>
            </ul>
            <div style="margin-top:32px">
                <form id="unidade5grammar124" action="post">
                    <div class="metade umterco">
                        <p>1.<input type="text" name="grammar124-1" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>2.<input type="text" name="grammar124-2" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>3.<input type="text" name="grammar124-3" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>4.<input type="text" name="grammar124-4" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>5.<input type="text" name="grammar124-5" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>6.<input type="text" name="grammar124-6" placeholder="Responda aqui" class="full left-align" required></p>
                    </div>
                    <div class="metade umterco">
                        <p>7.<input type="text" name="grammar124-7" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>8.<input type="text" name="grammar124-8" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>9.<input type="text" name="grammar124-9" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>10.<input type="text" name="grammar124-10" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>11.<input type="text" name="grammar124-11" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>12.<input type="text" name="grammar124-12" placeholder="Responda aqui" class="full left-align" required></p>
                        <p>13.<input type="text" name="grammar124-13" placeholder="Responda aqui" class="full left-align" required></p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="5">
                    <input type="hidden" name="atividade_id" value="124">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow" style="margin-top:16px">3 - Describe the Sequence you follow to do the following tasks.</h5>
                <ul>
                    <li>
                        <p>Install an app in your cell phone.</p>
                    </li>
                    <li>
                        <p>Eliminate the red eyes of pictures.</p>
                    </li>
                    <li>
                        <p>Create a Photo Shop work.</p>
                    </li>
                    <li>
                        <p>Install a game in your computer.</p>
                    </li>
                </ul>
                <form id="unidade5grammar431" action="post" class="metade">
                    <p><input type="text" name="grammar431-1" placeholder="Responda aqui" class="full left-align" required></p>
                    <p><input type="text" name="grammar431-2" placeholder="Responda aqui" class="full left-align" required></p>
                    <p><input type="text" name="grammar431-3" placeholder="Responda aqui" class="full left-align" required></p>
                    <p><input type="text" name="grammar431-4" placeholder="Responda aqui" class="full left-align" required></p>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="5">
                    <input type="hidden" name="atividade_id" value="431">
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

    $("#unidade5grammar123").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade5grammar123 input[type="text"]').each(function(index) {
            if (($('#unidade5grammar123 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade5grammar123 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade5grammar123'), respostas);
        } else {
            enviarAtividade($('#unidade5grammar123'), respostas);
        }
    });

    $("#unidade5grammar124").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade5grammar124 input[type="text"]').each(function(index) {
            if (($('#unidade5grammar124 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade5grammar124 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade5grammar124'), respostas);
        } else {
            enviarAtividade($('#unidade5grammar124'), respostas);
        }
    });

    $("#unidade5grammar431").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade5grammar431 input[type="text"]').each(function(index) {
            if (($('#unidade5grammar431 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade5grammar431 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade5grammar431'), respostas);
        } else {
            enviarAtividade($('#unidade5grammar431'), respostas);
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
                    $('#unidade5grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade5grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade5grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade5grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade5/grammar.blade.php ENDPATH**/ ?>