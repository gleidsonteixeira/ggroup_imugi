@extends('layouts.template')
@section('titulo','Unit 17 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade17" data-etapa="grammar">
            <h3 class="barlow">UNIT 17</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 17/03_GRAMMAR/GRAMMAR_17.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top:16px">
                <h5 class="barlow" style="margin-top: 16px">A - MUST + PERFECT INFINITIVE.</h5>
                <p>
                    As we saw during the lesson on Modal Verbs review (lesson 15) , <b>Must</b> may be used
                    to express different ideas such as obligation, assumpti on and prohibition. It’s also
                    possible to use <b>Must + Perfect Infinitive</b> to express assumptions about the past.
                </p>
                <div class="center-align">
                    <p class="contentVerde" style="margin-top:32px;">Subject + Must + Have + Main verb in the past participle + Complement</p>
                </div>
                <h5 class="barlow" style="margin-top:16px;"><b>Examples:</b></h5>
                <ul class="lista-vertical">
                    <li><p>• Laura <b>must have loved</b> her trip to London. So far, she hasn’t showed up for class.</p></li>
                    <li><p>• Akira <b>must have had</b> a hard time to edit the video. He ran out of time because of the problem he had with his computer.</p></li>
                    <li><p>• We <b>must have gotten </b>a nice grade in the final project. We worked hard for that.</p></li>
                </ul>
                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Think of 5 famous Youtubers and write 2 sentences for each one of them. Be prepared
                    to explain each sentence.</h5>
                <h5 class="barlow" style="margin-top:16px"><b>Example</b></h5>
                <p><b>Whindersson Nunes : He must have faced</b> a hard time in the beginning of his career.</p>
                <p><b>Why</b> : He took a long time to have his videos watched by millions of people.</p>
                <form id="unidade17grammar588" method="post">
                    <textarea name="grammar588-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="17">
                    <input type="hidden" name="atividade_id" value="588">
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

    $("#unidade17grammar588").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade17grammar588 textarea').attr("name") + '":"' + $('#unidade17grammar588 textarea').val() + '"}';
        if ($('#unidade17grammar588 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade17grammar588'), respostas);
        } else {
            enviarAtividade($('#unidade17grammar588'), respostas);
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
                    $('#unidade17grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade17grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade17grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade17grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade17grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade17grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
            }
        });
    }

    function enviarAtividade(formId, respostas) {
        var atividade = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_respostas": respostas,
            "atividade_id": formId.find('input[name="atividade_id"]').val(),
            "unidade_id": formId.find('input[name="unidade_id"]').val()
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: atividade,
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
