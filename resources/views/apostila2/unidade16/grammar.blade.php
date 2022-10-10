@extends('layouts.template')
@section('titulo','Unit 16 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade16" data-etapa="grammar">
            <h3 class="barlow">UNIT 16</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A – SIMPLE PAST (REGULAR VERBS)</h5>
            <table class="metade center-align">
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Infinitive</h5>
                    </td>
                    <td colspan="2">
                        <h5 class="barlow">Past form (*) (I,you,he,she,it,we,you,they)</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>To be</p>
                    </td>
                    <td>
                        <p>To go</p>
                    </td>
                    <td>
                        <p>Was / were</p>
                    </td>
                    <td>
                        <p>Went</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>To spend</p>
                    </td>
                    <td>
                        <p>To take</p>
                    </td>
                    <td>
                        <p>Spent</p>
                    </td>
                    <td>
                        <p>Took</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>To get</p>
                    </td>
                    <td>
                        <p>To buy</p>
                    </td>
                    <td>
                        <p>Got</p>
                    </td>
                    <td>
                        <p>Bought</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>To feel</p>
                    </td>
                    <td>
                        <p>To understand</p>
                    </td>
                    <td>
                        <p>Felt</p>
                    </td>
                    <td>
                        <p>Understood</p>
                    </td>
                </tr>
            </table>

            <table class="metade center-align" style="margin-top:16px">
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Yes/no Questions</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Did you have</b> an office in California?</p>
                    </td>
                    <td>
                        <p><b>Yes, I had</b> an office in California. / <b>Yes, I did.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Did he understand</b> the project outline?</p>
                    </td>
                    <td>
                        <p><b>No, he didn’t understand</b> it<b> /No, He didn’t.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Did they bring</b> the notes of yesterday?</p>
                    </td>
                    <td>
                        <p><b>Yes, they broung ht</b> all the notes. /<b>Yes, they did.</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Wh-Questions</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>What did he feel</b> with the picture?</p>
                    </td>
                    <td>
                        <p><b>He got</b> speechless.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>How much did you spend</b> in NY?</p>
                    </td>
                    <td>
                        <p><b>I spent</b> around 3 thousand bucks.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>How many</b> comic books <b>did you buy?</b></p>
                    </td>
                    <td>
                        <p><b>We bought</b> a bunch of them.</p>
                    </td>
                </tr>
            </table>

            <h5 class="barlow"><b>EXERCISES</b></h5>
            <h5 class="barlow espacamento">1 - Complete the sentences. Use the past simple form of the verb in brackets.</h5>
            <form id="unidade16grammar168" method="post">
                <p>1. They<input type="text" placeholder="Responda aqui" name="grammar168-1" required>(get up) very early today.</p>
                <p>2. John and Akira<input type="text" placeholder="Responda aqui" name="grammar168-2" required>(spend) two hours working on a new project.</p>
                <p>3. I <input type="text" placeholder="Responda aqui" name="grammar168-3" required> (go) to the movies with my family.</p>
                <p>4. Last year, we <input type="text" placeholder="Responda aqui" name="grammar168-4" required>(see) a comic books show in Manhatan.</p>
                <p>5. Gleen <input type="text" placeholder="Responda aqui" name="grammar168-5" required> (meet) some friends at the movies last week.</p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="16">
                <input type="hidden" name="atividade_id" value="168">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - What’s the question?</h5>
            <div class="bordaVerde">
                <ul class="lista-inline" style="margin-top:16px">
                    <li>
                        <p><b>What time
                    </li>
                    </p></b>
                    <li>
                        <p><b>when
                    </li>
                    </p></b>
                    <li>
                        <p><b>how
                    </li>
                    </p></b>
                    <li>
                        <p><b>how long
                    </li>
                    </p></b>
                    <li>
                        <p><b>how many
                    </li>
                    </p></b>
                </ul>
            </div>
            <div class="clear"></div>
            <form class="espacamento" id="unidade16grammar169" method="post" style="margin-top:32px">
                <p>1. <input type="text" placeholder="Responda aqui" name="grammar169-1" required>Who did you visit <input type="text" placeholder="Responda aqui" name="grammar169-2" required>? I visited my cousin.</p>
                <p>2. <input type="text" placeholder="Responda aqui" name="grammar169-3" class="inputMedio" required>? I left the office very late yesterday.</p>
                <p>3. <input type="text" placeholder="Responda aqui" name="grammar169-4" class="inputMedio" required>? They bought at least 3 new boxes of movies.</p>
                <p>4. <input type="text" placeholder="Responda aqui" name="grammar169-5" class="inputMedio" required>? We went to Sana last summer.</p>
                <p>5. <input type="text" placeholder="Responda aqui" name="grammar169-6" class="inputMedio" required>? They took 2 hours to arrive here today.</p>
                <p>6. <input type="text" placeholder="Responda aqui" name="grammar169-7" class="inputMedio" required>? She felt great when she saw the special effects she did.</p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="16">
                <input type="hidden" name="atividade_id" value="169">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow" style="margin-top:16px">3 - Write about your last vacation. Use as many verbs as you can.</h5>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p>Drink</p>
                </li>
                <li>
                    <p>Eat</p>
                </li>
                <li>
                    <p>Travel</p>
                </li>
                <li>
                    <p>Meet</p>
                </li>
                <li>
                    <p>Swim</p>
                </li>
                <li>
                    <p>Play</p>
                </li>
                <li>
                    <p>Break</p>
                </li>
                <li>
                    <p>Climb</p>
                </li>
                <li>
                    <p>Call</p>
                </li>
            </ul>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p>Date</p>
                </li>
                <li>
                    <p>Visit</p>
                </li>
                <li>
                    <p>Write</p>
                </li>
                <li>
                    <p>Fix</p>
                </li>
                <li>
                    <p>Run</p>
                </li>
                <li>
                    <p>Cut</p>
                </li>
                <li>
                    <p>Drive</p>
                </li>
                <li>
                    <p>Forget</p>
                </li>
                <li>
                    <p>leave</p>
                </li>
            </ul>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p>Fight</p>
                </li>
                <li>
                    <p>Buy</p>
                </li>
                <li>
                    <p>Sell</p>
                </li>
                <li>
                    <p>Read</p>
                </li>
                <li>
                    <p>See</p>
                </li>
                <li>
                    <p>Arrive</p>
                </li>
                <li>
                    <p>Leave</p>
                </li>
                <li>
                    <p>Watch</p>
                </li>
                <li>
                    <p>spend</p>
                </li>
            </ul>
            <form id="unidade16grammar170" method="post" class="metade" style="margin-top:16px">
                <p><textarea class="full left-align" name="grammar170" placeholder="Responda aqui" required></textarea></p>
                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="16">
                <input type="hidden" name="atividade_id" value="170">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
                <img src="{{ asset('assets/img/dominating/unit16/grammar.jpg') }}" alt="estatua liberdade">
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

    $("#unidade16grammar168").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade16grammar168 input[type="text"]').each(function(index) {
            if (($('#unidade16grammar168 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade16grammar168 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade16grammar168'), respostas);
        } else {
            enviarAtividade($('#unidade16grammar168'), respostas);
        }
    });

    $("#unidade16grammar169").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade16grammar169 input[type="text"]').each(function(index) {
            if (($('#unidade16grammar169 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade16grammar169 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade16grammar169'), respostas);
        } else {
            enviarAtividade($('#unidade16grammar169'), respostas);
        }
    });
    $("#unidade16grammar170").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade16grammar170 textarea').attr("name") + '":"' + $('#unidade16grammar170 textarea').val() + '"}';
        if ($('#unidade16grammar170 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade16grammar170'), respostas);
        } else {
            enviarAtividade($('#unidade16grammar170'), respostas);
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
                    $('#unidade16grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade16grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade16grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade16grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade16grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade16grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);

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