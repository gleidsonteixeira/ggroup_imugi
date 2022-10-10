@extends('layouts.template')
@section('titulo','Unit 25 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade25" data-etapa="grammar">
            <h3 class="barlow">UNIT 25</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - MODAL VERB MAY / MIGHT</h5>

            <table class="metade left-align">
                <tr>
                    <td>
                        <h5 class="barlow">MAY</h5>
                    </td>
                    <td>
                        <p>Used for <b>probability and approval of actions or statements</b>.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 class="barlow">MIGHT</h5>
                    </td>
                    <td>
                        <p>Used for <b>remote probability</b>
                    </td>
                </tr>
            </table>

            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">MAY</h5>
                    </td>
                    <td>
                        <h5 class="barlow">MIGHT</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>It may rain</b> today. Look at those dark clouds</p>
                    </td>
                    <td>
                        <p><b>I might have</b> to travel next week. It all depends on the client´s agenda</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>May I help</b> you sir? May I come in ?</p>
                    </td>
                    <td>
                        <p>She <b>might be</b> sick. That´s why she´s absent.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>I may arrive</b> late in the next class guys.</p>
                    </td>
                    <td>
                        <p><b>I might be</b> absent</p>
                    </td>
                </tr>
            </table>

            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">MAY</h5>
                    </td>
                    <td>
                        <h5 class="barlow">MIGHT</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(+) He <b>may have</b> to redo the entire job.</p>
                    </td>
                    <td>
                        <p>(+) you <b>might have</b> to reset your computer</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(-) He <b>may not</b> have to redo the entire job.</p>
                    </td>
                    <td>
                        <p>(-) you <b>might not</b> have to reset your computer.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(?) <b>May</b> he <b>have</b> to redo the entire job ?</p>
                    </td>
                    <td>
                        <p>(?) <b>might</b> you <b>have</b> to reset your computer ?</p>
                    </td>
                </tr>
            </table>

            <h5 class="barlow" style="margin-top:16px">1 - select the correct auxiliary modal verb in each sentence.</h5>
            <form id="unidade25grammar213" method="post">
                <p>1 - When I grow up, I (<input type="radio" name="grammar-213-1" value="1" required><b>may</b>, <input type="radio" name="grammar-213-1" value="2" required><b>might</b>) become an engineer.</p>
                <p>2. There is a small chance the we (<input type="radio" name="grammar-213-2" value="1" required><b>may</b>, <input type="radio" name="grammar-213-2" value="2" required><b>might</b>) go to the beach this weekend.</p>
                <p>3. There is a good change that we (<input type="radio" name="grammar-213-3" value="1" required><b>might</b>, <input type="radio" name="grammar-213-3" value="2" required><b>may</b>) have to postpone the meeting</p>
                <p>4. Billy and I (<input type="radio" name="grammar-213-4" value="1" required><b>may</b>, <input type="radio" name="grammar-213-4" value="2" required><b>might</b>) cook dinner tonight.</p>
                <p>5. The airplane (<input type="radio" name="grammar-213-5" value="1" required><b>might</b>, <input type="radio" name="grammar-213-5" value="2" required><b>may</b>) crash.</p>
                <p>6. You never know, I (<input type="radio" name="grammar-213-6" value="1" required><b>may</b>, <input type="radio" name="grammar-213-6" value="2" required><b>might</b>) become president one day.</p>
                <p>7. (<input type="radio" name="grammar-213-7" value="1" required><b>may</b>, <input type="radio" name="grammar-213-7" value="2" required><b>might</b>) I have a piece of bread please?</p>
                <p>8. It (<input type="radio" name="grammar-213-8" value="1" required><b>might</b>, <input type="radio" name="grammar-213-8" value="2" required><b>may</b>) snow tonight, but I doubt it.</p>
                <p>9. If Jane studied harder, she (<input type="radio" name="grammar-213-9" value="1" required><b>might</b>, <input type="radio" name="grammar-213-9" value="2" required><b>may</b>) have gotten a better grade on the test. </p>
                <p>
                    10. I (<input type="radio" name="grammar-213-10" value="1" required><b>might</b>, <input type="radio" name="grammar-213-10" value="2" required><b>may</b>) not be coming to your party tonight. I told my mother that I would
                    stay home and make cookies with her already. I’m sorry
                </p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="25">
                <input type="hidden" name="atividade_id" value="213">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            
            <h5 class="barlow">2 - Complete the exercise with MAY ir MIGHT. Take into account the context to decide which one to use.</h5>
            <form id="unidade25grammar214" action="post">
                <p>1. Take your umbrella as it<input type="text" name="grammar214-1" placeholder="Responda aqui" required>(rain) today</p>
                <p>2. He is still at work! He<input type="text" name="grammar214-2" placeholder="Responda aqui" required>(be) finishing his report for tomorrow.</p>
                <p>3. John couldn’t repair his washing machine; he<input type="text" name="grammar214-3" placeholder="Responda aqui" required>(ask) his neighbor.</p>
                <p>4. Darling! I wonder if I<input type="text" name="grammar214-4" placeholder="Responda aqui" required>(invite) you out this weekend.</p>
                <p>5. Mum! My friends are having a party tonight;<input type="text" name="grammar214-5" placeholder="Responda aqui" required> (go) please?</p>
                <p>6. He<input type="text" name="grammar214-6" placeholder="Responda aqui" required> (be) late because his flight delayed</p>
                <p>7. Look at that car speeding up. He<input type="text" name="grammar214-7" placeholder="Responda aqui" required>(have) a bad accident.</p>
                <p>8. I studied a lot for the test . I finally<input type="text" name="grammar214-8" placeholder="Responda aqui" required>(have) a good result.</p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="25">
                <input type="hidden" name="atividade_id" value="214">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <figure>
                <img src="{{ asset('assets/img/dominating/unit25/grammar.png') }}" alt="guarda-chuva">
            </figure>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top:16px">3 - Think about the future 20 years from now. In your opinion, what MIGHT or MAY happen with technology?</h5>
            <form id="unidade25grammar215" action="post">
                <textarea name="grammar215-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="25">
                <input type="hidden" name="atividade_id" value="215">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        var inputType = $(this).find('input').attr('type');
        checkAtividade(atividade_id, inputType);
    });

    $("#unidade25grammar213").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade25grammar213 input[type="radio"]:checked').each(function(index) {
            if (($('#unidade25grammar213 input[type="radio"]:checked').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade25grammar213 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade25grammar213'), respostas);
        } else {
            enviarAtividade($('#unidade25grammar213'), respostas);
        }
    });

    $("#unidade25grammar214").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade25grammar214 input[type="text"]').each(function(index) {
            if (($('#unidade25grammar214 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade25grammar214 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade25grammar214'), respostas);
        } else {
            enviarAtividade($('#unidade25grammar214'), respostas);
        }
    });

    $("#unidade25grammar215").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade25grammar215 textarea').attr("name") + '":"' + $('#unidade25grammar215 textarea').val() + '"}';
        if ($('#unidade25grammar215 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade25grammar215'), respostas);
        } else {
            enviarAtividade($('#unidade25grammar215'), respostas);
        }
    });

    function checkAtividade(atividade_id, inputType) {
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

                console.log('tipo input -> ' + inputType);
                if (inputType === 'radio') {
                    for (j = 0; j < respostas.length; j++) {
                        $('#unidade25grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    }
                } else {
                    for (j = 0; j < respostas.length; j++) {
                        $('#unidade25grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                        $('#unidade25grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                        $('#unidade25grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                        $('#unidade25grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    }
                }
                $('#unidade25grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade25grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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