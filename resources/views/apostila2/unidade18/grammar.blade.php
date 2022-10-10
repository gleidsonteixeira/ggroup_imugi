@extends('layouts.template')
@section('titulo','Unit 18 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade18" data-etapa="grammar">
            <h3 class="barlow">UNIT 18</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A - SIMPLE PAST X PAST CONTINUOUS</h5>
            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">SIMPLE PAST (isolated action in the past)</h5>
                    </td>
                    <td>
                        <h5 class="barlow">PAST continuous (progressive action in the past)</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Justice league <b>was</b> a fantastic movie.<p>
                    </td>
                    <td>
                        <p>He <b>was producing</b> a new video clip.<p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Last weekend i <b>watched</b> Rangnarok.<p>
                    </td>
                    <td>
                        <p>They<b>were working</b> in Seattle last year.<p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>John <b>saw</b> many nice things in Comic Con.<p>
                    </td>
                    <td>
                        <p>We <b>were going</b> to L.A when you called.<p>
                    </td>
                </tr>
            </table>

            <h5 class="barlow" style="margin-top:16px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Complete the sentences with the words in parentheses using the SIMPLE PAST or the PAST PROGRESSIVE:</h5>
            <form id="unidade18grammar178" method="post">
                <p>
                    1. While Marvel <input type="text" placeholder="Responda aqui" name="grammar178-1" required>
                    (Shoot) Ragnarok, I <input type="text" placeholder="Responda aqui" name="grammar178-2" required>.
                    (study) its production.
                </p>
                <p>
                    2. Mr Smith <input type="text" placeholder="Responda aqui" name="grammar178-3" required>.
                    (show) Cinema 4D features when he <input type="text" placeholder="Responda aqui" name="grammar178-4" required>
                    (receive) a phone call.
                </p>
                <p>
                    3. While he <input type="text" placeholder="Responda aqui" name="grammar178-5" required>.
                    (fly) to NY, Laura <input type="text" placeholder="Responda aqui" name="grammar178-6" required>.
                    (accept) her new job.
                </p>
                <p>
                    4. The actors <input type="text" placeholder="Responda aqui" name="grammar178-7" required>
                    (fight) when the cop <input type="text" placeholder="Responda aqui" name="grammar178-8" required>
                    (arrest) them.
                </p>
                <p>
                    5. DC comics<input type="text" placeholder="Responda aqui" name="grammar178-9" required>
                    (release) Justice League while Marvel <input type="text" placeholder="Responda aqui" name="grammar178-10" required>.
                    (promote) Ragnarok.
                </p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="18">
                <input type="hidden" name="atividade_id" value="178">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - Watch Ragnarok official trailer and write 5 sentences in the SIMPLE PAST and 5 in PAST
                CONTINUOUS.</h5>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit18/grammar1.png') }}" alt="Garotos festejando">
            </figure>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit18/grammar2.png') }}" alt="Garotos festejando">
            </figure>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit18/grammar3.png') }}" alt="Garotos festejando">
            </figure>

            <div class="clear"></div>

            <iframe style="margin-top:16px" width="577" height="240" src="https://www.youtube.com/embed/ue80QwXMRHg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <form id="unidade18grammar179" method="post" class="metade" style="margin-top:16px">
                <textarea class="full" name="grammar179-1" placeholder="Responda aqui" required></textarea>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="18">
                <input type="hidden" name="atividade_id" value="179">
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

    $("#unidade18grammar178").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade18grammar178 input[type="text"]').each(function(index) {
            if (($('#unidade18grammar178 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade18grammar178 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade18grammar178'), respostas);
        } else {
            enviarAtividade($('#unidade18grammar178'), respostas);
        }
    });

    $("#unidade18grammar179").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade18grammar179 textarea').attr("name") + '":"' + $('#unidade18grammar179 textarea').val() + '"}';
        if ($('#unidade18grammar179 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade18grammar179'), respostas);
        } else {
            enviarAtividade($('#unidade18grammar179'), respostas);
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
                    $('#unidade18grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade18grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade18grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade18grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade18grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade18grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);

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
