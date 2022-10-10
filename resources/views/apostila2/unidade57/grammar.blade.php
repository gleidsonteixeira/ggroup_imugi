@extends('layouts.template')
@section('titulo','Unit 57 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade57" data-etapa="grammar">
            <h3 class="barlow">UNIT 57 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - PAST PERFECT CONTINUOUS</h5>
                <p>
                    We use the Past Perfect Continuous to show that something started in the past and continued up until another time in the past. “For five minutes” and “for two weeks” are both
                    durations which can be used with the Past Perfect Continuous. Notice that this is related to
                    the Present Perfect Continuous; however, the duration does not continue until now, it stops
                    before something else in the past.
                </p>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/dominating/unit57/grammar1.png') }}" alt="crianças">
                    </figure>
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

    $("#unidade57grammar385").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade57grammar385 input[type="text"]').each(function(index) {
            if (($('#unidade57grammar385 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade57grammar385 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade57grammar385'), respostas);
        } else {
            enviarAtividade($('#unidade57grammar385'), respostas);
        }
    });

    $("#unidade57grammar386").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade57grammar386 input[type="text"]').each(function(index) {
            if (($('#unidade57grammar386 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade57grammar386 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade57grammar386'), respostas);
        } else {
            enviarAtividade($('#unidade57grammar386'), respostas);
        }
    });

    $("#unidade57grammar387").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade57grammar387 textarea').attr("name") + '":"' + $('#unidade57grammar387 textarea').val() + '"}';
        if ($('#unidade57grammar387 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade57grammar387'), respostas);
        } else {
            enviarAtividade($('#unidade57grammar387'), respostas);
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
                    $('#unidade57grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade57grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade57grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade57grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade57grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade57grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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