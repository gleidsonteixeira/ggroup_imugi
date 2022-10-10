
<?php $__env->startSection('titulo','Unit 42 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade42" data-etapa="grammar">
            <h3 class="barlow">UNIT 42</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 42/3. GRAMMAR/GRAMMAR.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A - RELATIVE PRONOUNS – WHERE , WHEN.</h5>
            <div class="metade">
                <table class="center-align">
                    <tr class="bordered">
                        <td>
                            <h5 class="barlow">RELATIVE PRONOUNS</h5>
                        </td>
                        <td>
                            <h5 class="barlow">EXAMPPLES</h5>
                        </td>
                    </tr>
                    <tr class="bordered">
                        <td>
                            <p class="barlow">WHERE</p>
                            <p class="barlow">(Used for places)</p>
                        </td>
                        <td class="left-align">
                            <p>A: The hotel in New York was terrible.</p>
                            <p>B: We stayed there for 3 days.</p>
                            <p>A+B= The hotel in New York where we stayed, was terrible</p>
                            <p style="margin-top:16px">A: The classroom is very dark</p>
                            <p>B: My friends study there in the morning.</p>
                            <p>A+B= The classroom where my friends study in the morning is very dark.</p>
                        </td>
                    </tr>
                    <tr class="bordered">
                        <td>
                            <p class="barlow">WHEN</p>
                        </td>
                        <td class="left-align">
                            <p>A: Yesterday was a bad day.</p>
                        </td>
                    </tr>
                    <tr class="bordered">
                        <td>
                            <p class="barlow">(Used for time)</p>
                        </td>
                        <td class="left-align">
                            <p>B: Everything went wrong. ( yesterday ).</p>
                            <p>A+B= Yesterday was a bad day when everything went wrong.</p>
                            <p style="margin-top:16px">A: My son was born in 2001.</p>
                            <p>B: Terrorists attacked the twin towers in 2001.</p>
                            <p>A+B= My son was born when the terrorists attacked twin towers.</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Combine the following sentences using WHERE or WHEN:</h5>
            <form class="metade" id="unidade42grammar303" method="post">
                <p>
                    1 - Here is the shop. I bought my new camera form this shop.
                    <input type="text" placeholder="Responda aqui" name="grammar303-1" class="full left-align" required>
                </p>
                <p>
                    2 - We will spend our holiday in the same village. We have had a lot of joyful days there so far.
                    <input type="text" placeholder="Responda aqui" name="grammar303-2" class="full left-align" required>
                </p>
                <p>
                    3 - We enjoyed Marmaris. We spent our summer holiday there this year.
                    <input type="text" placeholder="Responda aqui" name="grammar303-3" class="full left-align" required>
                </p>
                <p>
                    4 - The library is quite far from the city center. I go and work there twice a month.
                    <input type="text" placeholder="Responda aqui" name="grammar303-4" class="full left-align" required>
                </p>
                <p>
                    5 - I’ll never forget the day. I met my wife on this day.
                    <input type="text" placeholder="Responda aqui" name="grammar303-5" class="full left-align" required>
                </p>
                <p>
                    6 - I’m looking forward to the Fifteenth of next month. I’ll get married then.
                    <input type="text" placeholder="Responda aqui" name="grammar303-6" class="full left-align" required>
                </p>
                <p>
                    7 - Do you know the restaurant? We will meet you there tomorrow.
                    <input type="text" placeholder="Responda aqui" name="grammar303-7" class="full left-align" required>
                </p>
                <p>
                    8 - John visited me last Friday. A few other friends also called me up last Friday.
                    <input type="text" placeholder="Responda aqui" name="grammar303-8" class="full left-align" required>
                </p>
                <p>
                    9 - Last week I went to see the country town. I used to live in that town.
                    <input type="text" placeholder="Responda aqui" name="grammar303-9" class="full left-align" required>
                </p>
                <p>
                    10 - Abant is a beautiful place. There are many lakes there.
                    <input type="text" placeholder="Responda aqui" name="grammar303-10" class="full left-align" required>
                </p>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="42">
                <input type="hidden" name="atividade_id" value="303">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - Join the sentences using WHO, WHEN, WHERE, WHICH or WHOSE:</h5>
            <form class="metade" id="unidade42grammar304" method="post">
                <p>
                    1 - She’s the girl. She works in the library.
                    <input type="text" placeholder="Responda aqui" name="grammar304-1" class="full left-align" required>
                </p>
                <p>
                    2 - Corfu is an island. It has many beautiful beaches.
                    <input type="text" placeholder="Responda aqui" name="grammar304-2" class="full left-align" required>
                </p>
                <p>
                    3 - Here’s the alarm clock. I bought it yesterday.
                    <input type="text" placeholder="Responda aqui" name="grammar304-3" class="full left-align" required>
                </p>
                <p>
                    4 - I’ve spoken to John. His house was burgled last Monday.
                    <input type="text" placeholder="Responda aqui" name="grammar304-4" class="full left-align" required>
                </p>
                <p>
                    5 - That’s the lady. Her jewelry was stolen.
                    <input type="text" placeholder="Responda aqui" name="grammar304-5" class="full left-align" required>
                </p>
                <p>
                    6 - That is the radio. I won it in the competition.
                    <input type="text" placeholder="Responda aqui" name="grammar304-6" class="full left-align" required>
                </p>
                <p>
                    7 - John is the man. His house was destroyed by the fire.
                    <input type="text" placeholder="Responda aqui" name="grammar304-7" class="full left-align" required>
                </p>
                <p>
                    8 - There is the hospital. I was born there.
                    <input type="text" placeholder="Responda aqui" name="grammar304-8" class="full left-align" required>
                </p>
                <p>
                    9 - That was the summer. I met my wife then.
                    <input type="text" placeholder="Responda aqui" name="grammar304-9" class="full left-align" required>
                </p>
                <p>
                    10 - That is Fiona Webb. She is a famous dancer.
                    <input type="text" placeholder="Responda aqui" name="grammar304-10" class="full left-align" required>
                </p>
                <p>
                    11 - France is the country. The best wine is produced there.
                    <input type="text" placeholder="Responda aqui" name="grammar304-11" class="full left-align" required>
                </p>
                <p>
                    12 - 1945 was the year. The Second World War ended then.
                    <input type="text" placeholder="Responda aqui" name="grammar304-12" class="full left-align" required>
                </p>
                <p>
                    13 - That’s the hotel. I stayed there last summer.
                    <input type="text" placeholder="Responda aqui" name="grammar304-13" class="full left-align" required>
                </p>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="42">
                <input type="hidden" name="atividade_id" value="304">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="esquerda metade">
                <img src="<?php echo e(asset('assets/img/dominating/unit42/grammar1.png')); ?>" alt="Garotos festejando">
            </figure>
            <figure class="direita metade">
                <img src="<?php echo e(asset('assets/img/dominating/unit42/grammar2.png')); ?>" alt="Garotos festejando">
            </figure>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top: 16px;">3 - Think of a movie you like and write the plot of it. It’s important to write about the
                characters, the place , the time when the story happens, and a simple narration of the
                story. Use at least 4 Relative pronoun from the list below. Check some examples on Google
                to help you. Who – whom – that – whose – where – when - which</h5>
            <form id="unidade42grammar305" method="post">
                <textarea name="grammar305-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <div class="clear"></div>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="42">
                <input type="hidden" name="atividade_id" value="305">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
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

    $("#unidade42grammar303").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade42grammar303 input[type="text"]').each(function(index) {
            if (($('#unidade42grammar303 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade42grammar303 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade42grammar303'), respostas);
        } else {
            enviarAtividade($('#unidade42grammar303'), respostas);
        }
    });

    $("#unidade42grammar304").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade42grammar304 input[type="text"]').each(function(index) {
            if (($('#unidade42grammar304 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade42grammar304 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade42grammar304'), respostas);
        } else {
            enviarAtividade($('#unidade42grammar304'), respostas);
        }
    });

    $("#unidade42grammar305").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade42grammar305 textarea').attr("name") + '":"' + $('#unidade42grammar305 textarea').val() + '"}';
        if ($('#unidade42grammar305 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade42grammar305'), respostas);
        } else {
            enviarAtividade($('#unidade42grammar305'), respostas);
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
                    $('#unidade42grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade42grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade42grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade42grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade42grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade42grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade42/grammar.blade.php ENDPATH**/ ?>