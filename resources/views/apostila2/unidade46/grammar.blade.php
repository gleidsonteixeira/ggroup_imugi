@extends('layouts.template')
@section('titulo','Unit 46 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade46" data-etapa="grammar">
            <h3 class="barlow">UNIT 46</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 46/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - PAIRED CONJUNCTIONS – EITHER / OR</h5>
            <p>We use <b>paired conjunction</b> to connect a pair of ideas in two different sentences. Both
                sentences usually have similar length and grammar structure.</p>
            <p>Either … or.</p>
            <table class="left-align">
                <tr>
                    <td>
                        <h5 class="barlow">Sentences / information</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Connected sentences</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>a. We could <b>live</b> in New York.</p>
                    </td>
                    <td class="vertical-align" rowspan="2">
                        <p>We could <b>either</b> <u>live in New York</u> or <u>move to San Francisco</u>.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>b. We could <b>move</b> to San Francisco.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>a. The company should use <b>blender.</b></p>
                    </td>
                    <td class="vertical-align" rowspan="2">
                        <p>The company should use <b>either</b> Blender <b>or</b> Unity.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>b. The company should use <b>unity.</b></p>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p>a. Akira likes <b>comic books.</b></p>
                    </td>
                    <td class="vertical-align" rowspan="2">
                        <p><b>Either</b> <u>Akira</u> <b>or</b> <u>John</u> like<b>s</b> comic books.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>b. John likes <b>comic books.</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>a. My sister <b>lives in New York.</b></p>
                    </td>
                    <td class="vertical-align" rowspan="2">
                        <p><b>Either</b> <u>my sister</u> <b>or</b> <u>my parents</u> <b>live</b> in New York.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>b. My parents also <b>live in New York.</b></p>
                    </td>
                </tr>
            </table>

            <p>Have in mind that the verb of the second sentence always agrees with the subject of the second sentence.</p>

            <h5 class+="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Use EITHER ……. OR …… .</h5>
            <form id="unidade46grammar324" class="metade" action="post">
                <p>1. John has your book, or Mary has your book. Is that right?</p>
                <p><b>Yes, either John or Mary has my book.</b></p>
                <p>
                    2. You’re going to give your friend a book for her birthday, or you’re going to give her a pen. Is that right?
                    <input type="text" name="grammar324-1" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    3. Your sister will meet you at the airport, or your brother will meet you there. Right?
                    <input type="text" name="grammar324-2" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    4. They can go swimming, or they can play tennis. Is that right?
                    <input type="text" name="grammar324-3" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    5. You’re going to vote for Mr. Smith, or you’re going to vote for Mr. Jones. Right?
                    <input type="text" name="grammar324-4" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    6. You’ll go to New Orleans for your vacation, or you’ll go to Miami. Right?
                    <input type="text" name="grammar324-5" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    7. I’m going to buy only one of these shirts. One is red, the other is blue.
                    <input type="text" name="grammar324-6" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    8. We could have lunch at home, but we could also go out to eat.
                    <input type="text" name="grammar324-7" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    9. In a game, it all depends on you. You can win or lose.
                    <input type="text" name="grammar324-8" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    10. You can take my offer or leave it. It’s up to you.
                    <input type="text" name="grammar324-9" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    11. When I go to restaurants, sometimes I eat fish an sometimes I eat meat. It depends on my mood.
                    <input type="text" name="grammar324-10" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    12. Call Charlie or Bill. Anyone of them can prepare the report.
                    <input type="text" name="grammar324-11" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    13. When you find a lost wallet you have two option. Call the police or call the owner if you have the number.
                    <input type="text" name="grammar324-12" class="full left-align" placeholder="Responda aqui" required>
                </p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="46">
                <input type="hidden" name="atividade_id" value="324">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
				<img src="{{ asset('assets/img/dominating/unit46/grammar.png') }}" alt="filmes">
            </figure>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">2 - As a visual art professional, what suggestions would you give for a person who wants to improve his/her
                Story Telling Skill. Use EITHER / OR to write your suggestions. Be prepared to present your ideas to your classmates.</h5>
            <form id="unidade46grammar325" action="post">
                <textarea name="grammar325-1" class="metade left-align" placeholder="Responda aqui"></textarea>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="46">
                <input type="hidden" name="atividade_id" value="325">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        var inputType = $(this).find('input').attr('type');
        checkAtividade(atividade_id, inputType);
    });

    $("#unidade46grammar324").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade46grammar324 input[type="text"]').each(function(index) {
            if (($('#unidade46grammar324 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade46grammar324 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade46grammar324'), respostas);
        } else {
            enviarAtividade($('#unidade46grammar324'), respostas);
        }
    });

    $("#unidade46grammar325").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade46grammar325 textarea').attr("name") + '":"' + $('#unidade46grammar325 textarea').val() + '"}';
        if ($('#unidade46grammar325 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade46grammar325'), respostas);
        } else {
            enviarAtividade($('#unidade46grammar325'), respostas);
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
                    $('#unidade46grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade46grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade46grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade46grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade46grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade46grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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