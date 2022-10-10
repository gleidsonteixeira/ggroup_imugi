@extends('layouts.template')
@section('titulo','Unit 54 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade54" data-etapa="grammar">
            <h3 class="barlow">UNIT 54 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - SIMPLE PAST X PRESENT PERFECT</h5>
                <p>It is important to select the grammar structure according to the message you want communicate. Pay attention to difference between Simple Past and Present perfect.</p>
                <div class="metade">
                    <table class=" center-align bordered">
                        <tr class="bordered">
                            <td>
                                <h5 class="barlow">
                                    <b>SIMPLE PAST</b> - Definite time in the past.
                                </h5>
                            </td>
                            <td>
                                <h5 class="barlow">
                                    <b>PRESENT PERFECT</b> - Indefinite time.
                                </h5>
                            </td>
                        </tr>
                        <tr class="bordered">
                            <td class="left-align">
                                <p>A: John, <b>did</b> you <b>travel</b> to new York?</p>
                                <p>B: Yes, I <b>visited</b> Rockstar <b>last year</b></p>
                                <p>I <b>didn’t have</b> time to fool around the city, but it <b>was</b> awesome.</p><br>

                                <p>
                                    Conversation about an <b>isolated situation /
                                        action in the past</b>. Sometimes, the time
                                    reference is implicit. Just the use of the verb
                                    in the past is enough to express that the
                                    action is over.
                                </p>
                            </td>
                            <td class="left-align">
                                <p>A: John, <b>have</b> you <b>ever been</b> to New York?</p>
                                <p>B: Yes, I <b>have</b>. I’<b>ve just arrived</b> from a visit to Rockstar.</p>
                                <p>A: <b>Have</b> you <b>enjoyed</b> the city?</p>
                                <p>B: You’re kidding. It’s the nicest city I’<b>ve been to</b> lately.</p><br>

                                <p>Conversation about the <b>relevance</b> of the trip. <b>The importance of the trip for the present time.</b></p>
                            </td>
                        </tr>
                    </table>
                </div>

                <h5 class="barlow" style="margin-top: 32px"><b>EXERCISES:</b></h5>
                <h5 class="barlow">1 - Use THE SIMPLE PAST or THE PRESENT PERFECT TENSE to fill in the blanks:</h5>
                <form id="unidade54grammar367" style="margin-top:32px" method="post">
                    <p>
                        <p>
                            1. What <input type="text" name="grammar367-1" placeholder="Responda aqui" required /> (you / learn) since you <input type="text" name="grammar367-2" placeholder="Responda aqui" required />
                            (come) here? How many friends <input type="text" name="grammar367-3" placeholder="Responda aqui" required /> (you / make)? I hope you
                            <input type="text" name="grammar367-4" placeholder="Responda aqui" required /> (already / meet) a lot of interesting people.
                        </p>
                        <p>
                            2. Last night my roommate and I <input type="text" name="grammar367-5" placeholder="Responda aqui" required /> (have) some free time, so we
                            <input type="text" name="grammar367-6" placeholder="Responda aqui" required /> (go) to a show.
                        </p>
                        <p>
                            3. I <input type="text" name="grammar367-7" placeholder="Responda aqui" required /> (just / have) lunch, but I
                            <input type="text" name="grammar367-8" placeholder="Responda aqui" required /> (not / have) lunch yesterday.
                        </p>
                        <p>
                            4. Who <input type="text" name="grammar367-9" placeholder="Responda aqui" required /> (write) the play “Hamlet”?
                        </p>
                        <p>
                            5. How many games <input type="text" name="grammar367-10" placeholder="Responda aqui" required /> (the team / win) so far this season?
                        </p>
                        <p>
                            6. I don’t know Carol’s husband. I <input type="text" name="grammar367-11" placeholder="Responda aqui" required /> (never / meet) him.
                        </p>
                        <p>
                            7. It <input type="text" name="grammar367-12" placeholder="Responda aqui" required /> (rain) a lot last week, but it
                            <input type="text" name="grammar367-13" placeholder="Responda aqui" required /> (not / rain) much so far this week.
                        </p>
                        <p>
                            8. How many letters <input type="text" name="grammar367-14" placeholder="Responda aqui" required /> (you / write) since the beginning of the month?
                        </p>
                        <p>
                            9. When we were on vacation, the weather <input type="text" name="grammar367-15" placeholder="Responda aqui" required /> (be) terrible.
                        </p>
                        <p>
                            10. In her whole lifetime, Mary <input type="text" name="grammar367-16" placeholder="Responda aqui" required /> (never / see) snow.
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="54">
                    <input type="hidden" name="atividade_id" value="367">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>

            <h5 class="barlow">2 - Use THE SIMPLE PAST or THE PRESENT PERFECT TENSE to fill in the blanks:</h5>
            <form id="unidade54grammar368" style="margin-top:32px" method="post">
                <p>
                    <p>
                        1. The young man <input type="text" name="grammar368-1" placeholder="Responda aqui" required /> (never / be) to Paris, but he
                        <input type="text" name="grammar368-2" placeholder="Responda aqui" required /> (read) a book about this city last year.
                    </p>
                    <p>
                        2. <input type="text" name="grammar368-3" placeholder="Responda aqui" required /> you <input type="text" name="grammar368-4" placeholder="Responda aqui" required /> (decide) where to go yet?
                    </p>
                    <p>
                        3. <b>P:</b> Have some tea, please.<br>
                        <b>R:</b> No, thank you. I <input type="text" name="grammar368-5" placeholder="Responda aqui" required /> (just / have) two cups of tea.
                    </p>
                    <p>
                        4. Susan <input type="text" name="grammar368-6" placeholder="Responda aqui" required /> (do) her homework before 10 o’clock but Jane
                        <input type="text" name="grammar368-7" placeholder="Responda aqui" required /> (not /write) a word until now.
                    </p>
                    <p>
                        5. Her mother <input type="text" name="grammar368-8" placeholder="Responda aqui" required /> (buy) her a pair of new shoes yesterday.
                    </p>
                    <p>
                        6. The Prime Minister <input type="text" name="grammar368-9" placeholder="Responda aqui" required />. (leave) for the USA an hour ago.
                    </p>
                    <p>
                        7. <b>P:</b> <input type="text" name="grammar368-10" placeholder="Responda aqui" required /> the plane <input type="text" name="grammar368-11" placeholder="Responda aqui" required /> (land)?<br>
                        <b>R:</b> Yes, it <input type="text" name="grammar368-12" placeholder="Responda aqui" required /> (land) ten minutes ago.
                    </p>
                    <p>
                        8. It <input type="text" name="grammar368-13" placeholder="Responda aqui" required /> (not / rain) for a long time.
                    </p>
                    <p>
                        9. <input type="text" name="grammar368-14" placeholder="Responda aqui" required /> you <input type="text" name="grammar368-15" placeholder="Responda aqui" required />
                        (see) my dog? It <input type="text" name="grammar368-16" placeholder="Responda aqui" required /> (run away) this morning.
                    </p>
                    <p>
                        10. We <input type="text" name="grammar368-17" placeholder="Responda aqui" required /> (meet) at a party a long time ago, but I
                        <input type="text" name="grammar368-18" placeholder="Responda aqui" required /> (not / see) her since then.
                    </p>
                </p>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="54">
                <input type="hidden" name="atividade_id" value="368">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">3 - Rewrite the sentences using SIMPLE PAST or PRESENT PERFECT TENSE:</h5>
            <form id="unidade54grammar369" class="metade" style="margin-top:32px" method="post">
                <p>
                    <p>
                        1. I haven’t seen her for a long time.<br>
                        It’s ages since I saw her <input type="text" name="grammar369-1" class="full left-align" placeholder="Responda aqui" required /><br>
                        I last met George two weeks ago.<br>
                        I haven’t <input type="text" name="grammar369-2" class="full left-align" placeholder="Responda aqui" required />
                    </p>
                    <p>
                        2. They have been here for three months.<br>
                        They arrived <input type="text" name="grammar369-3" class="full left-align" placeholder="Responda aqui" required />
                    </p>
                    <p>
                        3. We started living in Istanbul 12 years ago.<br>
                        We have <input type="text" name="grammar369-4" class="full left-align" placeholder="Responda aqui" required />
                    </p>
                    <p>
                        4. I last saw my girlfriend five days ago.<br>
                        I haven’t <input type="text" name="grammar369-5" class="full left-align" placeholder="Responda aqui" required />
                    </p>
                    <p>
                        5. Is this the first time you have tasted a kiwi?<br>
                        <input type="text" name="grammar369-6" placeholder="Responda aqui" required /> (not) you <input type="text" name="grammar369-7" placeholder="Responda aqui" required /> one before?
                    </p>
                    <p>
                        6. I last smoked a cigarette ten years ago.<br>
                        I haven’t <input type="text" name="grammar369-8" class="full left-align" placeholder="Responda aqui" required />
                    </p>
                    <p>
                        7. I last drank wine two weeks ago.<br>
                        It’s two weeks <input type="text" name="grammar369-9" class="full left-align" placeholder="Responda aqui" required /> wine.
                    </p>
                    <p>
                        8. I have lived in Istanbul since January<br>
                        I <input type="text" name="grammar369-10" class="full left-align" placeholder="Responda aqui" required /> (come)
                    </p>
                    <p>
                        9. They moved to Ankara two years ago.<br>
                        They <input type="text" name="grammar369-11" class="full left-align" placeholder="Responda aqui" required /> two years.
                    </p>
                    <p>
                        10. She hasn’t been to Rome before.<br>
                        This is the first time <input type="text" name="grammar369-12" class="full left-align" placeholder="Responda aqui" required />
                    </p>
                </p>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="54">
                <input type="hidden" name="atividade_id" value="369">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow" style="margin-top: 36px">4 - Think of famous movies like Star Wars, Lord of the Rings or Harry Potter. Make a retrospective analysis of one of them. Have in mind that we can use SIMPLE PAST and PRESENT
                PERFECT to do so. Write at least 3 sentences with each verb tense. </h5>
            <form id="unidade54grammar370" method="post">
                <textarea name="grammar370-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="54">
                <input type="hidden" name="atividade_id" value="370">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div style="margin-top: 36px">
                <figure>
                    <img src="{{ asset('assets/img/dominating/unit54/grammar.png') }}" alt="star wars">
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

    $("#unidade54grammar367").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade54grammar367 input[type="text"]').each(function(index) {
            if (($('#unidade54grammar367 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade54grammar367 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade54grammar367'), respostas);
        } else {
            enviarAtividade($('#unidade54grammar367'), respostas);
        }
    });

    $("#unidade54grammar368").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade54grammar368 input[type="text"]').each(function(index) {
            if (($('#unidade54grammar368 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade54grammar368 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade54grammar368'), respostas);
        } else {
            enviarAtividade($('#unidade54grammar368'), respostas);
        }
    });

    $("#unidade54grammar369").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade54grammar369 input[type="text"]').each(function(index) {
            if (($('#unidade54grammar369 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade54grammar369 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade54grammar369'), respostas);
        } else {
            enviarAtividade($('#unidade54grammar369'), respostas);
        }
    });

    $("#unidade54grammar370").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade54grammar370 textarea').attr("name") + '":"' + $('#unidade54grammar370 textarea').val() + '"}';
        if ($('#unidade54grammar370 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade54grammar370'), respostas);
        } else {
            enviarAtividade($('#unidade54grammar370'), respostas);
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
                    $('#unidade54grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade54grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade54grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade54grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade54grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade54grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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