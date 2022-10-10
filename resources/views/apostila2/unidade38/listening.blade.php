@extends('layouts.template')
@section('titulo','Unit 38 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade38" data-etapa="listening">
            <h3 class="barlow">UNIT 38</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 38/5. LISTENING/LISTENING.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top: 16px">A - Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade38listening282" method="post" style="margin-top: 16px">
                <p>
                    Everything <input type="text" name="understanding282-1" class="left-align" placeholder="Responda aqui" required> with a first step.
                    A <input type="text" name="understanding282-2" class=" left-align" placeholder="Responda aqui" required> to change is the first one.
                    You gotta decide to <input type="text" name="understanding282-3" class=" left-align" placeholder="Responda aqui" required> to details you didn’t
                    <input type="text" name="understanding282-4" class=" left-align" placeholder="Responda aqui" required>
                    about in the past. You’re gonna <input type="text" name="understanding282-5" class=" left-align" placeholder="Responda aqui" required> to plan, planning.
                    You <input type="text" name="understanding282-6" class=" left-align" placeholder="Responda aqui" required> , you
                    <input type="text" name="understanding282-7" class=" left-align" placeholder="Responda aqui" required> , you <input type="text" name="understanding282-8" class=" left-align" placeholder="Responda aqui" required>
                    the result and start all over <input type="text" name="understanding282-9" class=" left-align" placeholder="Responda aqui" required>. You <input type="text" name="understanding282-10" class=" left-align" placeholder="Responda aqui" required> to
                    do much more things when you <input type="text" name="understanding282-11" class=" left-align" placeholder="Responda aqui" required> this way.
                </p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="38">
                <input type="hidden" name="atividade_id" value="282">
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

    $("#unidade38listening282").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade38listening282 input[type="text"]').each(function(index) {
            if (($('#unidade38listening282 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade38listening282 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade38listening282'), respostas);
        } else {
            enviarAtividade($('#unidade38listening282'), respostas);
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
                    $('#unidade38listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade38listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade38listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade38listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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