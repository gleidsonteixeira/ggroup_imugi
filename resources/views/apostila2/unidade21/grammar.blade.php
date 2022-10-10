@extends('layouts.template')
@section('titulo','Unit 21 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade21" data-etapa="grammar">
            <h3 class="barlow">UNIT 21</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - USED TO – PAST HABIT Used to is used to express a past habit.</h5>

            <table class="metade left-align">
                <tr>
                    <td>
                        <h5 class="barlow">Affirmative</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Negative</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Interrogative</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>I used to play</b> super Mario</p>
                    </td>
                    <td>
                        <p><b> I didn´t use to play</b> Super Mario</p>
                    </td>
                    <td>
                        <p><b> Did you use</b> to play super Mario ?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>She <b>used to spend</b> hours reading</p>
                    </td>
                    <td>
                        <p>She <b>used not to</b> spend hours reading</p>
                    </td>
                    <td>
                        <p><b>Did she use </b>to spend hours reading ?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>They<b> used to visit</b> my friends</p>
                    </td>
                    <td>
                        <p><b>They never used to visit</b> my friends</p>
                    </td>
                    <td>
                        <p><b>Did they used </b>to visit their friends ?</p>
                    </td>
                </tr>
            </table>

            <h5 style="margin-top:16px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Rewrite the sentences using USED TO:</h5>
            <form id="unidade21grammar191" action="post" class="metade">
                <p>
                    1. When she was a child, she lived in a small village.
                    <input type="text" name="grammar191-1" placeholder="Responda aqui" required> When she was a child, she used to live in a small village.
                    <input type="text" name="grammar191-2" placeholder="Responda aqui" required>
                </p>
                <p>2. When Gleen was a young man, he enjoyed playing packman.<input type="text" name="grammar191-3" placeholder="Responda aqui" class="full left-align" required></p>
                <p>3. In the past, gamers programmed using C++.<input type="text" name="grammar191-4" placeholder="Responda aqui" class="full left-align" required></p>
                <p>4. Before I learned to draw, I read a lot of comic books.<input type="text" name="grammar191-5" placeholder="Responda aqui" class="full left-align" required></p>
                <p>5. Before she went to pixar, she was a freelancer for dreamworks.<input type="text" name="grammar191-6" placeholder="Responda aqui" class="full left-align" required></p>
                <p>6. Akira spoke Japanese at school, but he has now forgotten.<input type="text" name="grammar191-7" placeholder="Responda aqui" class="full left-align" required></p>
                <p>7. Laura was a photographer before she started making videos.<input type="text" name="grammar191-8" placeholder="Responda aqui" class="full left-align" required></p>
                <p>8. John watched cartoons when he was younger, but he prefers animes now.<input type="text" name="grammar191-9" placeholder="Responda aqui" class="full left-align" required></p>
                <p>9. Before he bought mac, he used windows.<input type="text" name="grammar191-10" placeholder="Responda aqui" class="full left-align" required></p>
                <p>10. While he was going to university, he worked for a small fashion magazine<input type="text" name="grammar191-11" placeholder="Responda aqui" class="full left-align" required></p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="21">
                <input type="hidden" name="atividade_id" value="191">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">2 - Complete the text about John when she was a child using USED TO / DIDN’T USE TO and the verbs in brackets:</h5>
            <form id="unidade21grammar192" action="post">
                <p>
                    I <b>didn’t use to have</b> (not have) many friends when I was a child so I
                    <input type="text" name="grammar192-1" placeholder="Responda aqui" required>(play) with my toys all day. I
                    <input type="text" name="grammar192-2" placeholder="Responda aqui" required>(worry) about things a lot but I
                    <input type="text" name="grammar192-3" placeholder="Responda aqui" required>(not bite) my nails or suck my thumb. I remember that I
                    <input type="text" name="grammar192-4" placeholder="Responda aqui" required>(cry) a lot and I
                    <input type="text" name="grammar192-5" placeholder="Responda aqui" required>(be) really afraid of the dark.
                </p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="21">
                <input type="hidden" name="atividade_id" value="192">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">3 - Complete the text using USED TO and the verbs in the box:</h5>
            <form id="unidade21grammar193" action="post">
                <p class="bordaVerde">do give have learn read wear</p>
                <p>
                    School has changed since I was a student. We used to wear school uniform and I didn’t like that very much. We
                    <input type="text" name="grammar193-1" placeholder="Responda aqui" required>a lot of lessons and most of them
                    were difficult. We
                    <input type="text" name="grammar193-2" placeholder="Responda aqui" required>homework every day. We
                    <input type="text" name="grammar193-3" placeholder="Responda aqui" required>lots of books and we
                    <input type="text" name="grammar193-4" placeholder="Responda aqui" required>everything by heart. And our teachers
                    <input type="text" name="grammar193-5" placeholder="Responda aqui" required>us a lot of tests and examinations. Some of them were
                    impossible! I think school is easier now than it was 50 years ago.
                </p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="21">
                <input type="hidden" name="atividade_id" value="193">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
                <img src="{{ asset('assets/img/dominating/unit21/grammar.jpg') }}" alt="Garoto triste">
            </figure>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:32px">4 - Prepare a narration about your childhood. Be prepared to present to your classmates.</h5>
            <form id="unidade21grammar194" action="post" style="margin-top:16px">
                <textarea name="grammar194-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="21">
                <input type="hidden" name="atividade_id" value="194">
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

    $("#unidade21grammar191").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade21grammar191 input[type="text"]').each(function(index) {
            if (($('#unidade21grammar191 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade21grammar191 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade21grammar191'), respostas);
        } else {
            enviarAtividade($('#unidade21grammar191'), respostas);
        }
    });

    $("#unidade21grammar192").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade21grammar192 input[type="text"]').each(function(index) {
            if (($('#unidade21grammar192 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade21grammar192 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade21grammar192'), respostas);
        } else {
            enviarAtividade($('#unidade21grammar192'), respostas);
        }
    });

    $("#unidade21grammar193").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade21grammar193 input[type="text"]').each(function(index) {
            if (($('#unidade21grammar193 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade21grammar193 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade21grammar193'), respostas);
        } else {
            enviarAtividade($('#unidade21grammar193'), respostas);
        }
    });

    $("#unidade21grammar194").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade21grammar194 textarea').attr("name") + '":"' + $('#unidade21grammar194 textarea').val() + '"}';
        if ($('#unidade21grammar194 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade21grammar194'), respostas);
        } else {
            enviarAtividade($('#unidade21grammar194'), respostas);
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
                    $('#unidade21grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade21grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade21grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade21grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade21grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade21grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);

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