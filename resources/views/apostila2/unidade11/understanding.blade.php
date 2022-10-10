@extends('layouts.template')
@section('titulo','Unit 11 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade11" data-etapa="understanding">
            <h3 class="barlow">UNIT 11</h3>
            <h5 class="barlow">6 - UNDERSTANDING</h5>
            <form id="unidade11understanding152" method="post" class="metade">
                <p>
                    1 - What’s Gleen’s opinion about Mr. Smith presentation?
                    <input type="text" name="understanding152-1" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    2 - What is Laura doing at the moment?
                    <input type="text" name="understanding152-2" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    3 - How many possible jobs Does Laura have?
                    <input type="text" name="understanding152-3" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    4 - What are Akira’s plans?
                    <input type="text" name="understanding152-4" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    5 - Why will John accept the job on the Games magazine?
                    <input type="text" name="understanding152-5" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="11">
                <input type="hidden" name="atividade_id" value="152">
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

    $("#unidade11understanding152").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade11understanding152 input[type="text"]').each(function(index) {
            if (($('#unidade11understanding152 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade11understanding152 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade11understanding152'), respostas);
        } else {
            enviarAtividade($('#unidade11understanding152'), respostas);
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
                    $('#unidade11understanding' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade11understanding' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade11understanding' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade11understanding' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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