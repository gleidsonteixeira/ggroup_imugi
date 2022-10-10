@extends('layouts.template')
@section('titulo','Unit 23 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade23" data-etapa="grammar">
            <h3 class="barlow">UNIT 23</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 23/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - MODAL VERB CAN - COULD for FORMAL - INFORMAL REQUESTS</h5>

            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">CAN</p>
                    </td>
                    <td>
                        <h5 class="barlow">COULD</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Can</b> you help me with my homework?</p>
                    </td>
                    <td>
                        <p><b>Could</b> I <b>help</b> you?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Can</b> you bring an extra sheet of paper?
                    </td>
                    <td>
                        <p><b>Could</b> you <b>do</b> me a favor?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Can</b> you send me a copy?
                    </td>
                    <td>
                        <p><b>Could</b> you <b>show</b> me how to do this?</p>
                    </td>
                </tr>
            </table>

            <h5 class="barlow" style="margin-top:16px"><b>EXERCISES</b></p>
                <h5 class="barlow">1 - Complete the sentences with CAN or COULD for making formal or informal requests. Pay
                    attention to the context to decide between formal and informal.</h5>
                <form id="unidade23grammar202" action="post">
                    <p>1. Please<input type="text" name="grammar202-1" placeholder="Responda aqui" required>you buy some milk on your way home? I
                        <input type="text" name="grammar202-2" placeholder="Responda aqui" required>leave the house because I’m looking after the baby.</p>
                    <p>2. Hello ,<input type="text" name="grammar202-3" placeholder="Responda aqui" required>I help you? Actually, no you
                        <input type="text" name="grammar202-4" placeholder="Responda aqui" required>.This restaurant is awful . We’re leaving.</p>
                    <p>3. Officer<input type="text" name="grammar202-5" placeholder="Responda aqui" required>you give an information please. Where
                        <input type="text" name="grammar202-6" placeholder="Responda aqui" required>I park my car safely?</p>
                    <p>4.<input type="text" name="grammar202-7" placeholder="Responda aqui" required> I go to the bathroom , please? Yes, of course you
                        <input type="text" name="grammar202-8" placeholder="Responda aqui" required>.</p>
                    <p>5.<input type="text" name="grammar202-9" placeholder="Responda aqui" required> I help you sir. I see you need some help with the menu.</p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="23">
                    <input type="hidden" name="atividade_id" value="202">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">2 - Asking permission or favor. What kind of permissions or favors would you ask in these places? List at least three possibilities. Use your imagination.</h5>
                <form id="unidade23grammar203" class="metade" action="post">
                    <p>1. At a restaurant
                        <input type="text" name="grammar203-1" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>2. On the streets.
                        <input type="text" name="grammar203-2" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>3. At work.
                        <input type="text" name="grammar203-3" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>4. At home (breakfast)
                        <input type="text" name="grammar203-4" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>5. At school.
                        <input type="text" name="grammar203-5" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="23">
                    <input type="hidden" name="atividade_id" value="203">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">3 - Put in ‘CAN’ / ‘CAN’T’ / ‘COULD’ / ‘COULDN’T’.</h5>
                <form id="unidade23grammar204" action="post">
                    <p>1. <input type="text" name="grammar204-1" placeholder="Responda aqui" required> you swim when you were 10?</p>
                    <p>2. We<input type="text" name="grammar204-2" placeholder="Responda aqui" required> get to the meeting on time yesterday because the train was delayed by one hour.</p>
                    <p>3. He<input type="text" name="grammar204-3" placeholder="Responda aqui" required> arrive at the party on time, even after missing the train, so he was very pleased.</p>
                    <p>4. He’s amazing, he<input type="text" name="grammar204-4" placeholder="Responda aqui" required> speak 5 languages including Chinese.</p>
                    <p>5. I<input type="text" name="grammar204-5" placeholder="Responda aqui" required> drive a car until I was 34, then I moved to the countryside so I had to learn.</p>
                    <p>6. I looked everywhere for my glasses but I<input type="text" name="grammar204-6" placeholder="Responda aqui" required> find them anywhere.</p>
                    <p>7. I searched for your house for ages, luckily I<input type="text" name="grammar204-7" placeholder="Responda aqui" required> find it in the end.</p>
                    <p>8. She’s 7 years old but she<input type="text" name="grammar204-8" placeholder="Responda aqui" required> read yet – her parents are getting her extra lessons.</p>
                    <p>9. I read the book three times but I<input type="text" name="grammar204-9" placeholder="Responda aqui" required>understand it.</p>
                    <p>10. Akira<input type="text" name="grammar204-10" placeholder="Responda aqui" required> speak Japanese when he lived in Japan, but he’s forgotten most of it now</p>
                    <p>11. I<input type="text" name="grammar204-11" placeholder="Responda aqui" required> understand the chapter we had to read for homework. It was so difficult.</p>
                    <p>12. I<input type="text" name="grammar204-12" placeholder="Responda aqui" required> lift this box – it’s too heavy! Would you help me?</p>
                    <p>13. John<input type="text" name="grammar204-13" placeholder="Responda aqui" required> play tennis really well. He’s champion of his club.</p>
                    <p>14. Unfortunately, I really<input type="text" name="grammar204-14" placeholder="Responda aqui" required> sing at all! No-one in my family is musical either. </p>

                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="23">
                    <input type="hidden" name="atividade_id" value="204">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure class="umterco">
                    <img src="{{ asset('assets/img/dominating/unit23/grammar1.png') }}" alt="dev">
                </figure>
                <figure class="umterco">
                    <img src="{{ asset('assets/img/dominating/unit23/grammar2.png') }}" alt="dev">
                </figure>
                <figure class="umterco">
                    <img src="{{ asset('assets/img/dominating/unit23/grammar3.png') }}" alt="dev">
                </figure>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px">4 - Write a six-line conversation about the following topic: “Request made to a colleague at work”</h5>
                <form id="unidade23grammar205" class="metade" action="post">

                    <textarea name="grammar205-1" placeholder="Responda aqui"></textarea>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="23">
                    <input type="hidden" name="atividade_id" value="205">
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

    $("#unidade23grammar202").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade23grammar202 input[type="text"]').each(function(index) {
            if (($('#unidade23grammar202 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade23grammar202 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade23grammar202'), respostas);
        } else {
            enviarAtividade($('#unidade23grammar202'), respostas);
        }
    });

    $("#unidade23grammar203").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade23grammar203 input[type="text"]').each(function(index) {
            if (($('#unidade23grammar203 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade23grammar203 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade23grammar203'), respostas);
        } else {
            enviarAtividade($('#unidade23grammar203'), respostas);
        }
    });

    $("#unidade23grammar204").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade23grammar204 input[type="text"]').each(function(index) {
            if (($('#unidade23grammar204 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade23grammar204 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade23grammar204'), respostas);
        } else {
            enviarAtividade($('#unidade23grammar204'), respostas);
        }
    });

    $("#unidade23grammar205").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade23grammar205 textarea').attr("name") + '":"' + $('#unidade23grammar205 textarea').val() + '"}';
        if ($('#unidade23grammar205 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade23grammar205'), respostas);
        } else {
            enviarAtividade($('#unidade23grammar205'), respostas);
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