@extends('layouts.template')
@section('titulo','Unit 53 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade53" data-etapa="grammar">
            <h3 class="barlow">UNIT 53 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - PRESENT PERFECT CONTINUOUS</h5>
                <p>
                    We use the Present Perfect Continuous to show that something started in the past and
                    has continued up until now. “For five minutes,” “for two weeks,” and “since Tuesday”
                    are all durations which can be used with the Present Perfect Continuous. You can also
                    use the Present Perfect Continuous WITHOUT a duration such as “for two weeks.” Without the duration, the tense has a more general meaning of “lately.” We often use the
                    words “lately” or “recently” to this meaning. emphasize
                </p>

                <p class="bordaVerde"><b>Present Perfect Continuous = Subject + Have / Has + BEEN + Verb(ing)</b></p>
                <table class="metade espacamento center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">PRESENT PERFECT</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>(+) They <b>have been talking</b> for three hours.</p>
                            <p>(-) They haven’t <b>been talking</b> for three hours.</p>
                            <p>(?) <b>Have</b> they <b>been talking</b> for three hours?</p><br>

                            <p>(+) James <b>has been studying</b> Unity since June.</p>
                            <p>(-) James <b>hasn’t been teaching</b> since June.</p>
                            <p>(?) Has James <b>been teaching</b> since June?</p><br>

                            <p>(+) We <b>have been taking</b> about animation lately.</p>
                            <p>(-) We <b>haven’t been talking</b> about animation lately.</p>
                            <p>(?) <b>Have</b> we <b>been talking</b> about animation lately?</p><br>

                            <p>(+) Dc Comics <b>has been working</b> on its new release recently.</p>
                            <p>(-) DC Comics <b>hasn’t been working</b> on its new release recently.<p>
                                    <p>(?) <b>Has</b> Dc Comics <b>been working</b> on its new release recently?</p>
                        </td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top: 32px"><b>EXERCISES:</b></h5>
                <h5 class="barlow">1 - Use PRESENT PERFECT CONTINUOUS TENSE to fill in the blanks:</h5>
                <form id="unidade53grammar361" style="margin-top:32px" method="post">
                    <div class="metade">
                        <p>
                            <p>1. I’m tired, because I <input type="text" name="grammar361-1" placeholder="Responda aqui" required /> have been working <input type="text" name="grammar361-2" placeholder="Responda aqui" required /> (work) very hard.</p>
                            <p>2. He <input type="text" name="grammar361-3" placeholder="Responda aqui" required /> (write) letters all morning.</p>
                            <p>3. Catherina is getting fatter because she <input type="text" name="grammar361-4" placeholder="Responda aqui" required /> (eat) too much.</p>
                            <p>4. My mother <input type="text" name="grammar361-5" placeholder="Responda aqui" required /> (peel) the potatoes all afternoon.</p>
                            <p>5. Cathy <input type="text" name="grammar361-6" placeholder="Responda aqui" required /> (attend) a cookery course since March.</p>
                            <p>6. How long <input type="text" name="grammar361-7" placeholder="Responda aqui" required /> you <input type="text" name="grammar361-8" placeholder="Responda aqui" required /> (learn) English?</p>
                            <p>7. Where are my eye-glasses? I <input type="text" name="grammar361-9" placeholder="Responda aqui" required /> (look) for them for an hour.</p>
                            <p>8. Charles <input type="text" name="grammar361-10" placeholder="Responda aqui" required /> (escape) from the police for years.</p>
                            <p>9. How long <input type="text" name="grammar361-11" placeholder="Responda aqui" required /> you <input type="text" name="grammar361-12" placeholder="Responda aqui" required /> (use) a computer?</p>
                            <p>10. Elizabeth <input type="text" name="grammar361-13" placeholder="Responda aqui" required /> (live) with Mike for three years.</p>
                        </p>
                    </div>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="53">
                    <input type="hidden" name="atividade_id" value="361">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>
            <h5 class="barlow">2 - Directions: Complete each sentence or question with the present perfect continuous tense</h5>
            <form id="unidade53grammar362" style="margin-top:32px" method="post">
                <div class="metade">
                    <p>
                        <p>1. She <input type="text" name="grammar362-1" placeholder="Responda aqui" required /> at that company for three years. (work)</p>
                        <p>2. The students <input type="text" name="grammar362-2" placeholder="Responda aqui" required /> a new textbook this year. (use)</p>
                        <p>3. Barry <input type="text" name="grammar362-3" placeholder="Responda aqui" required /> very well lately. (feel -- negative)</p>
                        <p>4. We <input type="text" name="grammar362-4" placeholder="Responda aqui" required /> a lot about perfect tenses. (learn)</p>
                        <p>5. <input type="text" name="grammar362-5" placeholder="Responda aqui" required /> all day? (rain)</p>
                        <p>6. My sister <input type="text" name="grammar362-6" placeholder="Responda aqui" required /> on her cell phone for the last hour. (talk)</p>
                        <p>7. My car <input type="text" name="grammar362-7" placeholder="Responda aqui" required /> .very well lately. (run--negative)</p>
                        <p>8. How <input type="text" name="grammar362-8" placeholder="Responda aqui" required /> you <input type="text" name="grammar354-1" placeholder="Responda aqui" required /> in school? (do)</p>
                        <p>9. How long <input type="text" name="grammar362-9" placeholder="Responda aqui" required /> her? (see*)</p>
                        <p>10. I <input type="text" name="grammar362-10" placeholder="Responda aqui" required /> very hard on my English. (work) * see = go out with; have a relationship with someone</p>
                    </p>
                </div>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="53">
                <input type="hidden" name="atividade_id" value="362">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">3 - Use PRESENT PERFECT TENSE or PRESENT PERFECT CONTINUOUS to fill in the blanks:</h5>
            <form id="unidade53grammar363" style="margin-top:32px" method="post">
                <div class="metade">
                    <p>
                        <p>
                            1. I’m trying to study. I <input type="text" name="grammar363-1" placeholder="Responda aqui" required /> (try) to study for the last hour, but
                            something always seems to interrupt me. I think I’d better go to the library.
                        </p>
                        <p>
                            2. The children are playing basketball right now. They <input type="text" name="grammar363-2" placeholder="Responda aqui" required /> (play)
                            for almost two hours. They must be getting tired.
                        </p>
                        <p>
                            3. The telephone <input type="text" name="grammar363-3" placeholder="Responda aqui" required /> (ring) four times in the last hour, and
                            each time it has been for my roommate.
                        </p>
                        <p>
                            4. The telephone <input type="text" name="grammar363-4" placeholder="Responda aqui" required /> (ring) for almost a minute. Why doesn’t
                            someone answer it?
                        </p>
                        <p>
                            5. It <input type="text" name="grammar363-5" placeholder="Responda aqui" required /> (rain) all day. I wonder when it will stop.
                        </p>
                        <p>
                            6. We <input type="text" name="grammar363-6" placeholder="Responda aqui" required /> (have) three accidents so far this week. I wonder
                            how many more we will have if you keep using the tools carelessly.
                        </p>
                        <p>
                            7. We <input type="text" name="grammar363-7" placeholder="Responda aqui" required /> (live) here since last June.
                        </p>
                        <p>
                            8. My little son is dirty from head to foot because he <input type="text" name="grammar363-8" placeholder="Responda aqui" required /> (play)
                            in the mud.
                        </p>
                        <p>
                            9. What’s the matter? Your eyes are red and puffy. I hope you <input type="text" name="grammar363-9" placeholder="Responda aqui" required /> (not / cry).
                            Oh, now I understand. You <input type="text" name="grammar363-10" placeholder="Responda aqui" required /> (peel) some onions.
                        </p>
                        <p>
                            10. Hello, Rob. I’m happy to see you again. I <input type="text" name="grammar363-11" placeholder="Responda aqui" required /> (not / see)
                            you for weeks. What <input type="text" name="grammar363-12" placeholder="Responda aqui" required /> you <input type="text" name="grammar363-13" placeholder="Responda aqui" required /> (do) lately?
                        </p>
                        <p>
                            11. I <input type="text" name="grammar363-14" placeholder="Responda aqui" required /> (not / be) able to reach my boss on the phone
                            yet. I <input type="text" name="grammar363-15" placeholder="Responda aqui" required /> (try) for the last twenty minutes, but the line
                            <input type="text" name="grammar363-16" placeholder="Responda aqui" required /> busy.
                        </p>
                        <p>
                            12. We <input type="text" name="grammar363-17" placeholder="Responda aqui" required /> (have) three major snowstorms so far this winter. I
                            wonder how many more we will have.
                        </p>
                        <p>
                            13. I <input type="text" name="grammar363-18" placeholder="Responda aqui" required /> (write) them three times, but I still haven’t received a
                            reply.
                        </p>
                        <p>
                            14. <b>P:</b> Dr. Harrison is a good teacher. How long <input type="text" name="grammar363-19" placeholder="Responda aqui" required /> he <input type="text" name="grammar354-20" placeholder="Responda aqui" required /> (be) at the
                            university?
                            <b>R:</b> He <input type="text" name="grammar363-21" placeholder="Responda aqui" required /> (teach) here for almost 25 years.
                        </p>
                        <p>
                            15. <b>P:</b> What are you going to order for dinner?
                            <b>R:</b> Well, I <input type="text" name="grammar363-22" placeholder="Responda aqui" required /> (have / have) pizza. So I think, I’ll order that.
                        </p>
                    </p>
                </div>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="53">
                <input type="hidden" name="atividade_id" value="363">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div style="margin-top: 36px">
                <figure>
                    <img src="{{ asset('assets/img/dominating/unit53/grammar.png') }}" alt="basquete">
                </figure>
            </div>

            <h5 class="barlow" style="margin-top: 36px">4 - The biggest movie makers in the world are preparing their new releases for the next year. Write about what they have been doing lately.</h5>
            <form id="unidade53grammar364" method="post">
                <textarea name="grammar364-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="53">
                <input type="hidden" name="atividade_id" value="364">
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

    $("#unidade53grammar361").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade53grammar361 input[type="text"]').each(function(index) {
            if (($('#unidade53grammar361 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade53grammar361 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade53grammar361'), respostas);
        } else {
            enviarAtividade($('#unidade53grammar361'), respostas);
        }
    });

    $("#unidade53grammar362").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade53grammar362 input[type="text"]').each(function(index) {
            if (($('#unidade53grammar362 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade53grammar362 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade53grammar362'), respostas);
        } else {
            enviarAtividade($('#unidade53grammar362'), respostas);
        }
    });

    $("#unidade53grammar363").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade53grammar363 input[type="text"]').each(function(index) {
            if (($('#unidade53grammar363 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade53grammar363 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade53grammar363'), respostas);
        } else {
            enviarAtividade($('#unidade53grammar363'), respostas);
        }
    });

    $("#unidade53grammar364").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade53grammar364 textarea').attr("name") + '":"' + $('#unidade53grammar364 textarea').val() + '"}';
        if ($('#unidade53grammar364 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade53grammar364'), respostas);
        } else {
            enviarAtividade($('#unidade53grammar364'), respostas);
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
                    $('#unidade53grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade53grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade53grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade53grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade53grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade53grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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