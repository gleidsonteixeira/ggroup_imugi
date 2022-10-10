@extends('layouts.template')
@section('titulo','Unit 28 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade28" data-etapa="grammar">
            <h3 class="barlow">UNIT 28</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 28/03_GRAMMAR/GRAMMAR_28.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - HOW TO DESCRIBE, EXPLAIN, DEFEND AND ANALYZE IDEAS. DEFINING BASIC CONCEPTS.</h5>

                <table class="espacamento left-align borderedfull">
                    <tr>
                        <td rowspan="6"><h5 class="barlow upper">Idea</h5></td>
                    </tr>
                    <tr>
                        <td><p>(a)Description</p></td>
                        <td><p>When you describe, you detail what someone or something is like.</p></td>
                    </tr>
                    <tr>
                        <td><p>(b)Explanation</p></td>
                        <td>
                            <p>
                                An explanation is a way to describe how to do something or how something
                                happens. It should present steps in order
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><p>(c)Definition</p></td>
                        <td>
                            <p>
                                It’s an explanation, phrase, or sentence that says the meaning of a word, a
                                phrase or idea.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><p>(d)Narration</p></td>
                        <td><p>It’s a sequence of events that tells a story and describes what happened.</p></td>
                    </tr>
                    <tr>
                        <td><p>(e)Argumentation</p></td>
                        <td>
                            <p>
                                It’s a way of forming reasons , justifying beliefs, drawing conclusions, and
                                applying them to a case is discussion with the aim of influencing others.
                            </p>
                        </td>
                    </tr>
                </table>

                <h5 class="barlow" style="margin-top:16px"><b>Example:</b></h5>
                <p>
                    a) <b>Description:</b> The structure of the company is very good. There is plenty of space in the
                    workstation and lots of meetings rooms.
                </p>
                <p>
                    b) <b>Explanation:</b> In order to improve your engagement with your public you need to follow
                    some important step. I think that the most important step is to get to know what your
                    audience wants to know.
                </p>
                <p>
                    c) <b>Definition:</b> It’s difficult to define what success is nowadays. For some people, it is to have
                    as many followers as they can. For others, it’s to be able to monetize the content you
                    spread on the net.
                </p>
                <p>
                    d) <b>Narration:</b> When I started my first Channel, I didn’t know anything about social media.
                    A friend of mine introduced me this new marketing era idea and after some months, I
                    decided to invest seriously on that.
                </p>
                <p>
                    e) <b>Argumentation:</b> I don’t think Facebook is obsolete. People have said that Instagram is
                    more effective than Facebook, but it all depends on the public. Older people feel more
                    comfortable using Face while Young people, prefer to use Instagram and some others.
                </p>


                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - In groups, write the presentations of Laura, Akira and John. Get ready to present the project to the class.</h5>
                <p><b>John(Description): ???</b></p>
                <form id="unidade28grammar693" method="post" style="margin-top:32px">
                    <textarea name="grammar693-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="28">
                    <input type="hidden" name="atividade_id" value="693">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <p><b>Laura(Narration):???</b></p>
                <form id="unidade28grammar694" method="post" style="margin-top:32px">
                    <textarea name="grammar694-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="28">
                    <input type="hidden" name="atividade_id" value="694">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <p><b>Akira(Explanation):???</b></p>
                <form id="unidade28grammar695" method="post" style="margin-top:32px">
                    <textarea name="grammar695-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="28">
                    <input type="hidden" name="atividade_id" value="695">
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

    $("#unidade28grammar693").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade28grammar693 textarea').attr("name") + '":"' + $('#unidade28grammar693 textarea').val() + '"}';
        if ($('#unidade28grammar693 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade28grammar693'), respostas);
        } else {
            enviarAtividade($('#unidade28grammar693'), respostas);
        }
    });

    $("#unidade28grammar694").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade28grammar694 textarea').attr("name") + '":"' + $('#unidade28grammar694 textarea').val() + '"}';
        if ($('#unidade28grammar694 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade28grammar694'), respostas);
        } else {
            enviarAtividade($('#unidade28grammar694'), respostas);
        }
    });

    $("#unidade28grammar695").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade28grammar695 textarea').attr("name") + '":"' + $('#unidade28grammar695 textarea').val() + '"}';
        if ($('#unidade28grammar695 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade28grammar695'), respostas);
        } else {
            enviarAtividade($('#unidade28grammar695'), respostas);
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
                    $('#unidade28grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade28grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade28grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade28grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade28grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade28grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
