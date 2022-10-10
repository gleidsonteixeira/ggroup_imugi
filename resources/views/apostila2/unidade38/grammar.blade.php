@extends('layouts.template')
@section('titulo','Unit 38 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade38" data-etapa="grammar">
            <h3 class="barlow">UNIT 38 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 38/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - INFINITIVES</h5>
                <p>We use <b>infinitives</b> after some specific verbs. Take a look at the examples below.</p>
                <div class="metade">
                    <table class="center-align">
                        <tr>
                            <td>
                                <h5 class="barlow"><b>VERB</b></h5>
                            </td>
                            <td>
                                <h5 class="barlow">EXAMPPLES</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow">Decide</h5>
                            </td>
                            <td>
                                <p>She <b>decided to accept</b> the NGO job.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow">Help</h5>
                            </td>
                            <td>
                                <p>You <b>helped to set up</b> the new computer.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow">Prefer</h5>
                            </td>
                            <td>
                                <p>We prefer to meet after break.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow">Want</h5>
                            </td>
                            <td>
                                <p>He wants to live in Singapore.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="barlow">Promise</h5>
                            </td>
                            <td>
                                <p>They promised to finish in time.</p>
                            </td>
                        </tr>
                    </table>
                    <table class="metade center-align">
                        <tr>
                            <td>
                                <h5 class="barlow">Other Verbs</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Afford, agree, appear, arrange, ask, attempt, beg, care, choose, consent, dare,
                                    decide, determine, expect, fail, forget, happen, hesitate, intend, learn, manage,
                                    mean, neglect, offer, prepare, pretend, promise, refuse, remember, wish.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <p style="margin-top:16px">
                    Some verbs may be followed <b>by either gerund or infinitive</b>. The meaning of the
                    sentences are going to be different though. Take a look at the examples.
                </p>
                <table class="metade espacamento center-align" style="margin-top:32px">
                    <tr>
                        <td>
                            <h5 class="barlow">Gerund</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Infinitive</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>I <b>stopped studying</b> last year.</p>
                        </td>
                        <td>
                            <p>I <b>stopped to study</b> last year.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>I <b>remembered telling</b> you about the project.</p>
                        </td>
                        <td>
                            <p>I <b>remembered to tell</b> you about the project.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>I stopped smoking</b>.</p>
                        </td>
                        <td>
                            <p><b>I stopped to smoke</b>.</p>
                        </td>
                    </tr>
                </table>

                <h5 class="barlow" style="margin-top: 32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Complete the with the INFINITIVE.</h5>
                <form id="unidade38grammar279" style="margin-top:32px" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. He agreed <input type="text" name="grammar279-1" placeholder="Responda aqui" required /> (see) me at ten o’clock .
                            </p>
                            <p>
                                2. He offered <input type="text" name="grammar279-2" placeholder="Responda aqui" required /> (make) dinner for us.
                            </p>
                            <p>
                                3. Do you feel like <input type="text" name="grammar279-3" placeholder="Responda aqui" required /> (go) to the theatre on Friday?
                            </p>
                            <p>
                                4. I spent a lot of time <input type="text" name="grammar279-4" placeholder="Responda aqui" required /> (make) a birthday cake for him.
                            </p>
                            <p>
                                5. I suggest <input type="text" name="grammar279-5" placeholder="Responda aqui" required /> (pay) by check, it’s safer than cash.
                            </p>
                            <p>
                                6. He put of <input type="text" name="grammar279-6" placeholder="Responda aqui" required /> (see) her until very late in the afternoon.
                            </p>
                            <p>
                                7. I’ve finished <input type="text" name="grammar279-7" placeholder="Responda aqui" required /> (read) that book at last!
                            </p>
                            <p>
                                8. Please, remember <input type="text" name="grammar279-8" placeholder="Responda aqui" required /> (feed) the dog while I’m away.
                            </p>
                            <p>
                                9. Don’t forget <input type="text" name="grammar279-9" placeholder="Responda aqui" required /> (post) my letters, please.
                            </p>
                            <p>
                                10. We regret <input type="text" name="grammar279-10" placeholder="Responda aqui" required /> (inform) you that your application has been refused.
                            </p>
                            <p>
                                11. You are not allowed <input type="text" name="grammar279-11" placeholder="Responda aqui" required /> on the airplane. (smoke)
                            </p>
                            <p>
                                12. She agreed <input type="text" name="grammar279-12" placeholder="Responda aqui" required /> (pay) the electricity bill the following week.
                            </p>
                            <p>
                                13. Elizabeth didn’t need <input type="text" name="grammar279-13" placeholder="Responda aqui" required /> (do) the final exams).
                            </p>
                            <p>
                                14. Your aunt wished <input type="text" name="grammar279-14" placeholder="Responda aqui" required /> (visit) Australia in summer.
                            </p>
                            <p>
                                15. Your friend seems <input type="text" name="grammar279-15" placeholder="Responda aqui" required /> (be) very busy today.
                            </p>
                            <p>
                                16. I’m amazed because you didn’t hesitate <input type="text" name="grammar279-16" placeholder="Responda aqui" required /> (accept) the job.
                            </p>
                            <p>
                                17. The policeman pretended <input type="text" name="grammar279-17" placeholder="Responda aqui" required /> (keep) my identity card.
                            </p>
                            <p>
                                18. The car is too expensive, so I can’t afford <input type="text" name="grammar279-18" placeholder="Responda aqui" required /> (buy) it.
                            </p>
                            <p>
                                19. The couple chose <input type="text" name="grammar279-19" placeholder="Responda aqui" required /> Spend their honeymoon in Canada.
                            </p>
                            <p>
                                20. You hate <input type="text" name="grammar279-20" placeholder="Responda aqui" required /> (wait) for your girlfriend.
                            </p>
                            <p>
                                21. George’s father learned <input type="text" name="grammar279-21" placeholder="Responda aqui" required /> (play) the guitar in five years.
                            </p>
                            <p>
                                22. My aunt claimed <input type="text" name="grammar279-22" placeholder="Responda aqui" required /> (be) the owner of the red suitcase.
                            </p>
                            <p>
                                23. Tina intended <input type="text" name="grammar279-23" placeholder="Responda aqui" required /> (borrow) my computer.
                            </p>
                            <p>
                                24. All my friends wanted <input type="text" name="grammar279-24" placeholder="Responda aqui" required /> (go) to the zoo in the afternoon.
                            </p>
                            <p>
                                25. I’d like <input type="text" name="grammar279-25" placeholder="Responda aqui" required /> (fly) to the moon soon.
                            </p>
                        </p>
                    </div>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="38">
                    <input type="hidden" name="atividade_id" value="279">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>

            <h5 class="barlow">2 - Use the GERUND or INFINITIVE forms of the verbs in brackets:</h5>
            <form id="unidade38grammar280" style="margin-top:32px" method="post">
                <p>
                    <p>
                        1. After she had decided <input type="text" name="grammar280-1" placeholder="Responda aqui" required /> (stay) in Turkey, she got used to <input type="text" name="grammar280-2" placeholder="Responda aqui" required /> (eat) Turkish foods.
                    </p>
                    <p>
                        2. They seem <input type="text" name="grammar280-3" placeholder="Responda aqui" required /> (have) plenty of money.
                    </p>
                    <p>
                        3. I’m sorry sir, I’m late, but I promise <input type="text" name="grammar280-4" placeholder="Responda aqui" required /> (not / be) late again.
                    </p>
                    <p>
                        4. I remember <input type="text" name="grammar280-5" placeholder="Responda aqui" required /> (go) to the cinema with my girl friend when I was a teenager.
                    </p>
                    <p>
                        5. He is ashamed of <input type="text" name="grammar280-6" placeholder="Responda aqui" required /> (steal) that money.
                    </p>
                    <p>
                        6. I think we’d better <input type="text" name="grammar280-7" placeholder="Responda aqui" required /> (exchange) names and addresses.
                    </p>
                    <p>
                        7. Would you mind <input type="text" name="grammar280-8" placeholder="Responda aqui" required /> (show) me how <input type="text" name="grammar280-9" placeholder="Responda aqui" required /> (work) the new machine?
                    </p>
                    <p>
                        8. She warned her child <input type="text" name="grammar280-10" placeholder="Responda aqui" required /> (not / touch) the wire.
                    </p>
                    <p>
                        9. Can you manage <input type="text" name="grammar280-11" placeholder="Responda aqui" required /> (finish) <input type="text" name="grammar280-12" placeholder="Responda aqui" required /> (pack) these parcels alone?
                    </p>
                    <p>
                        10. His doctor advised him <input type="text" name="grammar280-13" placeholder="Responda aqui" required /> (give up) <input type="text" name="grammar280-14" placeholder="Responda aqui" required /> (sit) up late at night?
                    </p>
                </p>
                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="38">
                <input type="hidden" name="atividade_id" value="280">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div style="margin-top: 36px">
                <figure>
                    <img src="{{ asset('assets/img/dominating/unit38/grammar.png') }}" alt="bandeiras">
                </figure>
            </div>

            <h5 class="barlow" style="margin-top: 36px">3 - Using INFINITIVE write some tips for a person who is traveling abroad for the first time.</h5>
            <form id="unidade38grammar281" method="post">
                <textarea name="grammar281-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="38">
                <input type="hidden" name="atividade_id" value="281">
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

    $("#unidade38grammar279").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade38grammar279 input[type="text"]').each(function(index) {
            if (($('#unidade38grammar279 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade38grammar279 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade38grammar279'), respostas);
        } else {
            enviarAtividade($('#unidade38grammar279'), respostas);
        }
    });

    $("#unidade38grammar280").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade38grammar280 input[type="text"]').each(function(index) {
            if (($('#unidade38grammar280 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade38grammar280 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade38grammar280'), respostas);
        } else {
            enviarAtividade($('#unidade38grammar280'), respostas);
        }
    });

    $("#unidade38grammar281").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade38grammar281 textarea').attr("name") + '":"' + $('#unidade38grammar281 textarea').val() + '"}';
        if ($('#unidade38grammar281 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade38grammar281'), respostas);
        } else {
            enviarAtividade($('#unidade38grammar281'), respostas);
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
                    $('#unidade38grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade38grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade38grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade38grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade38grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade38grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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