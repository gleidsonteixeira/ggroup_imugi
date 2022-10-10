@extends('layouts.template')
@section('titulo','Unit 43 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade43" data-etapa="listening">
            <h3 class="barlow">UNIT 43</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 43/5. LISTENING/LISTENING.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top: 16px">A - Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade43listening311" method="post">
                <p>Mark, the <input type="text" placeholder="Responda aqui" name="listening311-1" class="inputpequeno left-align" required>
                    director, <input type="text" placeholder="Responda aqui" name="listening311-2" class="inputpequeno left-align" required>
                    that he was very happy with our <input type="text" placeholder="Responda aqui" name="listening311-3" class="inputpequeno left-align" required>.</p>
                <p>According to him, the final magazine <input type="text" placeholder="Responda aqui" name="listening311-4" class="inputpequeno left-align" required>
                    was <input type="text" placeholder="Responda aqui" name="listening311-5" class="inputpequeno left-align" required> objective.</p>
                <p><input type="text" placeholder="Responda aqui" name="listening311-6" class="inputpequeno left-align" required>, he said the
                    <input type="text" placeholder="Responda aqui" name="listening311-7" class="inputpequeno left-align" required>
                    of the images and the treatment of all them was very aligned to the idea he had for this edition.</p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="43">
                <input type="hidden" name="atividade_id" value="311">
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

    $("#unidade43listening311").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade43listening311 input[type="text"]').each(function(index) {
            if (($('#unidade43listening311 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade43listening311 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade43listening311'), respostas);
        } else {
            enviarAtividade($('#unidade43listening311'), respostas);
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
                    $('#unidade43listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade43listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade43listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade43listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
