@extends('layouts.template')
@section('titulo','Unit 21 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade21" data-etapa="listening">
            <h3 class="barlow">UNIT 21</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 21/06_LISTENING/LISTENING_21.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A -  Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade21listening668" method="post">
                <p>
                    Coursera is an <input type="text" name="listening668-1" placeholder="Responda aqui" required /> platform
                    <input type="text" name="listening668-2" placeholder="Responda aqui" required /> in 2012 by two Stanford
                    <input type="text" name="listening668-3" placeholder="Responda aqui" required /> teachers. In the
                    <input type="text" name="listening668-4" placeholder="Responda aqui" required /> year of creation, they got a
                    <input type="text" name="listening668-5" placeholder="Responda aqui" required /> with important American universities
                    <input type="text" name="listening668-6" placeholder="Responda aqui" required /> in delivering education
                    in a different way. Most of the courses are <input type="text" name="listening668-7" placeholder="Responda aqui" required />
                    in English but you have some of them with <input type="text" name="listening668-8" placeholder="Responda aqui" required />
                    in different languages. Some Brazilian <input type="text" name="listening668-9" placeholder="Responda aqui" required /> and institutes
                    like USP, Unicamp and Lemann Foundation are also <input type="text" name="listening668-10" placeholder="Responda aqui" required /> of coursera.
                </p>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="21">
                <input type="hidden" name="atividade_id" value="668">
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

    $("#unidade21listening668").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade21listening668 input[type="text"]').each(function(index) {
            if (($('#unidade21listening668 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade21listening668 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade21listening668'), respostas);
        } else {
            enviarAtividade($('#unidade21listening668'), respostas);
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
                    $('#unidade21listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade21listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade21listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade21listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
