@extends('layouts.template')
@section('titulo','Unit 10 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade10" data-etapa="listening">
            <h3 class="barlow">UNIT 9</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 10/5. LISTENING/LISTENING.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A - Listen to the audio and fill in the blanks with the missing words.</h5>
            <div style="margin-top: 16px">
                <form id="unidade10listening146" method="post">
                    <p>
                        “Yes, I’m so happy to be <input type="text" name="listening146-1" placeholder="Responda aqui" required> on the IBC 2014. <input type="text" name="listening146-2" placeholder="Responda aqui" required> greetings to
                        <input type="text" name="listening146-3" placeholder="Responda aqui" required> that made it to our booth here, and <input type="text" name="listening146-4" placeholder="Responda aqui" required> the guys in the
                        internet, thanks for <input type="text" name="listening146-5" placeholder="Responda aqui" required>, thanks for <input type="text" name="listening146-6" placeholder="Responda aqui" required>. There’s a lot of
                        <input type="text" name="listening146-7" placeholder="Responda aqui" required> I’m <input type="text" name="listening146-8" placeholder="Responda aqui" required> you and what I’m going to show you is the features,
                        the new features of Cinema 4D R 16.”
                    </p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="10">
                    <input type="hidden" name="atividade_id" value="146">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <iframe style="margin-top:16px" width="640" height="360" src="https://www.youtube.com/embed/TUQYVIy7qw4?list=PLIqMw1vG1TWYonLA3E8qIhl_VZLk75ofu" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade10listening146").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade10listening146 input[type="text"]').each(function(index) {
            if (($('#unidade10listening146 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade10listening146 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade10listening146'), respostas);
        } else {
            enviarAtividade($('#unidade10listening146'), respostas);
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
                    $('#unidade10listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade10listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade10listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade10listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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