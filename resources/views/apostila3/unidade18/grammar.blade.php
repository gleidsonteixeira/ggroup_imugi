@extends('layouts.template')
@section('titulo','Unit 18 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade18" data-etapa="grammar">
            <h3 class="barlow">UNIT 18</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 18/03_GRAMMAR/GRAMMAR_18.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - MODALS + PERFECT INFINITIVE</h5>
                <p>
                    Similarly to the use of <b>MUST + PERFECT INFINITIVE</b>, the combination of different
                    modal verbs with perfect infinitive is also possible and is largely used. The use of
                    these structures give a past reference to the Modal verbs. Observe the table below.
                </p>
                <table class="espacamento left-align borderedfull">
                    <tr class="center-align">
                        <td><h5 class="barlow">Modal + Perfect infinitive</td>
                        <td><h5 class="barlow">Meaning</td>
                        <td><h5 class="barlow">Examples</td>
                    </tr>
                    <tr>
                        <td><p>Could + Have + Past participle</p></td>
                        <td><p>Used to express past possibility</p></td>
                        <td><p>I <b>could have helped </b>you if you had told me what was going on.</p></td>
                    </tr>
                    <tr>
                        <td><p>May + Have + Past Participle</p></td>
                        <td><p>Used to express strong assumptions about the past</p></td>
                        <td><p>I Believe that Stan Lee’s fans <b>may have had</b> a hard time to accept his death</p></td>
                    </tr>
                    <tr>
                        <td><p>Might + Have + Past Participle</p></td>
                        <td><p>Used to express soft assumptions about the past.</p></td>
                        <td><p>They <b>might have faced</b> problems to upload the video. It was to heavy.</p></td>
                    </tr>
                    <tr>
                        <td><p>Should + Have + Past Participle</p></td>
                        <td><p>Used to talk about decision in the past</p></td>
                        <td><p>We <b>should have talked</b> to the teacher about the deadline for the final paper. Now it’s too late</p></td>
                    </tr>
                    <tr>
                        <td><p>Would + Have + Past Participle</p></td>
                        <td><p>Used to talk about past hypothesis.</p></td>
                        <td><p>I <b>would have allowed</b> you to hand in the paper in the following week if you had said you had a problem with the computer</p></td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Use a suitable present or past MODAL AUXILIARY:</h5>
                <form id="unidade18grammar591" method="post">
                    <p>
                        <p>I can’t find my book. I <input type="text" name="grammar591-1" placeholder="Responda aqui" required /> (leave) it on the bus.</p>
                        <p>They don’t answer their phone; they <input type="text" name="grammar591-2" placeholder="Responda aqui" required /> (go) away on their vacation.</p>
                        <p>
                            John went to the movies last night, but he <input type="text" name="grammar591-3" placeholder="Responda aqui" required /> (stay) at home and
                            <input type="text" name="grammar591-4" placeholder="Responda aqui" required /> (prepare) his lessons.
                        </p>
                        <p>The lights have gone out. A fuse <input type="text" name="grammar591-5" placeholder="Responda aqui" required /> (blow).</p>
                        <p>She <input type="text" name="grammar591-6" placeholder="Responda aqui" required /> (go) to school. It’s Saturday.</p>
                        <p>You were stupid to go skiing here. You <input type="text" name="grammar591-7" placeholder="Responda aqui" required /> (break) your leg.</p>
                        <p>
                            She <input type="text" name="grammar591-8" placeholder="Responda aqui" required /> (sing) like an angel when she was a kid.
                            <input type="text" name="grammar591-9" placeholder="Responda aqui" required /> I make a suggestion?
                        </p>
                        <p>You <input type="text" name="grammar591-10" placeholder="Responda aqui" required /> go and see “Batman”. It’s a great film.</p>
                        <p>
                            He came home alone. You <input type="text" name="grammar591-11" placeholder="Responda aqui" required /> (let) him do that; he
                            <input type="text" name="grammar591-12" placeholder="Responda aqui" required /> (get) lost.
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="18">
                    <input type="hidden" name="atividade_id" value="591">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">2 - Fill in the blanks using MUST, CAN’T, MAY, MIGHT, COULD and PAST FORMS of them:</h5>
                <form id="unidade18grammar592" method="post">
                    <p>
                        <p>1. Sally looks sad and worried. She <input type="text" name="grammar592-1" placeholder="Responda aqui" required /> (have) a problem with something.</p>
                        <p>2. Bob <input type="text" name="grammar592-2" placeholder="Responda aqui" required /> (be) at school because I haven’t seen him today.</p>
                        <p>3. Mr. Treves hasn’t come to work yet. He has never been late for work. He <input type="text" name="grammar591-3" placeholder="Responda aqui" required /> (miss) the bus.</p>
                        <p>
                            4. Timmy is a very good boy. He isn’t naughty, so he <input type="text" name="grammar592-4" placeholder="Responda aqui" required /> (break) that
                            window. Someone else <input type="text" name="grammar592-5" placeholder="Responda aqui" required /> (break) it.
                        </p>
                        <p>5. I’m sure that I dropped my key in the car. It <input type="text" name="grammar592-6" placeholder="Responda aqui" required /> (be) there at the moment.</p>
                        <p>6. The street is wet this morning. I’m not sure but it <input type="text" name="grammar592-7" placeholder="Responda aqui" required /> (rain) last night.</p>
                        <p>7. <b>P:</b> I talked to your science teacher at school yesterday.</p>
                        <p>8. <b>R:</b> You <input type="text" name="grammar592-8" placeholder="Responda aqui" required /> (talk) to her because she wasn’t at school yesterday.</p>
                        <p>9. <b>P:</b> The man was being taken to hospital. He <input type="text" name="grammar592-9" placeholder="Responda aqui" required /> (have) an accident.</p>
                        <p><b>R:</b> Yes, I’m sure he had an accident.</p>
                        <p>10. <b>P:</b> Will you come to my birthday party tomorrow?</p>
                        <p><b>R:</b> I <input type="text" name="grammar592-10" placeholder="Responda aqui" required /> (come) to your party because I have to look after my little sister.</p>
                        <p>11. <b>P:</b> I’m going to do a parachute jump next week.</p>
                        <p>
                            <b>R:</b> You are going to jump out of an airplane! But you’re 73 years old! You <input type="text" name="grammar592-11" placeholder="Responda aqui" required /> (be)
                            serious. You <input type="text" name="grammar592-12" placeholder="Responda aqui" required /> (be) mad.
                        </p>
                        <p><b>P:</b> It really <input type="text" name="grammar592-13" placeholder="Responda aqui" required /> (be) wonderful looking down on everything. I’ve always wanted to try it.</p>
                        <p><b>R:</b> But anything could happen. You <input type="text" name="grammar592-14" placeholder="Responda aqui" required /> (be) injured, or even killed. I wouldn’t take the risk.</p>
                        <p>
                            <b>P:</b> Well, your life <input type="text" name="grammar592-15" placeholder="Responda aqui" required /> (be) much fun if you never take risks. You ought to try
                            it, too. You never know. You <input type="text" name="grammar592-16" placeholder="Responda aqui" required /> (enjoy) it.
                        </p>
                        <p><b>R:</b> Enjoy it! You <input type="text" name="grammar592-17" placeholder="Responda aqui" required /> (be) joking.</p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="18">
                    <input type="hidden" name="atividade_id" value="592">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow" style="margin-top:16px">3 - Snapchat was outperformed by Instagram when Instagram decided to add a new
                    feature to the app. The possibility of uploading stories. Brainstorm with the class possible
                    assumptions or attitudes regarding this situation. Use the modals + past participle in your
                    production.</h5>
                <h5 class="barlow"><b>Example:</b></h5>
                <p>Snapchat <b>should have invested</b> in marketing.</p>
                <form id="unidade18grammar593" method="post" style="margin-top:32px">
                    <textarea name="grammar593-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="18">
                    <input type="hidden" name="atividade_id" value="593">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit18/grammar.jpg') }}" alt="redesocial">
				</figure>
            </div>
        </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade18grammar591").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade18grammar591 input[type="text"]').each(function(index) {
            if (($('#unidade18grammar591 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade18grammar591 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade18grammar591'), respostas);
        } else {
            enviarAtividade($('#unidade18grammar591'), respostas);
        }
    });

    $("#unidade18grammar592").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade18grammar592 input[type="text"]').each(function(index) {
            if (($('#unidade18grammar592 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade18grammar592 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade18grammar592'), respostas);
        } else {
            enviarAtividade($('#unidade18grammar592'), respostas);
        }
    });

    $("#unidade18grammar593").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade18grammar593 textarea').attr("name") + '":"' + $('#unidade18grammar593 textarea').val() + '"}';
        if ($('#unidade18grammar593 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade18grammar593'), respostas);
        } else {
            enviarAtividade($('#unidade18grammar593'), respostas);
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
                    $('#unidade18grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade18grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade18grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade18grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade18grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade18grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
