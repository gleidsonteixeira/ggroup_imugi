@extends('layouts.template')
@section('titulo','Unit 34 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade34" data-etapa="understanding">
            <h3 class="barlow">UNIT 34</h3>
            <h5 class="barlow">6 - UNDERSTANDING</h5>
            <div class="metade">
                <form id="unidade34understanding263" method="post">
                    <p>
                        1. What is gonna happen in the second part of the course?
                        <input type="text" name="understanding263-1" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        2. What did Gleen see that he considers awesome?
                        <input type="text" name="understanding263-2" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        3. What does Gleen propose to the students?
                        <input type="text" name="understanding263-3" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        4. What does Akira say about his skills?
                        <input type="text" name="understanding263-4" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        5. How do they feel about the new idea of work?
                        <input type="text" name="understanding263-5" placeholder="Responda aqui" class="full left-align" required>
                    </p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="34">
                    <input type="hidden" name="atividade_id" value="263">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
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

    $("#unidade34understanding263").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade34understanding263 input[type="text"]').each(function(index) {
            if (($('#unidade34understanding263 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade34understanding263 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade34understanding263'), respostas);
        } else {
            enviarAtividade($('#unidade34understanding263'), respostas);
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
                    $('#unidade34understanding' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade34understanding' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade34understanding' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade34understanding' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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