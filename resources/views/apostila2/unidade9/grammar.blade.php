@extends('layouts.template')
@section('titulo','Unit 9 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade9" data-etapa="grammar">
            <h3 class="barlow">UNIT 9 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!--<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - SUPERLATIVE</h5>
                <table class="metade center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">Short adjetive = the adj(est)</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Long adjective = the most + adj</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p> (calm) Spider man is <b>the</b> calm<b>est</b> hero.</p>
                        </td>
                        <td>
                            <p> (dynamic) ILM has <b>the most</b> dynamic team.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>(crazy) Civil War was <b>the</b> crazi<b>est</b> movie.</p>
                        </td>
                        <td>
                            <p>(nervous) Hulk is <b>the most</b> nervous avenger.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>(strong) Beast is <b>the</b> strong<b>est</b> X-Men.</p>
                        </td>
                        <td>
                            <p>(expensive) Ps has <b>the most</b> efficient set of tools.</p>
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
                            <p>Best</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Bad</p>
                        </td>
                        <td>
                            <p>Worst</p>
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
                <form id="unidade9grammar420" method="post">
                    <table class="metade center-align">
                        <tr>
                            <td></td>
                            <td>
                                <h5 class="barlow">Photoshop</h5>
                            </td>
                            <td>
                                <h5 class="barlow">Corel</h5>
                            </td>
                            <td>
                                <h5 class="barlow">Phase One</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Price</b></h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-1" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-2" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-3" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Level of difficulty</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-4" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-5" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-6" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Speed</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-7" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-8" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-9" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Learning curve</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-10" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-11" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-12" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Set of tools</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-10" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-11" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-12" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Collection management</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-10" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-11" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-12" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Technical support</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-10" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-11" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-12" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow"><b>Tutorials</h5>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-10" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-11" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                            <td>
                                <p><input type="text" name="grammar420-12" class="left-align" placeholder="Responda aqui" required /></p>
                            </td>
                        </tr>
                    </table>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="9">
                    <input type="hidden" name="atividade_id" value="420">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">2 - Look at chart, compare the programs and write sentences according to the instructions.</h5>
                <h5 class="barlow"><b>Example:</b></h5>
                <p>(Corel / good / for students to learn) / Corel <b>is the best</b> for students to learn.</p>
                <form id="unidade9grammar139" method="post" style="margin-top: 32px">
                    <div class="metade">
                        <p>
                            <p>
                                1. (Corel / expensive / in the Market)
                                <input type="text" name="grammar139-1" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                2. (Phase One/ have / difficult / for beginners)
                                <input type="text" name="grammar139-2" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                3. (Corel / fast / in the market )
                                <input type="text" name="grammar139-3" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                4. ( Phase one / short / learning curve /for professional programmers )
                                <input type="text" name="grammar139-4" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                5. (Corel / good / set of tools / for editing backgrounds)
                                <input type="text" name="grammar139-5" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                6. (Photo shop / bad / photos collection management)
                                <input type="text" name="grammar139-6" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                7. (Corel / efficient / online technical support )
                                <input type="text" name="grammar139-7" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                            <p>
                                8. (Photoshop / complete /tutorials on youtube)
                                <input type="text" name="grammar139-8" class="full left-align" placeholder="Responda aqui" required />
                            </p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="9">
                    <input type="hidden" name="atividade_id" value="139">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">3 - In groups, talk to your friends and decide what is the best FPS and the best RPG games in the market. Justify your answer using sentences in the superlative.</h5>
                <form id="unidade9grammar140" method="post">
                    <textarea name="grammar140-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="9">
                    <input type="hidden" name="atividade_id" value="140">
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

    $("#unidade9grammar420").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade9grammar420 input[type="text"]').each(function(index) {
            if (($('#unidade9grammar420 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade9grammar420 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade9grammar420'), respostas);
        } else {
            enviarAtividade($('#unidade9grammar420'), respostas);
        }
    });

    $("#unidade9grammar139").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade9grammar139 input[type="text"]').each(function(index) {
            if (($('#unidade9grammar139 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade9grammar139 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade9grammar139'), respostas);
        } else {
            enviarAtividade($('#unidade9grammar139'), respostas);
        }
    });


    $("#unidade9grammar140").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade9grammar140 textarea').attr("name") + '":"' + $('#unidade9grammar140 textarea').val() + '"}';
        if ($('#unidade9grammar140 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade9grammar140'), respostas);
        } else {
            enviarAtividade($('#unidade9grammar140'), respostas);
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
                    $('#unidade9grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade9grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade9grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade9grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade9grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade9grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
