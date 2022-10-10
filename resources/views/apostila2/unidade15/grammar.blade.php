@extends('layouts.template')
@section('titulo','Unit 15 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade15" data-etapa="grammar">
            <h3 class="barlow">UNIT 15</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
        <!--<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A – SIMPLE PAST (REGULAR VERBS)</h5>
            <p><b>Simple Past</b> is used to express that something <b>happened in a specific time in the past.</b></p>
            <table class="metade center-align">
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Present (infinitive)</h5>
                    </td>
                    <td colspan="2">
                        <h5 class="barlow">Past form (I,you,he,she,it,we,you,they)</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>To work</p>
                    </td>
                    <td>
                        <p>To dance</p>
                    </td>
                    <td>
                        <p>work<b>ed</b></p>
                    </td>
                    <td>
                        <p>Danc<b>ed</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>To start</p>
                    </td>
                    <td>
                        <p>To participate</p>
                    </td>
                    <td>
                        <p>Start<b>ed</b></p>
                    </td>
                    <td>
                        <p>Participat<b>ed</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>To play</p>
                    </td>
                    <td>
                        <p>To study</p>
                    </td>
                    <td>
                        <p>Play<b>ed</b></p>
                    </td>
                    <td>
                        <p>Studi<b>ed</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>To wash</p>
                    </td>
                    <td>
                        <p>To watch</p>
                    </td>
                    <td>
                        <p>Wash<b>ed</b></p>
                    </td>
                    <td>
                        <p>Watch<b>ed</b></p>
                    </td>
                </tr>
            </table>

            <div class="bordaVerde">
                <p>For (-) and (?) use <b>DID</b></p>
                <p>(+) <b>He</b> work<b>ed</b> for Marvel the last three years.</p>
                <p>(?) <b>Did he work</b> for Marvel the last three years?</p>
                <p>(-) <b>He didn’t work</b> for Marvel the last three years.</p>
                <p>*did + not = <b>didn’t</b></p>
            </div>
            <p style="margin-top:16px">We generally use <b>expressions of time</b> in the <b>Simple Past.</b> Sometimes, we don’t use them
                because they are implicit in the conversation.</p>
            <p><b>Expressions of time:</b> Yesterday, the day before yesterday, last week, last month, last
                year, two days ago, one week ago, one month ago etc.</p>
            <table class="metade center-align" style="margin-top:32px">
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Yes/no Questions</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Did you</b> research about Kris?</p>
                    </td>
                    <td>
                        <p><b>Yes, I researched</b> about him. / <b>Yes, I did.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Did he</b> decide what color to use?</p>
                    </td>
                    <td>
                        <p><b>No, he didn’t decided</b> the color. / <b>No, He didn’t.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Did they</b> solve the bug in the computer?</p>
                    </td>
                    <td>
                        <p><b>Yes, they solved</b> it. / <b>Yes, they did.</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h5 class="barlow">Wh-Questions</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>What did</b> she <b>do</b> yesterday?</p>
                    </td>
                    <td>
                        <p><b>She worked</b> on her new video.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Why did</b> you <b>stop</b> the project?</p>
                    </td>
                    <td>
                        <p>Because <b>I didn’t visit</b> the client to talk about it.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>When did</b> you <b>arrive</b> in L.A.</p>
                    </td>
                    <td>
                        <p>We arrived <b>last Tuesday.</b></p>
                    </td>
                </tr>
            </table>

            <h5 class="barlow"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Complete the sentences. Use the past simple form of the verb in brackets.</h5>
            <form id="unidade15grammar165" method="post">
                <p>1. You<input type="text" placeholder="Responda aqui" name="grammar165-1" required>(arrive) in England last week.</p>
                <p>2. My friend <input type="text" placeholder="Responda aqui" name="grammar165-2" required>(study) Ps at Gracon.</p>
                <p>3. I<input type="text" placeholder="Responda aqui" name="grammar165-3" required> (phone) you yesterday, but you weren’t at home.</p>
                <p>4. Last night, Laura and John <input type="text" placeholder="Responda aqui" name="grammar165-4" required> (plan) next jobs.</p>
                <p>5. John <input type="text" placeholder="Responda aqui" name="grammar165-5" required> (invite) us to his birthday party.</p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="15">
                <input type="hidden" name="atividade_id" value="165">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - What’s the question?</h5>
            <div class="bordaVerde">
                <ul class="lista-inline upper">
                    <li>
                        <p><b>how
                    </li>
                    </p></b>
                    <li>
                        <p><b>what
                    </li>
                    </p></b>
                    <li>
                        <p><b>where
                    </li>
                    </p></b>
                    <li>
                        <p><b>how long
                    </li>
                    </p></b>
                    <li>
                        <p><b>who
                    </li>
                    </p></b>
                </ul>
            </div>
            <div class="clear"></div>
            <form id="unidade15grammar166" method="post" style="margin-top:32px">
                <p>1. <input type="text" placeholder="Responda aqui" name="grammar166-1" required>Who did you visit<input type="text" placeholder="Responda aqui" name="grammar166-2" required>? I visited my cousin.</p>
                <p>2. <input type="text" placeholder="Responda aqui" name="grammar166-3" class="inputMedio left-align" required>? We talked about my job.</p>
                <p>3. <input type="text" placeholder="Responda aqui" name="grammar166-4" class="inputMedio left-align" required>? I lived in London.</p>
                <p>4. <input type="text" placeholder="Responda aqui" name="grammar166-5" class="inputMedio left-align" required>? She cried because she lost her file.</p>
                <p>5. <input type="text" placeholder="Responda aqui" name="grammar166-6" class="inputMedio left-align" required>? I stayed for a week.</p>
                <p>6. <input type="text" placeholder="Responda aqui" name="grammar166-7" class="inputMedio left-align" required>? They studied all morning.</p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="15">
                <input type="hidden" name="atividade_id" value="166">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="espacamento">
                <img src="{{ asset('assets/img/dominating/unit15/grammar.jpg') }}" alt="londres">
            </figure>
            <h5 class="barlow" style="margin-top:16px">3 - Create 5 sentences in the past with the verbs below and choose 2 to ask your friends.</h5>
            <ul class="lista-inline upper">
                <li>
                    <p>Play</p>
                </li>
                <li>
                    <p>Work</p>
                </li>
                <li>
                    <p>Watch</p>
                </li>
                <li>
                    <p>Study</p>
                </li>
                <li>
                    <p>Visit</p>
                </li>
                <li>
                    <p>Travel</p>
                </li>
                <li>
                    <p>Date</p>
                </li>
                <li>
                    <p>Copy</p>
                </li>
                <li>
                    <p>Save</p>
                </li>
            </ul>
            <form id="unidade15grammar167" method="post">
                <textarea name="grammar167-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="15">
                <input type="hidden" name="atividade_id" value="167">
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

    $("#unidade15grammar165").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade15grammar165 input[type="text"]').each(function(index) {
            if (($('#unidade15grammar165 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade15grammar165 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade15grammar165'), respostas);
        } else {
            enviarAtividade($('#unidade15grammar165'), respostas);
        }
    });

    $("#unidade15grammar166").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade15grammar166 input[type="text"]').each(function(index) {
            if (($('#unidade15grammar166 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade15grammar166 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade15grammar166'), respostas);
        } else {
            enviarAtividade($('#unidade15grammar166'), respostas);
        }
    });

    $("#unidade15grammar167").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade15grammar167 textarea').attr("name") + '":"' + $('#unidade15grammar167 textarea').val() + '"}';
        if ($('#unidade15grammar167 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade15grammar167'), respostas);
        } else {
            enviarAtividade($('#unidade15grammar167'), respostas);
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
                    $('#unidade15grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade15grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade15grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade15grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade15grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade15grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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