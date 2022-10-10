@extends('layouts.template')
@section('titulo','Unit 22 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade22" data-etapa="listening">
            <h3 class="barlow">UNIT 22</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 22/5. LISTENING/LISTENING.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top:16px">A – Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade22listening200" method="post">
                <p>
                    <input type="text" name="listening200-1" placeholder="Responda aqui" required>you
                    <input type="text" name="listening200-2" placeholder="Responda aqui" required>any musical instrument? Yes, I
                    <input type="text" name="listening200-3" placeholder="Responda aqui" required>play the clarinet. Yes, I can play.
                    <input type="text" name="listening200-4" placeholder="Responda aqui" required>Can you play any musical instruments? I can play the
                    <input type="text" name="listening200-5" placeholder="Responda aqui" required>and the piano. Can you play any musical instrument No, I
                    <input type="text" name="listening200-6" placeholder="Responda aqui" required>. No I can’t, but my love can. The
                    <input type="text" name="listening200-7" placeholder="Responda aqui" required>What Can
                    <input type="text" name="listening200-8" placeholder="Responda aqui" required>play?
                    <input type="text" name="listening200-9" placeholder="Responda aqui" required>play guitar. Can he play
                    <input type="text" name="listening200-10" placeholder="Responda aqui" required>. Very well. Can you play any musical instrument? The
                    <input type="text" name="listening200-11" placeholder="Responda aqui" required>can. Can you play a musical instrument? No, and I
                    <input type="text" name="listening200-12" placeholder="Responda aqui" required>. I’m
                    <input type="text" name="listening200-13" placeholder="Responda aqui" required>
                </p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="22">
                <input type="hidden" name="atividade_id" value="200">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <iframe style="margin-top:16px" width="480" height="360" src="https://www.youtube.com/embed/_YLgqOONnJM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade22listening200").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade22listening200 input[type="text"]').each(function(index) {
            if (($('#unidade22listening200 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade22listening200 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade22listening200'), respostas);
        } else {
            enviarAtividade($('#unidade22listening200'), respostas);
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
                    $('#unidade22listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade22listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade22listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade22listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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