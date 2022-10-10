@extends('layouts.template')
@section('titulo','Unit 19 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade19" data-etapa="listening">
            <h3 class="barlow">UNIT 19</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 19/06_LISTENING/LISTENING_19.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A - Listen to the audio and answer the questions below.</h5>
            <form id="unidade19listening599" method="post">
                <p>
                    Designing a new <input type="text" name="listening599-1" placeholder="Responda aqui" required /> or a new
                    <input type="text" name="listening599-2" placeholder="Responda aqui" required /> is a big
                    <input type="text" name="listening599-3" placeholder="Responda aqui" required /> for many people.
                <p>
                <p>
                    Thre are lots of possibilities and <input type="text" name="listening599-4" placeholder="Responda aqui" required /> the right one may be an exhausting
                    <input type="text" name="listening599-5" placeholder="Responda aqui" required />.
                    The book “Business Model You” was <input type="text" name="listening599-6" placeholder="Responda aqui" required />
                    in 2012 and brought <input type="text" name="listening599-7" placeholder="Responda aqui" required />
                    of insights regarding the <input type="text" name="listening599-8" placeholder="Responda aqui" required />.
                    If you want to <input type="text" name="listening599-9" placeholder="Responda aqui" required /> your career or your
                    business, the book is a <input type="text" name="listening599-10" placeholder="Responda aqui" required /> material.
                </p>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="19">
                <input type="hidden" name="atividade_id" value="599">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
        </div>
    </div>
</main>
<script>
    activeMenu();
    console.log(window.location.pathname);

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade19listening599").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade19listening599 input[type="text"]').each(function(index) {
            if (($('#unidade19listening599 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade19listening599 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade19listening599'), respostas);
        } else {
            enviarAtividade($('#unidade19listening599'), respostas);
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
                    $('#unidade19listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade19listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade19listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade19listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
