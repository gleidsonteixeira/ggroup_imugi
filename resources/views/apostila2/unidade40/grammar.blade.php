@extends('layouts.template')
@section('titulo','Unit 40 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade40" data-etapa="grammar">
            <h3 class="barlow">UNIT 40 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 40/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - RELATIVE PRONOUNS – WHICH,THAT</h5>
                <div class="metade">
                    <table class="espacamento center-align bordered">
                        <tr>
                            <td>
                                <h5 class="barlow"><b>RELATIVE PRONOUNS</b></h5>
                            </td>
                            <td>
                                <h5 class="barlow">EXAMPPLES</h5>
                            </td>
                        </tr>
                        <tr class="bordered">
                            <td>
                                <h5 class="barlow">WHICH (Used for things, animals and places)</h5>
                            </td>
                            <td>
                                <p>A: I watched the anime.</p>
                                <p>B: The anime shows a mouse speaking.</p>
                                <p>A+B= I watched the anime which shows a mouse speaking. (Defining sentence)</p><br>
                                <p>A: The anime was fantastic.</p>
                                <p>B: It shows a mouse speaking</p>
                                <p>A+B= The anime, which shows a mouse speaking, is fantastic. (extra information)
                            </td>
                        </tr>
                        <tr class="bordered">
                            <td>
                                <h5 class="barlow">THAT (Used for people and things)</h5>
                            </td>
                            <td>
                                <p>I watched the anime which/that shows a mouse speaking. (Defining sentence)</p><br>
                                <p>That is used only in defining sentences. We don't use it in extra information sentences.</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <h5 class="barlow" style="margin-top: 32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Fill in the blanks with WHICH.</h5>
                <form id="unidade40grammar290" style="margin-top:32px" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. What’s the name of the river <input type="text" name="grammar290-1" placeholder="Responda aqui" required /> goes through the town?
                            </p>
                            <p>
                                2. Where is the picture <input type="text" name="grammar290-2" placeholder="Responda aqui" required /> was on the wall?
                            </p>
                            <p>
                                3. She always asks me questions <input type="text" name="grammar290-3" placeholder="Responda aqui" required /> are difficult to answer.
                            </p>
                            <p>
                                4. A coffee-maker is a machine <input type="text" name="grammar290-4" placeholder="Responda aqui" required /> makes coffee
                            </p>
                            <p>
                                5. Why does he always wear clothes <input type="text" name="grammar290-5" placeholder="Responda aqui" required /> are too small for him?
                            </p>
                        </p>
                    </div>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="40">
                    <input type="hidden" name="atividade_id" value="290">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>

            <h5 class="barlow">2 - Rewrite the sentences using WHICH / THAT.</h5>
            <form id="unidade40grammar291" style="margin-top:32px" method="post">
                <div class="metade">
                    <p>
                        <p>
                            1 - This is the package. It came in the mail today.<br>
                            <input type="text" name="grammar291-1" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            2 - I like the songs. They tell about life in the country.<br>
                            <input type="text" name="grammar291-2" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            3 - A building was destroyed in the fire. It has now been rebuilt.<br>
                            <input type="text" name="grammar291-3" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4 - A bus goes to the airport. It runs every half hour.<br>
                            <input type="text" name="grammar291-4" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5 - There is a new house in our neighborhood. It has a swimming pool.<br>
                            <input type="text" name="grammar291-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            6 - Is the river very large? It flows through that town.<br>
                            <input type="text" name="grammar291-6" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            7 - We are studying sentences. They contain adjective clauses.<br>
                            <input type="text" name="grammar291-7" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>
                </div>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="40">
                <input type="hidden" name="atividade_id" value="291">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">3 - Construct sentences with the cue words. Use WHICH or WHO.</h5>
            <form id="unidade40grammar292" style="margin-top:32px" method="post">
                <p>
                    <p>1. vase / costs $500. Don’t touch it! <input type="text" name="grammar292-1" placeholder="Responda aqui" required /> That’s the vase which costs $500. <input type="text" name="grammar291-2" placeholder="Responda aqui" required /></p>
                    <p>2. girl / is always late. Don’t wait for her! <input type="text" name="grammar292-3" placeholder="Responda aqui" required /> That’s the girl who is always late. <input type="text" name="grammar291-4" placeholder="Responda aqui" required /></p>
                    <p>3. letter / came for my father. Don’t open it! <input type="text" name="grammar292-5" placeholder="Responda aqui" required /></p>
                    <p>4. man / gave me the wrong directions. Don’t listen to him! <input type="text" name="grammar292-6" placeholder="Responda aqui" required /></p>
                    <p>5. dress / got dirty. Don’t wear it! <input type="text" name="grammar292-7" placeholder="Responda aqui" required /></p>
                    <p>6. bus / goes to New York. Don’t get on it! <input type="text" name="grammar292-8" placeholder="Responda aqui" required /></p>
                    <p>7. woman / told everyone my secret. Don’t tell her! <input type="text" name="grammar292-9" placeholder="Responda aqui" required /></p>
                </p>
                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="40">
                <input type="hidden" name="atividade_id" value="292">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div style="margin-top: 36px">
                <figure>
					<img src="{{ asset('assets/img/dominating/unit40/grammar.png') }}" alt="vaso hercules">
				</figure>
            </div>

            <h5 class="barlow" style="margin-top: 36px">4 - Think of a game, movie, anime and write 5 sentences about it. Use WHICH/THAT to give information about it.</h5>
            <form id="unidade40grammar293" method="post">
                <textarea name="grammar293-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="40">
                <input type="hidden" name="atividade_id" value="293">
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

    $("#unidade40grammar290").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade40grammar290 input[type="text"]').each(function(index) {
            if (($('#unidade40grammar290 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade40grammar290 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade40grammar290'), respostas);
        } else {
            enviarAtividade($('#unidade40grammar290'), respostas);
        }
    });

    $("#unidade40grammar291").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade40grammar291 input[type="text"]').each(function(index) {
            if (($('#unidade40grammar291 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade40grammar291 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade40grammar291'), respostas);
        } else {
            enviarAtividade($('#unidade40grammar291'), respostas);
        }
    });

    $("#unidade40grammar292").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade40grammar292 input[type="text"]').each(function(index) {
            if (($('#unidade40grammar292 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade40grammar292 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade40grammar292'), respostas);
        } else {
            enviarAtividade($('#unidade40grammar292'), respostas);
        }
    });

    $("#unidade40grammar293").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade40grammar293 textarea').attr("name") + '":"' + $('#unidade40grammar293 textarea').val() + '"}';
        if ($('#unidade40grammar293 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade40grammar293'), respostas);
        } else {
            enviarAtividade($('#unidade40grammar293'), respostas);
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
                    $('#unidade40grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade40grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade40grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade40grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade40grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade40grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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