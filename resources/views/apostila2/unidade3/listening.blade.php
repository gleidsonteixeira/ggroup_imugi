@extends('layouts.template')
@section('titulo','Unit 3 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade3" data-etapa="listening">
            <h3 class="barlow">UNIT 03</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 3/5. LISTENING/LISTENING.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top:16px">A – Listen to the audio and fill in the blanks with the missing words.</h5>
            <form id="unidade3listening116" method="post">
                <p>“Hello,<input type="text" name="listening116-1" placeholder="Responda aqui" required>and<input type="text" name="listening116-2" placeholder="Responda aqui" required> here at Maxon
                    <input type="text" name="listening116-3" placeholder="Responda aqui" required> on the IBC<input type="text" name="listening116-4" placeholder="Responda aqui" required>.We’ve got a
                    <input type="text" name="listening116-5" placeholder="Responda aqui" required>up of presenters here. This one is not only a <input type="text" name="listening116-6" placeholder="Responda aqui" required>
                    of mine, he’s also an <input type="text" name="listening116-7" placeholder="Responda aqui" required> doing a lots of stuff for , for example for Apple, BMW, Wacom, He
                    <input type="text" name="listening116-8" placeholder="Responda aqui" required> for many companies. He’s a <input type="text" name="listening116-9" placeholder="Responda aqui" required>working with three other guys I think.”</p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="3">
                <input type="hidden" name="atividade_id" value="116">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <iframe style="margin-top:16px" width="560" height="315" src="https://www.youtube.com/embed/azQt3ih_7lY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade3listening116").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade3listening116 input[type="text"]').each(function(index) {
            if (($('#unidade3listening116 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade3listening116 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade3listening116'), respostas);
        } else {
            enviarAtividade($('#unidade3listening116'), respostas);
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
                    $('#unidade3listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade3listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade3listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade3listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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