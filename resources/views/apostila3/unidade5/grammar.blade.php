@extends('layouts.template')
@section('titulo','Unit 05 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade5" data-etapa="grammar">
            <h3 class="barlow">UNIT 5 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 05/03_GRAMMAR/GRAMMAR_05.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A - EXPLAINING PROCEDURES: ASKING FOR CLARIFICATIONS</h5>
            <p>You ask for <b>clarification</b> when there’s a step you don’t understand and you ask for a
            new <b>explanation</b>.</p>
            <div class="espacamento" style="margin-top:32px">
                <p><b>What Do you mean?</b></p>
                <p><b>Can/Could you repeat that?</b></p>
                <p><b>I didn´t get it. The soft ware is not working?</b></p>
                <p><b>I’m sorry, can/could say that again?</b></p>
                <p><b>Can/Could You explain it again?</b></p>
            </div>

            <h5 class="barlow" style="margin-top: 32px"><b>EXERCISES:</b></h5>
            <p>
                Create 2 dialogues in which some misunderstandings occur. Use the sentences to clear out
                any possible doubt. Be prepared to share with the classroom.
            </p>
            <h5 class="barlow">Dialogue 1 – At the game store. You didn´t understand the salesperson explanation.</h5>
            <form id="unidade5grammar520" method="post">
                <textarea name="grammar520-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="5">
                <input type="hidden" name="atividade_id" value="520">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">Dialogue 2 - On the phone. Changing a Comic.com ticket for another date.</h5>
            <form id="unidade5grammar521" method="post">
                <textarea name="grammar521-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="5">
                <input type="hidden" name="atividade_id" value="521">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="metade esquerda">
                <img src="{{ asset('assets/img/masteroflanguage/unit5/grammar1.png') }}" alt="vr">
            </figure>
            <figure class="metade direita">
                <img src="{{ asset('assets/img/masteroflanguage/unit5/grammar2.png') }}" alt="jogos">
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

    $("#unidade5grammar520").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade5grammar520 textarea').attr("name") + '":"' + $('#unidade5grammar520 textarea').val() + '"}';
        if ($('#unidade5grammar520 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade5grammar520'), respostas);
        } else {
            enviarAtividade($('#unidade5grammar520'), respostas);
        }
    });
    $("#unidade5grammar521").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade5grammar521 textarea').attr("name") + '":"' + $('#unidade5grammar521 textarea').val() + '"}';
        if ($('#unidade5grammar521 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade5grammar521'), respostas);
        } else {
            enviarAtividade($('#unidade5grammar521'), respostas);
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
                    $('#unidade5grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade5grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade5grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade5grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade5grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade5grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
