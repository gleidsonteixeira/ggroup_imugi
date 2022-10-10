
<?php $__env->startSection('titulo','Unit 25 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade25" data-etapa="grammar">
            <h3 class="barlow">UNIT 25</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 25/03_GRAMMAR/GRAMMAR_25.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - REPORTED SPEECH (5) – Focus on time and pronouns reference.</h5>
                <p><b>Changing Pronouns</b></p>

                <table class="espacamento center-align borderedfull">
                    <tr>
                        <td><h5 class="barlow">DIRECT SPEECH</td>
                        <td><h5 class="barlow">REPORTED SPEECH</td>
                    </tr>
                    <tr>
                        <td><p><b>John :</b> Laura, <b>I’ll</b> call Akira as soon as <b>I can</b>.</p></td>
                        <td><p><b>Laura:</b> Jake, John told me <b>he would call</b> Akira as soon as <b>he could</b></p></td>
                    </tr>
                    <tr>
                        <td><p><b>Laura : I finished</b> the report. <b>We can send</b> it</p></td>
                        <td><p><b>John:</b> Akira, Laura told me <b>she finished</b> the report and that <b>you could send</b> it.</p></td>
                    </tr>
                    <tr>
                        <td><p><b>Akira :</b> Jake <b>is gonna be</b> late for the class today.</p></td>
                        <td><p><b>Akira:</b> Guys, Jake said that <b>he was gonna be</b> late for the class today</p></td>
                    </tr>
                </table>

                <p style="margin-top:32px"><b>Changing time expressions</b></p>

                <table class="espacamento center-align borderedfull" style="margin-top:32px">
                    <tr>
                        <td><h5 class="barlow">DIRECT SPEECH</h5></td>
                        <td><h5 class="barlow">REPORTED SPEECH</h5></td>
                    </tr>
                    <tr>
                        <td><p>(Today in the morning)</p><p><b>Laura:</b> Akira, <b>Jake is</b> gonna have a meeting <b>tonight.</b><p></td>
                        <td>
                            <p>(Today in the afternoon)</p>
                            <p><b>John:</b> Hey guys, what about Jake. Where is he?<p>
                            <p><b>Akira:</b> Laura told me that <b>he was</b> gonna have a meeting <b>tonight</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td><p>(Yesterday)</p><p><b>John:</b> Laura, I’ll get a laptop <b>tonight.</b><p></td>
                        <td>
                            <p>(Today)</p><p><b>Akira:</b> Laura, Did John get the laptop?</p>
                            <p><b>Laura:</b> I think so, he told me <b>he would get</b> one <b>last night.</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td><p>(Aug 2nd)</p><p><b>Jake:</b> Laura. <b>I have</b> a very important meeting <b>tonight.</b><p></td>
                        <td>
                            <p>(Aug 9th)</p>
                                <p>
                                    <b>John:</b> Hey guys, What about Jake? I Haven’t seen him lately.
                                </p>
                                <p>
                                    <b>Laura:</b> I think he’s ok. He said that <b>he had</b> a very important meeting <b>last week.</b>
                                </p>
                            </p>
                        </td>
                    </tr>
                </table>

                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Turn the following dialogue into REPORTED SPEECH:</h5>
                <form id="unidade25grammar681" method="post" class="espacamento" style="margin-top:32px">
                    <table>
                        <tr>
                            <td><p><b>Sally :</b> Have you applied for the job?</p></td>
                            <td>
                                <p>
                                    <b>Sally asked Diane if she had applied for the
                                    job Diane told her</b> <input type="text" name="grammar681-1" class="inputpequeno left-align" placeholder="Responda aqui" required />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><p><b>Diane :</b> Yes, I had an interview yesterday.</p></td>
                            <td><p><input type="text" name="grammar681-2" class="full left-align" placeholder="Responda aqui" required /></p></td>
                        </tr>
                        <tr>
                            <td><p><b>Sally :</b> How did it go?</p></td>
                            <td><p><input type="text" name="grammar681-3" class="full left-align" placeholder="Responda aqui" required /></p></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <b>Diane :</b> Fine, but I’m wondering if I want
                                    the job because I will have to move
                                    to Manchester next month
                                </p>
                            </td>
                            <td><p><input type="text" name="grammar681-4" class="full left-align" placeholder="Responda aqui" required /></p></td>
                        </tr>
                        <tr>
                            <td><p><b>Sally :</b> What will you do then?</p></td>
                            <td><p><input type="text" name="grammar681-5" class="full left-align" placeholder="Responda aqui" required /></p></td>
                        </tr>
                        <tr>
                            <td><p><b>Diane :</b> If they offer me the job, I can’t accept it.</p></td>
                            <td><p><input type="text" name="grammar681-6" class="full left-align" placeholder="Responda aqui" required /></p></td>
                        </tr>
                    </table>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="25">
                    <input type="hidden" name="atividade_id" value="681">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow" style="margin-top:16px">2 - Write what the family said at the dinner table:</h5>


                <form id="unidade25grammar682" method="post" class="metade" style="margin-top:32px">
                    <p>
                        <p>1. Mother: “Does anyone want some more potatoes?”</p>
                        <p><b>Mother asked if anyone wanted some more potatoes.</b></p>
                        <p>
                            2. Father: “Pass me the wine, Beth.”
                            <input type="text" name="grammar682-1" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            3. Beth: “The chicken is very nice today.”
                            <input type="text" name="grammar682-2" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4. Grandfather: “I’m going to start my diet next week.”
                            <input type="text" name="grammar682-3" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5. Grandmother: “Don’t eat with your mouth open, Sam!”
                            <input type="text" name="grammar682-4" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            6. Tim: “This is the best dinner I’ve had!”
                            <input type="text" name="grammar682-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            7. Jean: “Is there any more salad, Mum?”
                            <input type="text" name="grammar682-6" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            8. Sam: “I’m very hungry because I only had a sandwich for lunch today.”
                            <input type="text" name="grammar682-7" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            9. Helen: “What are we having for dessert, Mum?”
                            <input type="text" name="grammar682-8" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            10. Bob: “I don’t want anything else to eat.”
                            <input type="text" name="grammar682-9" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="25">
                    <input type="hidden" name="atividade_id" value="682">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure>
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit25/grammar.jpg')); ?>" alt="almoço em família">
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

    $("#unidade25grammar681").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade25grammar681 input[type="text"]').each(function(index) {
            if (($('#unidade25grammar681 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade25grammar681 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade25grammar681'), respostas);
        } else {
            enviarAtividade($('#unidade25grammar681'), respostas);
        }
    });

    $("#unidade25grammar682").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade25grammar682 input[type="text"]').each(function(index) {
            if (($('#unidade25grammar682 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade25grammar682 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade25grammar682'), respostas);
        } else {
            enviarAtividade($('#unidade25grammar682'), respostas);
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
                    $('#unidade25grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade25grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade25grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade25grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade25grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade25grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade25/grammar.blade.php ENDPATH**/ ?>