@extends('layouts.template')
@section('titulo','Unit 5 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade5" data-etapa="listening">
            <h3 class="barlow">UNIT 05</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 5/5. LISTENING/LISTENING.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top:16px">A – Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade5listening432" method="post">
                <p>“I’m Brooke Allen. I’m a<input type="text" name="listening432-1" placeholder="Responda aqui" required>
                    and today I’m gonna show you how I like to ink and what my<input type="text" name="listening432-2" placeholder="Responda aqui" required>
                    is, and inking is the<input type="text" name="listening432-3" placeholder="Responda aqui" required>in between penciling and
                    <input type="text" name="listening432-4" placeholder="Responda aqui" required> , in comic book art. So, we
                    <input type="text" name="listening432-5" placeholder="Responda aqui" required>with our pencil art and we’re just gonna trace on top of it. Then it will be
                    <input type="text" name="listening432-6" placeholder="Responda aqui" required>for
                    <input type="text" name="listening432-7" placeholder="Responda aqui" required>. So let’s dive in.”</p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="5">
                <input type="hidden" name="atividade_id" value="432">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <iframe style="margin-top:16px" width="640" height="360" src="https://www.youtube.com/embed/ikTU1X4WIIM?list=PL43ZNQLcZRZD22WZLWqn0oEad7E2pw2Bl" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <figure class="center-align" style="margin-top:16px">
                <img src="{{ asset('assets/img/dominating/unit5/listening.jpg') }}" alt="marvel">
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

    $("#unidade5listening432").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade5listening432 input[type="text"]').each(function(index) {
            if (($('#unidade5listening432 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade5listening432 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade5listening432'), respostas);
        } else {
            enviarAtividade($('#unidade5listening432'), respostas);
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
                    $('#unidade5listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade5listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade5listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade5listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
        console.log(resposta);
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