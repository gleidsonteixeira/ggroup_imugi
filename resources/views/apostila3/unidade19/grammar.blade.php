@extends('layouts.template')
@section('titulo','Unit 19 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade19" data-etapa="grammar">
            <h3 class="barlow">UNIT 19</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 19/03_GRAMMAR/GRAMMAR_19.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - PASSIVE VOICE (1)</h5>
                <p>
                    We use <b>Passive Voice</b> when we want to focus on the action (What was done) rather
                    than on the doer (Who did it). The doer can be mentioned or not.
                </p>
                <p><b>Active Voice:</b> Marvel releas<b>ed</b> the movie “Avengers, the Ultimate” in 2019.</p>
                <p><b>Passive Voice:</b> The movie “Avengers, the Ultimate” <b>was released</b> <u>(by Marvel)</u> in 2019.</p>
                <p style="margin-top: 32px"><b>Active Voice:</b> Google <b>bought</b> Youtube by 1.6 billion dollars.</p>
                <p><b>Passive Voice:</b> Youtube <b>was bought</b> <u>(by Google)</u> by 1.6 billion dollar</p>

                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Fill in the PASSIVE in the appropriate tense:</h5>
                <form id="unidade19grammar596" method="post">
                    <p>
                        <p>1. (TV / invent / Baird) <b>TV was invented by Baird.</b></p>
                        <p>2. (Pyramids / build / Egyptians) <input type="text" name="grammar596-1" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>3. (milk / produce / cows) <input type="text" name="grammar596-2" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>4. (coffee / grow / in Brazil) <input type="text" name="grammar596-3" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>5. (chopsticks / use / in China) <input type="text" name="grammar596-4" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>6. (plants / water / every day) <input type="text" name="grammar596-5" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>7. (the thief / arrest / policeman / yesterday) <input type="text" name="grammar596-6" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>8. (the injured man / take to a hospital / now) <input type="text" name="grammar596-7" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>9. (the car / repair / tomorrow) <input type="text" name="grammar596-8" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>10. (the letter / send / last week) <input type="text" name="grammar596-9" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="19">
                    <input type="hidden" name="atividade_id" value="596">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">2 - Put the verbs in brackets into PRESENT SIMPLE PASSIVE:</h5>
                <form id="unidade19grammar597" method="post">
                    <p>
                        There is a chimpanzee which <b>is called</b> (call) “Bubbles”. It <input type="text" name="grammar597-1" placeholder="Responda aqui" required /> (own)
                        by Michael Johnson. It <input type="text" name="grammar597-2" placeholder="Responda aqui" required /> (keep) in his home. It <input type="text" name="grammar597-3" placeholder="Responda aqui" required /> (feed)
                        every day by Michael Johnson himself. It <input type="text" name="grammar597-4" placeholder="Responda aqui" required /> (always / dress) in
                        funny clothes. It <input type="text" name="grammar597-5" placeholder="Responda aqui" required /> (said) that “Bubbles” is Michael Johnson’s only
                        friend.
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="19">
                    <input type="hidden" name="atividade_id" value="597">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow" style="margin-top:16px">3 - Rewrite the following passage in the PASSIVE:</h5>
                <h5 class="barlow"><b>Example:</b></h5>
                <p>
                    Some people saw a UFO in the sky above London last night. They reported it to the police.
                    The army sent a helicopter to look at it more closely. The UFO shot the helicopter down and
                    killed both men in it. People have given photographs of the UFO to the police. Experts are
                    looking for them now.
                </p>
                <form id="unidade19grammar598" method="post" style="margin-top:32px">
                    <textarea name="grammar598-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="19">
                    <input type="hidden" name="atividade_id" value="598">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit19/grammar.jpg') }}" alt="inglaterra disco">
				</figure>
            </div>
        </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade19grammar596").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade19grammar596 input[type="text"]').each(function(index) {
            if (($('#unidade19grammar596 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade19grammar596 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade19grammar596'), respostas);
        } else {
            enviarAtividade($('#unidade19grammar596'), respostas);
        }
    });

    $("#unidade19grammar597").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade19grammar597 input[type="text"]').each(function(index) {
            if (($('#unidade19grammar597 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade19grammar597 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade19grammar597'), respostas);
        } else {
            enviarAtividade($('#unidade19grammar597'), respostas);
        }
    });

    $("#unidade19grammar598").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade19grammar598 textarea').attr("name") + '":"' + $('#unidade19grammar598 textarea').val() + '"}';
        if ($('#unidade19grammar598 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade19grammar598'), respostas);
        } else {
            enviarAtividade($('#unidade19grammar598'), respostas);
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
                    $('#unidade19grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade19grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade19grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade19grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade19grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade19grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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

@endsection
