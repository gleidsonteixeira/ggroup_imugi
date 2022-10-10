@extends('layouts.template')
@section('titulo','Unit 23 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade23" data-etapa="grammar">
            <h3 class="barlow">UNIT 23</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 23/03_GRAMMAR/GRAMMAR_23.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - REPORTED SPEECH (3) – Reporting Imperatives.</h5>

                <table class="espacamento left-align borderedfull">
                    <tr>
                        <td rowspan="3"><h5 class="barlow">Reported Speech</h5></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Reporting Statements.</p>
                            <p>Reporting Questions</p>
                            <p><b>Reporting commands and Orders - Imperatives</b></p>
                        </td>
                    </tr>
                </table>

                <table class="espacamento left-align bordered" style="margin-top:32px">
                    <tr>
                        <td><h5 class="barlow center-align">DIRECT SPEECH</td>
                        <td><h5 class="barlow center-align">REPORTED SPEECH</td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Jake :</b> John, <b>call</b> Akira. He needs help.</p></td>
                        <td><p>Jake <b>told John to call</b> Akira. </p></td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Laura :</b> John, <b>don’t call</b> him in the morning.</p></td>
                        <td><p>Laura told John <b>not to call</b> Akira in the morning.</p></td>
                    </tr>
                    <tr class="bordered">
                        <td><p><b>Akira :</b> John, please, <b>get</b> to the office 3 pm.</p></td>
                        <td><p>Akira asked John <b>to get</b> to the office at 03 pm.</p></td>
                    </tr>
                </table>

                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow" style="margin-top:32px">1 - Imperatives:</h5>
                <h5 class="barlow" style="margin-top:16px"><b>Examples:</b></h5>
                <p><b>* The teacher always says to us, “Study very hard.”</b></p>
                <p><b>The teacher always tells us <u>TO study hard.</u></b></p>
                <p style="margin-top:32px"><b>* The teacher says, “Don’t talk in the class.”</b></p>
                <p><b>The teacher tells us <u>NOT TO talk in the class.</u></b></p>

                <h5 class="barlow"><b>Do the same:</b></h5>

                <form id="unidade23grammar674" method="post" class="metade" style="margin-top:32px">
                    <p>
                        <p>
                            1. Woman to the porter: “Carry my suitcases.”
                            <input type="text" name="grammar674-1" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            2. Policeman to a man: “Describe your car.”
                            <input type="text" name="grammar674-2" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            3. Mother to the boy: “Don’t hurt yourself.”
                            <input type="text" name="grammar674-3" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4. The robber to the man: “Give me your money.”
                            <input type="text" name="grammar674-4" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5. Teacher to the student: “Give me your book.”
                            <input type="text" name="grammar674-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            6. The man to us: “Don’t park here.”
                            <input type="text" name="grammar674-6" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            7. Woman to her husband: “Don’t forget to take your key.”
                            <input type="text" name="grammar674-7" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            8. Mr. Smith to her son: “Don’t put your books on this desk.”
                            <input type="text" name="grammar674-8" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            9. Young man to the young woman: “Give me one of your photographs.”
                            <input type="text" name="grammar674-9" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            10. The man to his son: “Hurry up! Don’t miss the bus!”
                            <input type="text" name="grammar674-10" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            11. The woman to her daughter: “Tidy your room, don’t waste your time.”
                            <input type="text" name="grammar674-11" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="23">
                    <input type="hidden" name="atividade_id" value="674">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit23/grammar.jpg') }}" alt="arrumar cama">
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

    $("#unidade23grammar674").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade23grammar674 input[type="text"]').each(function(index) {
            if (($('#unidade23grammar674 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade23grammar674 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade23grammar674'), respostas);
        } else {
            enviarAtividade($('#unidade23grammar674'), respostas);
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
                    $('#unidade23grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade23grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade23grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade23grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade23grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade23grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
