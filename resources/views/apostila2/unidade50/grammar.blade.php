@extends('layouts.template')
@section('titulo','Unit 50 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade50" data-etapa="grammar">
            <h3 class="barlow">UNIT 50</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - PRESENT PERFECT (1)</h5>
            <p>We use the Present Perfect to refer to an action that happened in the past and reflects
                in the present moment. It may be something that happened but is a relevant fact to the
                present moment (Relevance) or something that stills happen. A fact that started there
                in the past but continues to happen up to the present moment. (continuity).</p>

            <p class="bordaVerde">Present Perfect = Subject + Have / Has + Past participle of main verb</p>

            <table>
                <tr>
                    <td>
                        <h5 class="barlow center-align">PRESENT PERFECT</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(+) Gleen <b>has twisted</b> his ankle. (<b>Relevance</b>)</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(-) Gleen <b>has not twisted</b> his ankle.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(?) Has Gleen <b>twisted</b> his ankle?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(+) We <b>have talked</b> about movie production. (<b>Continuity</b>)</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(-) We <b>have not talked</b> about movie production.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(?) Have we talked about movie production?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(+) Kris Costa <b>has been</b> to Comic Con. (<b>Relevance</b>)</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(-) Kris Costa <b>has not been</b> to Comic Con.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(?) Has Kris Costa <b>been</b> to Comic Con?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(+) They <b>have spent</b> much money on professional courses. (continuity)</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(-) They <b>have not</b> spent much money on professional courses.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(?) Have <b>they spent</b> much money on professional courses?</p>
                    </td>
                </tr>
            </table>

            <p style="margin-top:16px">1. Has/have are the auxiliary verbs of present perfect.</p>
            <p>2. The time is not specific. We don’t have any information about when the action happened.
                We only know that it happened and is relevant or continues up to today.</p>

            <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></p>

                <h5 class="barlow">1 - Write a suitable sentence using the PRESENT PERFECT TENSE :</h5>
                <form id="unidade50grammar341" class="metade" action="post">
                    <p>
                        1. Ann’s hair was dirty. Now it’s clean. (wash)
                        <input type="text" name="grammar341-1" placeholder="Responda aqui" required>
                        Ann has washed her hair
                        <input type="text" name="grammar341-2" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        2. Tom was 80 kg. Now he’s 70. (lose weight)
                        <input type="text" name="grammar341-3" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        3. Bill played football yesterday. Now he can’t walk; his leg is in plaster. (break)
                        <input type="text" name="grammar341-4" class="full left-align" required>
                    </p>
                    <p>
                        4. My sister is looking for her pen. (lose)
                        <input type="text" name="grammar341-5" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        5. Mary is on holiday in France. (go)
                        <input type="text" name="grammar341-6" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        6. Mr. Hill was in Canada last week. He’s back in London now. (be)
                        <input type="text" name="grammar341-7" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        7. Look! Mrs. Smith has got a lot of packages. (buy)
                        <input type="text" name="grammar341-8" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        8. I can’t eat anything now. (eat too much)
                        <input type="text" name="grammar341-9" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        9. Mrs. Jenkins is very tired. (clean / house)
                        <input type="text" name="grammar341-10" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        10. Tony needs a holiday. (work / hard / this year)
                        <input type="text" name="grammar341-11" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        11. I
                        <input type="text" name="grammar341-12" placeholder="Responda aqui" required>
                        in this country all my life. (live)
                    </p>
                    <p>
                        12. She
                        <input type="text" name="grammar341-13" placeholder="Responda aqui" required>
                        her homework. (do)
                    </p>
                    <p>
                        13. All of my friends
                        <input type="text" name="grammar341-14" placeholder="Responda aqui" required>
                        away on vacation this week. (be)
                    </p>
                    <p>
                        14. It
                        <input type="text" name="grammar341-15" placeholder="Responda aqui" required>
                        the entire week. (rain)
                    </p>
                    <p>
                        15. We
                        <input type="text" name="grammar341-16" placeholder="Responda aqui" required>
                        a lot of grammar in this class. (study)
                    </p>
                    <p>
                        16. John
                        <input type="text" name="grammar341-17" placeholder="Responda aqui" required>
                        in the hospital for five days. (be)
                    </p>
                    <p>
                        17. I
                        <input type="text" name="grammar341-18" placeholder="Responda aqui" required>
                        as a teacher since 1989. (work)
                    </p>
                    <p>
                        18. Jennifer knows everyone in her town because she
                        <input type="text" name="grammar341-19" placeholder="Responda aqui" required>
                        there since she was a baby. (live)
                    </p>
                    <p>
                        19. Mark and Louise
                        <input type="text" name="grammar341-20" placeholder="Responda aqui" required>
                        about getting married. (talk)
                    </p>
                    <p>
                        20. A friend of mine
                        <input type="text" name="grammar341-21" placeholder="Responda aqui" required>
                        $20,000 in the bank to buy a house. (save)
                    </p>


                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="50">
                    <input type="hidden" name="atividade_id" value="341">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <figure>
                    <img src="{{ asset('assets/img/dominating/unit50/grammar.png') }}" alt="desenhista">
                </figure>
                <div class="clear"></div>

                <h5 class="barlow" style="margin-top:16px">2 - PRESENT PERFECT TENSE after BECAUSE:</h5>
                <form id="unidade50grammar342" class="metade" action="post">
                    <h5 class="barlow"><b>Examples:</b></h5>
                    <p>She can’t go to the party. (catch a cold)</p>
                    <p>She can’t go to the party because she has caught a cold.</p>

                    <p style="margin-top:32px">
                        1. He can’t walk very fast. (hurt / leg)
                        <input type="text" name="grammar342-1" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        2. I can’t get in. (lose / key)
                        <input type="text" name="grammar342-2" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        3. I know this story very well. (see the film)
                        <input type="text" name="grammar342-3" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        4. I can’t post the letter. (not put / stamp / on it)
                        <input type="text" name="grammar342-4" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        5. He can’t stand up. (eat too much)
                        <input type="text" name="grammar342-5" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        6. They can’t go on holiday. (not save / money)
                        <input type="text" name="grammar342-6" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        7. I know him. (meet him before)
                        <input type="text" name="grammar342-7" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        8. We don’t know how he is. (not hear from him)
                        <input type="text" name="grammar342-8" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        9. He won’t take a cigarette. (give up smoking)
                        <input type="text" name="grammar342-9" class="full left-align" placeholder="Responda aqui" required>
                    </p>
                    <p>
                        10. She can’t get in. (he / lock the door)
                        <input type="text" name="grammar342-10" class="full left-align" placeholder="Responda aqui" required>
                    </p>

                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="50">
                    <input type="hidden" name="atividade_id" value="342">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow" style="margin-top:16px">3 - Think about your life and write 5 sentences about relevant facts that happened to you
                    or about things that you started in the past and keep doing up to today</h5>
                <form id="unidade50grammar343" class="metade" action="post">
                    <textarea name="grammar343-1" placeholder="Responda aqui"></textarea>

                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="50">
                    <input type="hidden" name="atividade_id" value="343">
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

    $("#unidade50grammar341").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade50grammar341 input[type="text"]').each(function(index) {
            if (($('#unidade50grammar341 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade50grammar341 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade50grammar341'), respostas);
        } else {
            enviarAtividade($('#unidade50grammar341'), respostas);
        }
    });

    $("#unidade50grammar342").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade50grammar342 input[type="text"]').each(function(index) {
            if (($('#unidade50grammar342 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade50grammar342 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade50grammar342'), respostas);
        } else {
            enviarAtividade($('#unidade50grammar342'), respostas);
        }
    });

    $("#unidade50grammar343").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade50grammar343 textarea').attr("name") + '":"' + $('#unidade50grammar343 textarea').val() + '"}';
        if ($('#unidade50grammar343 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade50grammar343'), respostas);
        } else {
            enviarAtividade($('#unidade50grammar343'), respostas);
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
                    $('#unidade50grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade50grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade50grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade50grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade50grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade50grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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