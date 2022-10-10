@extends('layouts.template')
@section('titulo','Unit 8 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade8" data-etapa="grammar">
            <h3 class="barlow">UNIT 8 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!--<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - COMPARATIVE (SUPERIORITY / EQUALITY)</h5>
                <table class="metade center-align">
                    <tr>
                        <td colspan="2">
                            <h5 class="barlow"><b>SUPERIORITY</b></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5 class="barlow">Short adjetive = adj(er) than</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Long adjective = more + adj + than</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>(fast)</b> Python is faster than Java.</p>
                        </td>
                        <td>
                            <p><b>(intuitive)</b> Python is more intuitive than Java.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>(easy)</b> Drawing is easier than coding.</p>
                        </td>
                        <td>
                            <p><b>(interesting)</b> Drawing is more intuitive than Planning.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>(cheap)</b> Corel Draw is cheaper than Ps.</p>
                        </td>
                        <td>
                            <p><b>(expensive)</b> Mac is more expensive than Dell.</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h5 class="barlow"><b>EQUALITY</b></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5 class="barlow">Short adjective = as + adj + as</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Long adjective = as + adj + as</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>(cool)</b> Colding is as cool as designing.</p>
                        </td>
                        <td>
                            <p><b>(beautiful)</b> Picture 1 is as beautiful as number 2.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>(nice)</b> Cinema 4D is as nice as Blender.</p>
                        </td>
                        <td>
                            <p><b>(famous)</b> Pixar is as famous as dreamworks.</p>
                        </td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top: 16px">B - IRREGULAR ADJECTIVES</h5>

                <table class="metade center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">Adjective</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Comparative</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Good / Well</p>
                        </td>
                        <td>
                            <p>Better</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Bad</p>
                        </td>
                        <td>
                            <p>Worse</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Far</p>
                        </td>
                        <td>
                            <p>Further / farther</p>
                        </td>
                    </tr>
                </table>
                <div class="clear"></div>

                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
                <h5 class="barlow">Table 1.</h5>
                <form id="unidade8grammar419" method="post">
                    <table class="metade center-align">
                        <tr>
                            <td></td>
                            <td>
                                <h5 class="barlow">Python</h5>
                            </td>
                            <td>
                                <h5 class="barlow">Java</h5>
                            </td>
                            <td>
                                <h5 class="barlow">C</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Price</b></h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-1" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-2" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-3" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Level of difficulty</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-4" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-5" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-6" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Speed</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-7" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-8" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-9" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Learning curve</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-10" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-11" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar419-12" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                    </table>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="8">
                    <input type="hidden" name="atividade_id" value="419">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">2 - Look at chart, compare the programs and write sentences according to the instructions.</h5>
                <h5><b>Example:</b></h5>
                <p>(Python / cheap / Java) Python is cheaper than Java.</p>
                <form id="unidade8grammar135" method="post" style="margin-top: 32px">
                    <div class="metade">
                        <p>
                            <p>
                                1. (Java / expensive / C)
                                <input type="text" name="grammar135-1" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                2. (Python / cheap / Java)
                                <input type="text" name="grammar135-2" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                3. (Python / easy / C)
                                <input type="text" name="grammar135-3" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                4. (C / slow / Java)
                                <input type="text" name="grammar135-4" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                5. (Java / long / C)
                                <input type="text" name="grammar135-5" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                6. (Python / fast / C)
                                <input type="text" name="grammar135-6" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                7. (C / difficult / Python)
                                <input type="text" name="grammar135-7" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                8. (Python / slow / Java)
                                <input type="text" name="grammar135-8" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                9. (Python / expensive / C)
                                <input type="text" name="grammar135-9" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                10. (C / Short / Python)
                                <input type="text" name="grammar135-10" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="8">
                    <input type="hidden" name="atividade_id" value="135">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">3 - Based on the table 1, select an appropriate program for each company. In groups, compare the options and justify your answer.</h5>
                <form id="unidade8grammar136" method="post">
                    <table class="metade center-align">
                        <tr>
                            <td>
                                <h5 class="barlow">COMPANY A</h5>
                            </td>
                            <td>
                                <h5 class="barlow">COMPANY B</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Computers: Very fast</p>
                            </td>
                            <td>
                                <p>Computers: Medium speed.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Budget: Limited.</p>
                            </td>
                            <td>
                                <p>Budget: Enough</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Team: Young programmers.</p>
                            </td>
                            <td>
                                <p>Team: Experienced Old programmers</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Dead Line: Short</p>
                            </td>
                            <td>
                                <p>Dead Line: Long</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Doubt: <b>Python or Java</b></p>
                            </td>
                            <td>
                                <p>Doubt: <b>C or Java</b></p>
                            </td>
                        </tr>
                    </table>
                    <textarea name="grammar136-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="8">
                    <input type="hidden" name="atividade_id" value="136">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/dominating/unit8/grammar.jpg') }}" alt="java python">
                    </figure>
                </div>
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

    $("#unidade8grammar419").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade8grammar419 input[type="text"]').each(function(index) {
            if (($('#unidade8grammar419 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade8grammar419 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade8grammar419'), respostas);
        } else {
            enviarAtividade($('#unidade8grammar419'), respostas);
        }
    });

    $("#unidade8grammar135").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade8grammar135 input[type="text"]').each(function(index) {
            if (($('#unidade8grammar135 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade8grammar135 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade8grammar135'), respostas);
        } else {
            enviarAtividade($('#unidade8grammar135'), respostas);
        }
    });

    $("#unidade8grammar136").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade8grammar136 textarea').attr("name") + '":"' + $('#unidade8grammar136 textarea').val() + '"}';
        if ($('#unidade8grammar136 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade8grammar136'), respostas);
        } else {
            enviarAtividade($('#unidade8grammar136'), respostas);
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
                    $('#unidade8grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade8grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade8grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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