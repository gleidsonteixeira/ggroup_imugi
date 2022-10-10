@extends('layouts.template')
@section('titulo','Unit 10 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade10" data-etapa="grammar">
            <h3 class="barlow">UNIT 10 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 10/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - FUTURE - TO BE + GOING TO </h5>
                <p><b>To be + going to</b> is used to express future plans or intensions. Usually there are clear
                    and strong evidences for these facts to happen in the future. It’s also known as
                    <b>Immediate future</b>.
                    <p class="center-align caixa"><b>Future plan/intension = Subject + am/are/is + going to + verb(infinitive)</b></p>
                </p>
                <table class="metade center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">Subject</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Am/are/is</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Verb(inf)</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Future plan / intension</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p> John</p>
                        </td>
                        <td>
                            <p> is</p>
                        </td>
                        <td>
                            <p> travel</p>
                        </td>
                        <td>
                            <p> John <b>is going to travel</b> to NY next week.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>I</b></p>
                        </td>
                        <td>
                            <p>am</p>
                        </td>
                        <td>
                            <p>participate</p>
                        </td>
                        <td>
                            <p><b>I am going to participate</b> of a new modeling course.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>We</p>
                        </td>
                        <td>
                            <p>are</p>
                        </td>
                        <td>
                            <p>visit</p>
                        </td>
                        <td>
                            <p>We <b>are going to visit</b> dreamworks studios next month.</p>
                        </td>
                    </tr>
                </table>
                <p>Going to (more emphatic) = Gonna (less emphatic)</p>
                <h5 class="barlow" style="margin-top: 16px">B - SOME/ ANY / NO</h5>

                <table class="metade center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">SOME (+)</h5>
                        </td>
                        <td>
                            <p>PART</p>
                        </td>
                        <td>
                            <p>We're gonna see some nice tools today.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5 class="barlow">ANY (?) (-)</h5>
                        </td>
                        <td>
                            <p>ALL</p>
                        </td>
                        <td>
                            <p><b>Do you</b> have <b>any</b> doubt?</p>
                            <p>No teacher, <b>I don't have</b> any doubt.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5 class="barlow">NO (+)</h5>
                        </td>
                        <td>
                            <p>ZERO</p>
                        </td>
                        <td>
                            <p>No teacher, <b>I have no</b> doubt.</p>
                        </td>
                    </tr>
                </table>
                <div class="clear"></div>

                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Complete each sentence. Use GOING TO and the verb in brackets:</h5>
                <form id="unidade10grammar143" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. <input type="text" name="grammar143-1" placeholder="Responda aqui" required /> <b>Are you going to buy</b>
                                <input type="text" name="grammar143-2" placeholder="Responda aqui" required /> (you / buy) a new bike?
                            </p>
                            <p>
                                2. John <input type="text" name="grammar143-3" placeholder="Responda aqui" required /> (not / finish) in time.
                            </p>
                            <p>
                                3. I <input type="text" name="grammar143-4" placeholder="Responda aqui" required /> (buy) some comic books.
                            </p>
                            <p>
                                4. <input type="text" name="grammar143-5" placeholder="Responda aqui" required /> (Mr. Smith/ present) Cinema 4D?
                            </p>
                            <p>
                                5. Who <input type="text" name="grammar143-6" placeholder="Responda aqui" required /> (edit) the last video?
                            </p>
                            <p>
                                6. John and Akira <input type="text" name="grammar143-7" placeholder="Responda aqui" required /> (not / travel) to NY.
                            </p>
                            <p>
                                7. Gleen <input type="text" name="grammar143-8" placeholder="Responda aqui" required /> (take) a holiday.
                            </p>
                            <p>
                                8. What time <input type="text" name="grammar143-9" placeholder="Responda aqui" required /> (you / phone) me?
                            </p>
                            <p>
                                9. Where <input type="text" name="grammar143-10" placeholder="Responda aqui" required /> (we / eat) tonight?
                            </p>
                            <p>
                                10. I <input type="text" name="grammar143-11" placeholder="Responda aqui" required /> (not /participate) of the meeting !
                            </p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="10">
                    <input type="hidden" name="atividade_id" value="143">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">2 - What are you going to do next summer? Write sentences:</h5>
                <p>.... Next summer I’m going to have a great holiday. I’m going to ....</p>
                <form id="unidade10grammar144" method="post">
                    <textarea name="grammar144-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="10">
                    <input type="hidden" name="atividade_id" value="144">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <figure>
                    <img src="{{ asset('assets/img/dominating/unit10/grammar.jpg') }}" alt="pensando em ferias">
                </figure>
                <h5 class="barlow" style="margin-top: 16px">3 - Complete the sentences using SOME / ANY / NO</h5>
                <form id="unidade10grammar145" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. Do you use <input type="text" name="grammar145-1" placeholder="Responda aqui" required /> Cinema 4D tools?
                            </p>
                            <p>
                                2. Gleen doesn’t know <input type="text" name="grammar145-2" placeholder="Responda aqui" required /> tool. It’s a new software for him.
                            </p>
                            <p>
                                3. Mr Smith knows <input type="text" name="grammar145-3" placeholder="Responda aqui" required /> good tools in Cinema 4D.
                            </p>
                            <p>
                                4. John has <input type="text" name="grammar145-4" placeholder="Responda aqui" required /> Iron man Comic Book. He does’t like it.
                            </p>
                            <p>
                                5. Laura is gonna use <input type="text" name="grammar145-5" placeholder="Responda aqui" required /> special effects in her video.
                            </p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="10">
                    <input type="hidden" name="atividade_id" value="145">
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

    $("#unidade10grammar143").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade10grammar143 input[type="text"]').each(function(index) {
            if (($('#unidade10grammar143 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade10grammar143 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade10grammar143'), respostas);
        } else {
            enviarAtividade($('#unidade10grammar143'), respostas);
        }
    });

    $("#unidade10grammar144").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade10grammar144 textarea').attr("name") + '":"' + $('#unidade10grammar144 textarea').val() + '"}';
        if ($('#unidade10grammar144 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade10grammar144'), respostas);
        } else {
            enviarAtividade($('#unidade10grammar144'), respostas);
        }
    });

    $("#unidade10grammar145").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade10grammar145 input[type="text"]').each(function(index) {
            if (($('#unidade10grammar145 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade10grammar145 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade10grammar145'), respostas);
        } else {
            enviarAtividade($('#unidade10grammar145'), respostas);
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
                    $('#unidade10grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade10grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade10grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade10grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade10grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade10grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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