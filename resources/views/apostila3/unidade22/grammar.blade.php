@extends('layouts.template')
@section('titulo','Unit 22 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade22" data-etapa="grammar">
            <h3 class="barlow">UNIT 22</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 22/03_GRAMMAR/GRAMMAR_22.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - REPORTED SPEEH (2) – FOCUS ON VERB FORMS</h5>
                <p><b>USE</b></p>
                <h5 style="margin-top:32px"><b>Example:</b></h5>
                <h5 class="barlow">Direct speech</h5>
                <p><b>John :</b> Guys, I have a meeting till late so I won’t arrive on time for the class.</p>
                <h5 class="barlow">Reported Speech</h5>
                <p><b>Jake :</b> Guys, what about John?</p>
                <p><b>Students :</b> He said he had a meeting till late and he wouldn’t arrive on time for the class.</p>

                <h5 class="barlow" style="margin-top:32px"><b>Example 2</b></h5>
                <h5 class="barlow">Direct Speech</h5>
                <p><b>Akira : I can’t</b> finish it by myself. I <b>need</b> help.</p>
                <h5 class="barlow">Reported speech</h5>
                <p><b>Jake :</b> Guys , What do you know about Akira? Is he ok with the project?</p>
                <p><b>Laura :</b> Jake, Akira said he <b>couldn’t</b> finish the job by himself and that he <b>needed</b> help.</p>

                <table class="espacamento left-align" style="margin-top:32px">
                    <tr>
                        <td>
                            <h5 class="barlow">DIRECT SPEECH</h5>
                            <p>Simple Present</p>
                            <p>Simple Past</p>
                            <p>Present Continuous</p>
                            <p>Past Continuous</p>
                            <p>Present Perfect</p>
                            <p>Present Perfect Continuous</p>
                            <p>Past Perfect</p>
                            <p>Be (present) + Going to</p>
                            <p>Will</p>
                            <p>Can</p>
                            <p>May</p>
                            <p>Must</p>
                            <p>Might</p>
                            <p>Should</p>
                            <p>Could</p>
                            <p>Would</p>
                        </td>
                        <td>
                            <h5 class="barlow">REPORTED SPEECH</h5>
                            <p>Simple Past</p>
                            <p>Simple past (No change)/Past Perfect</p>
                            <p>Past Continuous</p>
                            <p>Past Continuous or Past Perfect Continuous</p>
                            <p>Past Perfect</p>
                            <p>Past Perfect Continuous</p>
                            <p>Past Perfect (no change)</p>
                            <p>Be (past) + Going to</p>
                            <p>Would</p>
                            <p>Could</p>
                            <p>Might</p>
                            <p>Had to</p>
                            <p>No change</p>
                            <p>No change</p>
                            <p>No change</p>
                            <p>No change</p>
                        </td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">
                    1 - Gavin has worked for Bisco Supermarkets for thirty years. He can still remember his
                    job interview after leaving school and he can remember the questions that the interview
                    asked him:
                </h5>
                <h5 class="barlow" style="margin-top:32px"><b>Example:</b></h5>
                <table class="espacamento left-align">
                    <tr>
                        <td><p>“Where do you live?”</p></td>
                        <td><p><b>She asked him where he lived</b></p></td>

                    </tr>
                    <tr>
                        <td><p>“Have you worked before?”</p></td>
                        <td><p><b>She asked him if he had worked before.</b></p></td>
                    </tr>
                </table>

                <form id="unidade22grammar670" method="post" class="metade" style="margin-top:32px">
                    <p>
                        <p>1. “Why do you want the job?”</p>
                        <p>She asked him <input type="text" name="grammar670-1" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>2. “How did you hear about it?”</p>
                        <p>She asked him <input type="text" name="grammar670-2" class="inputMedio left-align" placeholder="Responda aqui" required /></p>
                        <p>“Are you fit?”</p>
                        <p>She asked him <input type="text" name="grammar670-3" class="inputMedio left-align" placeholder="Responda aqui" required /></p></p>
                        <p>“Can you work on Saturdays?”</p>
                        <p>She asked him <input type="text" name="grammar670-4" class="inputMedio left-align" placeholder="Responda aqui" required /></p></p>
                        <p>“How will you travel to work?<input type="text" name="grammar670-1" class="full left-align" placeholder="Responda aqui" required /></p></p>
                        <p>
                            3. “Have you got a bicycle?”
                            <input type="text" name="grammar670-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4. “How much do you expect to earn?”
                            <input type="text" name="grammar670-6" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5. “When can you start?”
                            <input type="text" name="grammar670-7" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="22">
                    <input type="hidden" name="atividade_id" value="670">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow" style="margin-top:16px">2 - What does the policeman want to know?</h5>
                <figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit22/grammar.jpg') }}" alt="casal em paris">
                </figure>
                <div class="clear"></div>
                <form id="unidade22grammar671" method="post" class="metade" style="margin-top:16px">
                    <p>
                        <p>1. What’s your name?</p>
                        <p><b>The policeman wants to know what my name is.</b></p>
                        <p>
                            2. What’s your job?
                            <input type="text" name="grammar671-1" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            3. Where do you work?
                            <input type="text" name="grammar671-2" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4. Where do you live?
                            <input type="text" name="grammar671-3" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5. Where were you yesterday?
                            <input type="text" name="grammar671-4" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            6. Why are you in London?
                            <input type="text" name="grammar671-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            7. When did you come?
                            <input type="text" name="grammar671-6" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            8. How did you come?
                            <input type="text" name="grammar671-7" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            9. Where’s your ticket?
                            <input type="text" name="grammar671-8" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            10. Have you ever been in London?
                            <input type="text" name="grammar671-9" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            11. Do you know anyone in London?
                            <input type="text" name="grammar671-10" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            12. Were you in London last month?
                            <input type="text" name="grammar671-11" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            13. Are you telling the truth?
                            <input type="text" name="grammar671-12" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="22">
                    <input type="hidden" name="atividade_id" value="671">
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

    $("#unidade22grammar670").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade22grammar670 input[type="text"]').each(function(index) {
            if (($('#unidade22grammar670 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade22grammar670 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade22grammar670'), respostas);
        } else {
            enviarAtividade($('#unidade22grammar670'), respostas);
        }
    });

    $("#unidade22grammar671").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade22grammar671 input[type="text"]').each(function(index) {
            if (($('#unidade22grammar671 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade22grammar671 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade22grammar671'), respostas);
        } else {
            enviarAtividade($('#unidade22grammar671'), respostas);
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
                    $('#unidade22grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade22grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade22grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade22grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade22grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade22grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
