@extends('layouts.template')
@section('titulo','Unit 51 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade51" data-etapa="grammar">
            <h3 class="barlow">UNIT 51 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - PRESENT PERFECT (2)</h5>
                <p><b>Adverbs Yet, Already, Ever and Never.</b></p>
                <p class="metade">
                    <b>It is very common to see some adverbs being used with present perfect. They add an
                        extra information to the idea of present perfect. Take a look at the examples below.</b>
                </p>
                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES:</b></h5>
                <h5 class="barlow">1 - Follow the example and do the same using ALREADY:</h5>
                <p>
                    <h5 class="barlow"><b>Example: </b></h5>
                    <p>Bring the milk in, please.</p>
                    <p>I have ALREADY brought it in.</p>
                </p>
                <form id="unidade51grammar347" style="margin-top:32px" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. You must find the tickets soon. <input type="text" name="grammar347-1" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                2. Turn the radio down, please. <input type="text" name="grammar347-2" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                3. Tidy your room. <input type="text" name="grammar347-3" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                4. Could you post the letters, please? <input type="text" name="grammar347-4" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                5. Why don’t you see a doctor? <input type="text" name="grammar347-5" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                        </p>
                    </div>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="51">
                    <input type="hidden" name="atividade_id" value="347">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>

            <h5 class="barlow">2 - Follow the example and do the same using YET:</h5>
            <p>
                <h5 class="barlow"><b>Example: </b></h5>
                <p>She has been in the shop. (buy anything)</p>
                <p>She has been in the shop but she hasn’t bought anything YET.</p>
            </p>
            <form id="unidade51grammar348" style="margin-top:32px" method="post">
                <div class="metade">
                    <p>
                        <p>
                            1 - I’ve written to them three times. (not reply) <input type="text" name="grammar348-1" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            2 - I’ve asked you again and again. (not do it) <input type="text" name="grammar348-2" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            3 - I lent him $10 last month. (not give it back) <input type="text" name="grammar348-3" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4 - He lost his pen a week ago. (not find it) <input type="text" name="grammar348-4" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5 - He borrowed my book last year. (not give it back) <input type="text" name="grammar348-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>
                </div>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="51">
                <input type="hidden" name="atividade_id" value="348">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">3 - Fill in the blanks with ALREADY or YET:</h5>
            <form id="unidade51grammar349" style="margin-top:32px" method="post">
                <div class="metade">
                    <p>
                        <p>1. He hasn’t called us <input type="text" name="grammar349-1" class="inputMedio" placeholder="Responda aqui" required /></p>
                        <p>2. They have <input type="text" name="grammar349-2" class="inputMedio" placeholder="Responda aqui" required /> sent the letter.</p>
                        <p>3. John has <input type="text" name="grammar349-3" class="inputMedio" placeholder="Responda aqui" required /> bought the tickets for the football match.</p>
                        <p>4. We have <input type="text" name="grammar349-4" class="inputMedio" placeholder="Responda aqui" required /> been to Mexico three times.</p>
                        <p>5. You haven’t visited Tokyo <input type="text" name="grammar349-5" class="inputMedio" placeholder="Responda aqui" required /></p>
                        <p>6. Has John bought a new car <input type="text" name="grammar349-6" class="inputMedio" placeholder="Responda aqui" required /> ?</p>
                    </p>
                </div>
                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="51">
                <input type="hidden" name="atividade_id" value="349">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">4 - Fill in the blanks using ever, never, just, already and yet.</h5>
            <form id="unidade51grammar350" style="margin-top:32px" method="post">
                <div class="metade">
                    <p>
                        <p>1. Have you <input type="text" name="grammar350-1" placeholder="Responda aqui" required /> been in America?</p>
                        <p>2. Do you hear the noise? The train has <input type="text" name="grammar350-2" placeholder="Responda aqui" required /> arrived.</p>
                        <p>3. No. Your cousin hasn’t come to the party <input type="text" name="grammar350-3" placeholder="Responda aqui" required /></p>
                        <p>4. Can you open the door? Oh, it is <input type="text" name="grammar350-4" placeholder="Responda aqui" required /> open.</p>
                        <p>5. Your daughter has <input type="text" name="grammar350-5" placeholder="Responda aqui" required /> returned home. You don’t have to worry anymore.</p>
                        <p>6. Haven’t you finished your food <input type="text" name="grammar350-6" placeholder="Responda aqui" required /> ? No, I am still eating mom.</p>
                        <p>7. I am a very lucky person. I have <input type="text" name="grammar350-7" placeholder="Responda aqui" required /> had nightmares.</p>
                        <p>8. Are you going to meet me at the shop? Yes, I am <input type="text" name="grammar350-8" placeholder="Responda aqui" required /> there.</p>
                        <p>9. I have <input type="text" name="grammar350-9" placeholder="Responda aqui" required /> realized how beautiful you are.</p>
                        <p>10. Would you like to have dinner with us? No thanks, I have <input type="text" name="grammar350-10" placeholder="Responda aqui" required /> had dinner.</p>
                        <p>11. Have you <input type="text" name="grammar350-11" placeholder="Responda aqui" required /> seen such a big ant?</p>
                    </p>
                </div>
                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="51">
                <input type="hidden" name="atividade_id" value="350">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow" style="margin-top: 36px">5 - Think of appropriate verbs for the activities below and prepare questions about them to
                interview your friends. Use ALREADY, YET, EVER and NEVER.</h5>
            <form id="unidade51grammar351" method="post">
                <p>
                    Bungee Jump / Base Jump / Wingsuit / Parachute / hang gliding / Rafting
                    Travel abroad / Eat sushi /Japanese anime / comic book in English / Comic con / Sana
                </p>
                <textarea name="grammar351-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="51">
                <input type="hidden" name="atividade_id" value="351">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit51/grammar1.png') }}" alt="esporte aereo">
            </figure>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit51/grammar2.png') }}" alt="esporte aereo">
            </figure>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit51/grammar3.png') }}" alt="esporte aereo">
            </figure>
        </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade51grammar347").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade51grammar347 input[type="text"]').each(function(index) {
            if (($('#unidade51grammar347 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade51grammar347 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade51grammar347'), respostas);
        } else {
            enviarAtividade($('#unidade51grammar347'), respostas);
        }
    });

    $("#unidade51grammar348").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade51grammar348 input[type="text"]').each(function(index) {
            if (($('#unidade51grammar348 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade51grammar348 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade51grammar348'), respostas);
        } else {
            enviarAtividade($('#unidade51grammar348'), respostas);
        }
    });

    $("#unidade51grammar349").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade51grammar349 input[type="text"]').each(function(index) {
            if (($('#unidade51grammar349 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade51grammar349 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade51grammar349'), respostas);
        } else {
            enviarAtividade($('#unidade51grammar349'), respostas);
        }
    });

    $("#unidade51grammar350").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade51grammar350 input[type="text"]').each(function(index) {
            if (($('#unidade51grammar350 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade51grammar350 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade51grammar350'), respostas);
        } else {
            enviarAtividade($('#unidade51grammar350'), respostas);
        }
    });

    $("#unidade51grammar351").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade51grammar351 textarea').attr("name") + '":"' + $('#unidade51grammar351 textarea').val() + '"}';
        if ($('#unidade51grammar351 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade51grammar351'), respostas);
        } else {
            enviarAtividade($('#unidade51grammar351'), respostas);
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
                    $('#unidade51grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade51grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade51grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade51grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade51grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade51grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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