@extends('layouts.template')
@section('titulo','Unit 36 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade36" data-etapa="grammar">
            <h3 class="barlow">UNIT 36 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 36/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - TO BE USED TO </h5>
                <p><b>To be used to</b> is used to express a <b>present habit</b>. Some action or fact that <b>happens on a frequent basis</b>.</p>
                <table class="metade center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">TO BE USED TO + VERB(ING)</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>I’m used to</b> watch<b>ing</b> animes before going to bed.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>I’m not used to</b> spend<b>ing</b> so much time reading comic books.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Are</b> you used to hav<b>ing</b> a back up of your computer weekly?</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5 class="barlow">TO BE USED TO + GENERAL INFO</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>I’m not used</b> to log meetings.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>She’s used to</b> stressful situations.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Are</b> they <b>used to</b> NY October weather? They had better take some sweater.</p>
                        </td>
                    </tr>
                </table>

                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Rewrite each sentence. Use “(BE) USED TO” and a gerund for each sentence.</h5>
                <h5 class="barlow"><b>Example:</b></h5>
                <p>He didn’t know how to drive a car until last year. Now, he <u>is used to driving</u> a car.</p>
                <form id="unidade36grammar270" style="margin-top:32px" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. She <b>saw</b> snow for the first time when she moved to Minnesota.<br>
                                Now, she <input type="text" name="grammar270-1" class="inputMedio left-align" placeholder="Responda aqui" required /> snow in the winter.
                            </p>
                            <p>
                                2. Thomas had never <b>worked</b> early in the morning until he began his new job.<br>
                                Now, he <input type="text" name="grammar270-2" class="inputMedio left-align" placeholder="Responda aqui" required /> in the morning.
                            </p>
                            <p>
                                3. The students didn’t <b>speak</b> English on their first day of class.<br>
                                Now, they <input type="text" name="grammar270-3" class="inputMedio left-align" placeholder="Responda aqui" required /> every day in class.
                            </p>
                            <p>
                                4. Jerry didn’t <b>walk</b> very much before he moved to Jamaica.<br>
                                Now, he <input type="text" name="grammar270-4" class="inputMedio left-align" placeholder="Responda aqui" required /> everywhere he goes.
                            </p>
                            <p>
                                5. I didn’t <b>take</b> the bus very often before I moved to Chicago.<br>
                                Nowadays, I <input type="text" name="grammar270-5" class="inputMedio left-align" placeholder="Responda aqui" required /> the bus all over the city.
                            </p>
                            <p>
                                6. Bill and Linda <b>are</b> parents. They started having kids ten years ago.<br>
                                They <input type="text" name="grammar270-6" class="inputMedio left-align" placeholder="Responda aqui" required /> parents.
                            </p>
                            <p>
                                7. Belinda rarely <b>shopped</b> after midnight before she got her new job.<br>
                                Now, she <input type="text" name="grammar270-7" class="inputMedio left-align" placeholder="Responda aqui" required /> after midnight.
                            </p>
                            <p>
                                8. We <b>do</b> our own housework.<br>
                                We <input type="text" name="grammar270-8" class="inputMedio left-align" placeholder="Responda aqui" required /> our cleaning ourselves
                            </p>
                            <p>
                                9. The police <b>go</b> to the house across the street all the time.<br>
                                The police <input type="text" name="grammar270-9" class="inputMedio left-align" placeholder="Responda aqui" required /> there for all kinds of problems.
                            </p>
                            <p>
                                10. I <b>read</b> the newspaper online every day, but ten years ago I rarely did that.<br>
                                Now, I <input type="text" name="grammar270-10" class="inputMedio left-align" placeholder="Responda aqui" required /> the paper online.
                            </p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="36">
                    <input type="hidden" name="atividade_id" value="270">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/dominating/unit36/grammar.png') }}" alt="estrada">
                    </figure>
                </div>
                <h5 class="barlow" style="margin-top:16px">2 - Rewrite each sentence with “BE USED TO” in the negative form. Do not use a gerund.</h5>
                <h5 class="barlow"><b>Example:</b></h5>
                <p>Maria doesn’t like this hot weather. She <u>isn’t used to</u> the heat.</p>
                <form id="unidade36grammar271" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. Terry doesn’t like her new job.<br>
                                She <input type="text" name="grammar271-1" class="inputMedio left-align" placeholder="Responda aqui" required /> the schedule.
                            </p>
                            <p>
                                2. Sam hates driving to work because it takes so long to get there.<br>
                                He <input type="text" name="grammar271-2" class="inputMedio left-align" placeholder="Responda aqui" required /> a long drive every day.
                            </p>
                            <p>
                                3. I don’t want to go into the water just yet.<br>
                                I <input type="text" name="grammar271-3" class="inputMedio left-align" placeholder="Responda aqui" required /> the cold temperature of the water.
                            </p>
                            <p>
                                4. The children seem kind of tired this afternoon.<br>
                                They <input type="text" name="grammar271-4" class="inputMedio left-align" placeholder="Responda aqui" required /> a long day of school after three months of summer vacation.
                            </p>
                            <p>
                                5. You don’t like to drive a car with a stick shift.<br>
                                You <input type="text" name="grammar271-5" class="inputMedio left-align" placeholder="Responda aqui" required /> a manual transmission.
                            </p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="36">
                    <input type="hidden" name="atividade_id" value="271">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>

            <h5 class="barlow" style="margin-top: 36px">3 - Write about things that you are used to doing and things that you aren’t used to doing currently</h5>
            <form id="unidade36grammar272" method="post">
                <textarea name="grammar272-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="36">
                <input type="hidden" name="atividade_id" value="272">
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

    $("#unidade36grammar270").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade36grammar270 input[type="text"]').each(function(index) {
            if (($('#unidade36grammar270 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade36grammar270 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade36grammar270'), respostas);
        } else {
            enviarAtividade($('#unidade36grammar270'), respostas);
        }
    });

    $("#unidade36grammar271").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade36grammar271 input[type="text"]').each(function(index) {
            if (($('#unidade36grammar271 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade36grammar271 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade36grammar271'), respostas);
        } else {
            enviarAtividade($('#unidade36grammar271'), respostas);
        }
    });


    $("#unidade36grammar272").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade36grammar272 textarea').attr("name") + '":"' + $('#unidade36grammar272 textarea').val() + '"}';
        if ($('#unidade36grammar272 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade36grammar272'), respostas);
        } else {
            enviarAtividade($('#unidade36grammar272'), respostas);
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
                    $('#unidade36grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade36grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade36grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade36grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade36grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade36grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

@endsection