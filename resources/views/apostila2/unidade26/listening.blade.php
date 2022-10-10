@extends('layouts.template')
@section('titulo','Unit 26 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade26" data-etapa="listening">
            <h3 class="barlow">UNIT 26</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 26/4. LISTENING/LISTENING.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A - Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade26listening223" method="post" style="margin-top:16px">
                <p>
                    Well, if you <input type="text" name="listening223-1" placeholder="Responda aqui" required>
                    to visit the USA the first thing you <input type="text" name="listening223-2" placeholder="Responda aqui" required> do is to get your
                    Visa. I recommend you to find <input type="text" name="listening223-3" placeholder="Responda aqui" required> to fill out the forms in the immigration site.
                    You must <input type="text" name="listening223-4" placeholder="Responda aqui" required> attention to every single detail they
                    <input type="text" name="listening223-5" placeholder="Responda aqui" required> you. Any mistake can
                    cause <input type="text" name="listening223-6" placeholder="Responda aqui" required> . Another important
                    <input type="text" name="listening223-7" placeholder="Responda aqui" required> is that you must prove you have
                    enough funds to <input type="text" name="listening223-8" placeholder="Responda aqui" required> you while you are there otherwise, they won’t allow to
                    <input type="text" name="listening223-9" placeholder="Responda aqui" required> the country.
                </p>


                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="26">
                <input type="hidden" name="atividade_id" value="223">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <figure class="metade esquerda">
                <img src="{{ asset('assets/img/dominating/unit26/listening1.jpg') }}" alt="ctps">
            </figure>
            <figure class="metade direita">
                <img src="{{ asset('assets/img/dominating/unit26/listening2.jpg') }}" alt="ctps">
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

    $("#unidade26listening223").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade26listening223 input[type="text"]').each(function(index) {
            if (($('#unidade26listening223 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade26listening223 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade26listening223'), respostas);
        } else {
            enviarAtividade($('#unidade26listening223'), respostas);
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
                    $('#unidade26listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade26listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade26listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade26listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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