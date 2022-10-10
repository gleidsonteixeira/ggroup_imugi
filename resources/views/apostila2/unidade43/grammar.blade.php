@extends('layouts.template')
@section('titulo','Unit 43 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade43" data-etapa="grammar">
            <h3 class="barlow">UNIT 43</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 43/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A - CONJUNCTIONS FOR ADDING INFORMATION.</h5>
            <p>We use <b>adding connectors</b> as the name says per se, to connect sentences expressing
                the idea of adding information.</p>
            <div class="metade">
                <table class="center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">Adding information</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>And , Above all , and also , Furthermore , Besides that , Moreover</p>
                        </td>
                    </tr>
                </table>

                <table class="center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">Sentences / information</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Connected sentences / information</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>a.Blender is a <b>nice</b> software.</p>
                        </td>
                        <td>
                            <p>a+b+c</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>b.Blender is a <b>cheap</b> software.</p>
                        </td>
                        <td>
                            <p>Blender is a nice <b>and</b> cheap software.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>c.Blender is the <b>most friendly</b> software in the market.</p>
                        </td>
                        <td>
                            <p><b>Besides that,</b> it's the most friendly software in the market.</p>
                        </td>
                    <tr>
                </table>
            </div>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Use one of the words in the box to complete the sentences. You MUST NOT use and.</h5>
            <p class="bordaVerde">Besides that / Furthermore / Also / Moreover / In addition / as well as / and</p>
            <form id="unidade43grammar308" method="post">
                <p>1. Their team has got the best players
                    <input type="text" placeholder="Responda aqui" name="grammar308-1" class="inputpequeno left-align" required>
                    their coach is fantastic.</p>
                <p>2. Anna is talented at music
                    <input type="text" placeholder="Responda aqui" name="grammar308-2" class="inputpequeno left-align" required> art.</p>
                <p>3. In London we saw the Queen’s palace
                    <input type="text" placeholder="Responda aqui" name="grammar308-3" class="inputpequeno left-align" required>
                    we visited the British Museum.</p>
                <p>4. When I was young, I wanted to become a doctor. I
                    <input type="text" placeholder="Responda aqui" name="grammar308-4" class="inputpequeno left-align" required>
                    wanted to be famous.</p>
                <p>5. The service at this restaurant is excellent
                    <input type="text" placeholder="Responda aqui" name="grammar308-5" class="inputpequeno left-align" required>
                    the food is delicious.</p>
                <p>6. Roger works very hard to help his parents
                    <input type="text" placeholder="Responda aqui" name="grammar308-6" class="inputpequeno left-align" required>
                    he’s also a good student.</p>
                <p>7. I’m keen on Ice cream
                    <input type="text" placeholder="Responda aqui" name="grammar308-7" class="inputpequeno left-align" required>
                    chocolate.</p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="43">
                <input type="hidden" name="atividade_id" value="308">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - Combine the following sentences using an appropriate CONJUNCTION.</h5>
            <form class="metade" id="unidade43grammar309" method="post">
                <p>
                    1 - She is pretty. She is intelligent.
                    <input type="text" placeholder="Responda aqui" name="grammar309-1" class="full left-align" required>
                </p>
                <p>
                    2 - He is greedy. He is dishonest.
                    <input type="text" placeholder="Responda aqui" name="grammar309-2" class="full left-align" required>
                </p>
                <p>
                    3 - God made small things. God made great things.
                    <input type="text" placeholder="Responda aqui" name="grammar309-3" class="full left-align" required>
                </p>
                <p>
                    4 - Martin is not tall. His father is not tall.
                    <input type="text" placeholder="Responda aqui" name="grammar309-4" class="full left-align" required>
                </p>
                <p>
                    5 - She is not honest. She is not hard working.
                    <input type="text" placeholder="Responda aqui" name="grammar309-5" class="full left-align" required>
                </p>
                <p>
                    6 - They gave her the best treatment. They could not save her.
                    <input type="text" placeholder="Responda aqui" name="grammar309-6" class="full left-align" required>
                </p>
                <p>
                    7 - She had the qualifications. She did not get the job.
                    <input type="text" placeholder="Responda aqui" name="grammar309-7" class="full left-align" required>
                </p>
                <p>
                    8 - He was ill. He attended the meeting.
                    <input type="text" placeholder="Responda aqui" name="grammar309-8" class="full left-align" required>
                </p>
                <p>
                    9 - The lawyer defended his client very well. He lost the case.
                    <input type="text" placeholder="Responda aqui" name="grammar309-9" class="full left-align" required>
                </p>
                <p>
                    10 - He is not educated. He possesses practical wisdom.
                    <input type="text" placeholder="Responda aqui" name="grammar309-10" class="full left-align" required>
                </p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="43">
                <input type="hidden" name="atividade_id" value="309">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow" style="margin-top: 16px;">3 - Write about your favorite sitcom, comic book or anime. Use the linking words to describe
                the characteristics you consider important. Be prepared to present it to your classmates.</h5>
            <form id="unidade43grammar310" method="post">
                <textarea name="grammar310-1" class=" metade left-align" placeholder="Responda aqui" required></textarea>
                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="43">
                <input type="hidden" name="atividade_id" value="310">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div class="clear"></div>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit43/grammar1.png') }}" alt="Garotos festejando">
            </figure>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit43/grammar2.png') }}" alt="Garotos festejando">
            </figure>
            <figure class="umterco">
                <img src="{{ asset('assets/img/dominating/unit43/grammar3.png') }}" alt="Garotos festejando">
            </figure>
            <div class="clear"></div>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade43grammar308").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade43grammar308 input[type="text"]').each(function(index) {
            if (($('#unidade43grammar308 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade43grammar308 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade43grammar308'), respostas);
        } else {
            enviarAtividade($('#unidade43grammar308'), respostas);
        }
    });

    $("#unidade43grammar309").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade43grammar309 input[type="text"]').each(function(index) {
            if (($('#unidade43grammar309 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade43grammar309 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade43grammar309'), respostas);
        } else {
            enviarAtividade($('#unidade43grammar309'), respostas);
        }
    });

    $("#unidade43grammar310").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade43grammar310 textarea').attr("name") + '":"' + $('#unidade43grammar310 textarea').val() + '"}';
        if ($('#unidade43grammar310 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade43grammar310'), respostas);
        } else {
            enviarAtividade($('#unidade43grammar310'), respostas);
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
                    $('#unidade43grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade43grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade43grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade43grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade43grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade43grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);

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
