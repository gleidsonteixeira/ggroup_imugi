@extends('layouts.template')
@section('titulo','Unit 27 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade27" data-etapa="grammar">
            <h3 class="barlow">UNIT 27 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - HAVE TO </h5>
                <p><b>Have to</b>, is used to express <b>necessity or lack of necessity</b>.</p>
                <table class="metade center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">Necessity - HAVE TO</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p> <b>I have to finish</b> the briefing for the magazine.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>We <b>have to select</b> the pictures for the article.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5 class="barlow">Lack of necessity - DON't or DOESN'T HAVE TO</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>She <b>doesn't have to arrive</b> so early.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>We <b>don't have to send</b> the report today.</p>
                        </td>
                    </tr>
                </table>

                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Complete the exercises with an appropriate form of HAVE TO in affirmative, negative or interrogative.</h5>
                <form id="unidade27grammar225" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. They <input type="text" name="grammar225-1" placeholder="Responda aqui" required /> write a test. (+)
                            </p>
                            <p>
                                2. She <input type="text" name="grammar225-2" placeholder="Responda aqui" required /> clean her desk.(-)
                            </p>
                            <p>
                                3. Ken and Liz <input type="text" name="grammar225-3" placeholder="Responda aqui" required /> learn English words. (+)
                            </p>
                            <p>
                                4. Andy <input type="text" name="grammar225-4" placeholder="Responda aqui" required /> help his brother.(+)
                            </p>
                            <p>
                                5. We <input type="text" name="grammar225-5" placeholder="Responda aqui" required /> do our homework.(+)
                            </p>
                            <p>
                                6. He <input type="text" name="grammar225-6" placeholder="Responda aqui" required /> write with a pencil.(-)
                            </p>
                            <p>
                                7. I <input type="text" name="grammar225-7" placeholder="Responda aqui" required /> feed the hamster. (-)
                            </p>
                            <p>
                                8. (You) <input type="text" name="grammar225-8" placeholder="Responda aqui" required /> take photos. (?)
                            </p>
                            <p>
                                9. Victoria <input type="text" name="grammar225-9" placeholder="Responda aqui" required /> read the newspaper.(+)
                            </p>
                            <p>
                                10. The teacher <input type="text" name="grammar225-10" placeholder="Responda aqui" required /> send a text message. (-)
                            </p>
                            <p>
                                11. (She) <input type="text" name="grammar225-11" placeholder="Responda aqui" required /> the driving test.(?)
                            </p>
                            <p>
                                12. I <input type="text" name="grammar225-12" placeholder="Responda aqui" required /> tidy yo my room. (+)
                            </p>
                            <p>
                                13. (She) <input type="text" name="grammar225-13" placeholder="Responda aqui" required /> feed her dog in the morning. (?)
                            </p>
                            <p>
                                14. I <input type="text" name="grammar225-14" placeholder="Responda aqui" required /> do my housework at the weekend. (+)
                            </p>
                            <p>
                                15. Bob and Tom <input type="text" name="grammar225-15" placeholder="Responda aqui" required /> finish their essays. (-)
                            </p>
                            <p>
                                16. She <input type="text" name="grammar225-16" placeholder="Responda aqui" required /> write with a ball pen. (+)
                            </p>
                            <p>
                                17. You <input type="text" name="grammar225-17" placeholder="Responda aqui" required /> take a shower in the evening. (+)
                            </p>
                            <p>
                                18. Chris<input type="text" name="grammar225-18" placeholder="Responda aqui" required /> help his father in the garden. (-)
                            </p>
                            <p>
                                19. (You) <input type="text" name="grammar225-19" placeholder="Responda aqui" required /> do your homework. (?)
                            </p>
                            <p>
                                20. She <input type="text" name="grammar225-20" placeholder="Responda aqui" required /> read the English magazine. (+)
                            </p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="27">
                    <input type="hidden" name="atividade_id" value="225">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>

            <h5 class="barlow">2 - In groups, debate about what is necessary to be a good professional in the Visual Art
                market. Be prepared to present to your classmates and to support your ideas.</h5>
            <form id="unidade27grammar226" method="post">
                <textarea name="grammar226-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="27">
                <input type="hidden" name="atividade_id" value="226">
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

    $("#unidade27grammar225").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade27grammar225 input[type="text"]').each(function(index) {
            if (($('#unidade27grammar225 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade27grammar225 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade27grammar225'), respostas);
        } else {
            enviarAtividade($('#unidade27grammar225'), respostas);
        }
    });


    $("#unidade27grammar226").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade27grammar226 textarea').attr("name") + '":"' + $('#unidade27grammar226 textarea').val() + '"}';
        if ($('#unidade27grammar226 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade27grammar226'), respostas);
        } else {
            enviarAtividade($('#unidade27grammar226'), respostas);
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
                    $('#unidade27grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade27grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade27grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade27grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade27grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade27grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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