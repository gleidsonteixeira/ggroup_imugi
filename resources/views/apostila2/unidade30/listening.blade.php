@extends('layouts.template')
@section('titulo','Unit 30 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade30" data-etapa="listening">
            <h3 class="barlow">UNIT 30</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 30/4. LISTENING/LISTENING.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top: 16px">A - Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade30listening241" method="post" style="margin-top: 16px">
                <p>
                    <p>
                        What <input type="text" name="listening241-1" placeholder="Responda aqui" required> you want to do <input type="text" name="listening241-2" placeholder="Responda aqui" required> high school?
                    </p>
                    <p>
                        I <input type="text" name="listening241-3" placeholder="Responda aqui" required> to go to college and pursue my <input type="text" name="listening241-4" placeholder="Responda aqui" required> for Spanish, history
                        and <input type="text" name="listening241-5" placeholder="Responda aqui" required>.
                    </p>
                    <p>
                        Do you <input type="text" name="listening241-6" placeholder="Responda aqui" required> an idea of a career you’d like to follow?
                    </p>
                    <p>
                        I would love to somehow <input type="text" name="listening241-7" placeholder="Responda aqui" required> all of the passions together by doing a type of
                        corporate job, but I’m not really quite sure yet.
                    </p>
                    <p>
                        Is there anything you <input type="text" name="listening241-8" placeholder="Responda aqui" required> like to say to kids in other <input type="text" name="listening241-9" placeholder="Responda aqui" required>?
                    </p>
                    <p>
                        I’m so <input type="text" name="listening241-10" placeholder="Responda aqui" required> to be able to talk to you guys, and share part of my
                        <input type="text" name="listening241-11" placeholder="Responda aqui" required> with you guys. I hope one day to travel to your countries and to
                        <input type="text" name="listening241-12" placeholder="Responda aqui" required> a little bit more about how small the <input type="text" name="listening241-13" placeholder="Responda aqui" required> really is.
                    </p>
                </p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="30">
                <input type="hidden" name="atividade_id" value="241">
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

    $("#unidade30listening241").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade30listening241 input[type="text"]').each(function(index) {
            if (($('#unidade30listening241 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade30listening241 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade30listening241'), respostas);
        } else {
            enviarAtividade($('#unidade30listening241'), respostas);
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
                    $('#unidade30listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade30listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade30listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade30listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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