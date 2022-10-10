@extends('layouts.template')
@section('titulo','Unit 14 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade14" data-etapa="grammar">
            <h3 class="barlow">UNIT 14</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A – SIMPLE PAST TO BE.</h5>
            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">Simple Present</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Simple Past</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>I</b> am</p>
                    </td>
                    <td>
                        <p>I <b>Was</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>You are</p>
                    </td>
                    <td>
                        <p>You <b>Were</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>He is</p>
                    </td>
                    <td>
                        <p>He <b>Was</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>She is</p>
                    </td>
                    <td>
                        <p>She <b>Was</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>I</b>t is</p>
                    </td>
                    <td>
                        <p>It <b>Was</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>We are</p>
                    </td>
                    <td>
                        <p>We <b>Were</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>you are</p>
                    </td>
                    <td>
                        <p>you <b>Were</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>They are</p>
                    </td>
                    <td>
                        <p>They <b>Were</p>
                    </td>
                </tr>
            </table>


            <h5 class="barlow"><b>EXERCISES</b></h5>
            <h5 class="barlow" style="margin-top:16px;">1 - Complete the sentences with verb to be in the past.</h5>
            <form id="unidade14grammar161" method="post">
                <p>I was in the office last night.</p>
                <p>1. I<input type="text" placeholder="Responda aqui" name="grammar161-1" required> at home.</p>
                <p>2. And you, where <input type="text" placeholder="Responda aqui" name="grammar161-2" required>you? She <input type="text" placeholder="Responda aqui" name="grammar161-3" required> in NY two days ago.</p>
                <p>She wasn’t in Japan.</p>
                <p>3. <input type="text" placeholder="Responda aqui" name="grammar161-4" required> in all theses places?</p>
                <p>The final video was great.</p>
                <p>4. It <input type="text" placeholder="Responda aqui" name="grammar161-5" required> very long.</p>
                <p>5. They <input type="text" placeholder="Responda aqui" name="grammar161-6" required> very happy with it. The festival <input type="text" placeholder="Responda aqui" name="grammar161-7" required> very good.</p>
                <p>6. The weather <input type="text" placeholder="Responda aqui" name="grammar161-8" required> terrible.</p>
                <p>7. <input type="text" placeholder="Responda aqui" name="grammar161-9" required> were in in the front seats?</p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="14">
                <input type="hidden" name="atividade_id" value="161">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow" style="margin-top:16px;">2 - Make questions about the text using WAS or WERE:</h5>
            <h5 class="barlow"><b>Example:</b></h5>
            <form id="unidade14grammar162" method="post">
                <p><b>1. </b>How old / Bill / when he visited universal studios?</p>
                <p><b>R. </b>How old was Bill when he visited universal studios?</p>
                <p>2. / Laura / nervous? <input type="text" placeholder="Responda aqui" name="grammar162-1" required>?</p>
                <p>3. Where / Gleen? <input type="text" placeholder="Responda aqui" name="grammar162-2" required>?</p>
                <p>4. Where / Gleen’s books? <input type="text" placeholder="Responda aqui" name="grammar162-3" required>?</p>
                <p>5. / It nice the event in London?<input type="text" placeholder="Responda aqui" name="grammar162-4" required>?</p>
                <p>6. / there nice booths? <input type="text" placeholder="Responda aqui" name="grammar162-5" required>?</p>
                <p>7. / there many movie makers?<input type="text" placeholder="Responda aqui" name="grammar162-6" required>?</p>
                <p>8. How old / in your first big event?<input type="text" placeholder="Responda aqui" name="grammar162-7" required>?</p>
                <p>9. / the gamers excited in the Championship?<input type="text" placeholder="Responda aqui" name="grammar162-8" required>?</p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="14">
                <input type="hidden" name="atividade_id" value="162">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
                <img src="{{ asset('assets/img/dominating/unit14/grammar.png') }}" alt="campeonato gamer">
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

    $("#unidade14grammar161").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade14grammar161 input[type="text"]').each(function(index) {
            if (($('#unidade14grammar161 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade14grammar161 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade14grammar161'), respostas);
        } else {
            enviarAtividade($('#unidade14grammar161'), respostas);
        }
    });

    $("#unidade14grammar162").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade14grammar162 input[type="text"]').each(function(index) {
            if (($('#unidade14grammar162 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade14grammar162 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade14grammar162'), respostas);
        } else {
            enviarAtividade($('#unidade14grammar162'), respostas);
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
                    $('#unidade14grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade14grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade14grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade14grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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