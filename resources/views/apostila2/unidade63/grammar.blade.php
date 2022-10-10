@extends('layouts.template')
@section('titulo','Unit 63 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade63" data-etapa="grammar">
            <h3 class="barlow">UNIT 63</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - Choose the correct tense.</h5>
                <form id="unidade63grammar413" method="post">
                    <p>
                        <p>
                            1. I can’t come to see you now, because I (<input type="radio" name="grammar413-1" value="1" required /> <b>am finishing /</b> <input type="radio" name="grammar413-1" value="2" required /> <b>finish</b>) my homework.
                        </p>
                        <p>
                            2. You’ve dropped your wallet. (<input type="radio" name="grammar413-2" value="1" required /> <b>I’m going to /</b> <input type="radio" name="grammar413-2" value="2" required /><b>I’ll)</b> pick it up for you.
                        </p>
                        <p>
                            3. It was the first time the actor (<input type="radio" name="grammar413-3" value="1" required /> <b>received /</b> <input type="radio" name="grammar413-3" value="2" required /> <b>was receiving</b>) such bad reviews.
                        </p>
                        <p>
                            4. I (<input type="radio" name="grammar413-4" value="1" required /> <b>watched /</b> <input type="radio" name="grammar413-4" value="2" required /> <b>was watching</b>) my favorite show when the doorbell rang.
                        </p>
                        <p>
                            5. They (<input type="radio" name="grammar413-5" value="1" required /> <b>awarded /</b><input type="radio" name="grammar413-5" value="2" required /> <b>have awarded</b>) Bob Matthews an Oscar. It was on the news just now.
                        </p>
                        <p>
                            6. They (<input type="radio" name="grammar413-6" value="1" required /> <b>broadcast /</b><input type="radio" name="grammar413-6" value="2" required /> <b>were broadcasting</b>) the match live when the rain stopped play.
                        </p>
                        <p>
                            7. We looked out of the window and saw that it (<input type="radio" name="grammar413-7" value="1" required /><b>was raining /</b><input type="radio" name="grammar413-7" value="2" required /> <b>rained</b>) so we decided to stay at home.
                        </p>
                        <p>
                            8. TV talk shows (<input type="radio" name="grammar413-8" value="1" required /> <b>increase /</b><input type="radio" name="grammar413-8" value="2" required /> <b>are increasing)</b> in number all the time.
                        </p>
                        <p>
                            9. Can you remember what you (<input type="radio" name="grammar413-9" value="1" required /><b>were wearing /</b><input type="radio" name="grammar413-9" value="2" required /> <b>were</b>) when you lost your handbag ?
                        </p>
                        <p>
                            10. I (<input type="radio" name="grammar413-10" value="1" required /> <b>had been skiing /</b><input type="radio" name="grammar413-10" value="2" required /> <b>skied</b>) before but last week was really awesome.
                        </p>
                        <p>
                            11. I (<input type="radio" name="grammar413-11" value="1" required /> <b>have gone /</b><input type="radio" name="grammar413-11" value="2" required /> <b>went</b>) to a modern art exhibition last week.
                        </p>
                        <p>
                            12. I (<input type="radio" name="grammar413-12" value="1" required /> <b>have been reading /</b><input type="radio" name="grammar413-12" value="2" required /> <b>have read</b>) a new novel by John Grisham. It’s so thrilling I can’t put it down!
                        </p>
                        <p>
                            13. I (<input type="radio" name="grammar413-13" value="1" required /> <b>had been waited /</b><input type="radio" name="grammar413-13" value="2" required /> <b>had waited</b>) for ages for her to write before the letter finally arrived.
                        </p>
                        <p>
                            14. When I (<input type="radio" name="grammar413-14" value="1" required /> <b>finished /</b><input type="radio" name="grammar413-14" value="2" required /> <b>have finished</b>) reading the book, I’m going to start a new one.
                        </p>
                        <p>
                            15. They (<input type="radio" name="grammar413-15" value="1" required /> <b>broadcast /</b><input type="radio" name="grammar413-15" value="2" required /> <b>have broadcast</b>) the program twice on TV already.
                        </p>
                        <p>
                            16. As it (<input type="radio" name="grammar413-16" value="1" required /> <b>had snowed /</b><input type="radio" name="grammar413-16" value="2" required /> <b>had been snowing</b>) the whole night all the roads were blocked.
                        </p>
                        <p>
                            17. I usually (<input type="radio" name="grammar413-17" value="1" required /> <b>tell /</b><input type="radio" name="grammar413-17" value="2" required /> <b>am telling</b>) the children a story before they go to bed.
                        </p>
                        <p>
                            18. The most popular film he (<input type="radio" name="grammar413-18" value="1" required /> <b>made /</b><input type="radio" name="grammar413-18" value="2" required /> <b>has made</b>) so far is Ridding High.
                        </p>
                        <p>
                            19. I’m going now but (<input type="radio" name="grammar413-19" value="1" required /> <b>I’m seeing /</b><input type="radio" name="grammar413-19" value="2" required /> <b>I’ll see</b>) you at the same time tomorrow.
                        </p>
                        <p>
                            20. I (<input type="radio" name="grammar413-20" value="1" required /> <b>have been watching /</b><input type="radio" name="grammar413-20" value="2" required /><b>have watched</b>) TV for hours now. I’ve had enough.
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="63">
                    <input type="hidden" name="atividade_id" value="413">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/dominating/unit63/grammar.png') }}" alt="avistando">
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

    $("#unidade63grammar413").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade63grammar413 input[type="radio"]:checked').each(function(index) {
            if (($('#unidade63grammar413 input[type="radio"]:checked').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade63grammar413 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade63grammar413'), respostas);
        } else {
            enviarAtividade($('#unidade63grammar413'), respostas);
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
                    $('#unidade63grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    $('#unidade63grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade63grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade63grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade63grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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