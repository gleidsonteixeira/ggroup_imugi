@extends('layouts.template')
@section('titulo','Unit 29 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade29" data-etapa="grammar">
            <h3 class="barlow">UNIT 29 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top: 16px">A - MODAL VERD SHOULD / OUGHT TO </h5>
            <p>
                <b>Should and ought to</b> are used to express <b>advices</b>. There is a slight difference between
                them. <b>Should</b> is used for a <b>general advice, a subjective opinion</b> and <b>ought to</b> is used for
                <b>objective opinions</b>. In other words, <b>Ought to</b> is used for <b>what’s necessary and can’t be
                    avoided</b>.
            </p>
            <table class="metade center-align" style="margin-top:16px">
                <tr>
                    <td>
                        <h5 class="barlow">General advice - SUBJECTIVE opnion - SHOULD</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(+) You <b>should review</b> the lesson in a regular basis.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(-) You <b>shouldn't review</b> the lesson in a regular basis.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(?) <b>Should</b> you <b>review</b> the lesson in a regular basis?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 class="barlow">General advice - OBJECTIVE opnion - OUGHTTO</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(+) <b>You ought to check</b> the file before sending it.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(-) You <b>ought not to check</b> the file before sending it (*)</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(?) <b>Ought you to check</b> the file before sending it? (*)</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>(*) <b>negative and interrogative of ought to, are not frequently used.</b> Instead, prefer to use <b>Should</b>.</p>
                    </td>
                </tr>
            </table>
            <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Choose, to complete each sentence, either SHOULD or SHOULDN’T.</h5>
            <form id="unidade29grammar233" method="post">
                <p>
                    <p>
                        1. Listen to that music! Our neighbours <input type="text" name="grammar233-1" placeholder="Responda aqui" required /> play music that loud at this hour.
                    </p>
                    <p>
                        2. If your tooth is still hurting you tomorrow, you <input type="text" name="grammar233-2" placeholder="Responda aqui" required /> go to the dentist’s.
                    </p>
                    <p>
                        3. Cathy <input type="text" name="grammar233-3" placeholder="Responda aqui" required /> keep ringing her ex-boyfriend. I think he is with another girl now.
                    </p>
                    <p>
                        4. Before going to Madrid for your holidays, you <input type="text" name="grammar233-4" placeholder="Responda aqui" required /> try and learn something of the language. You will enjoy things a lot more.
                    </p>
                    <p>
                        5. You <input type="text" name="grammar233-5" placeholder="Responda aqui" required /> always knock on the door before entering. This is a private office.
                    </p>
                    <p>
                        6. We <input type="text" name="grammar233-6" placeholder="Responda aqui" required /> bring something to Kate’s party. I’ll feel really embarrassed otherwise.
                    </p>
                    <p>
                        7. That model on the TV is too skinny. She <input type="text" name="grammar233-7" placeholder="Responda aqui" required /> eat more, I think!
                    </p>
                    <p>
                        8. Lizzie <input type="text" name="grammar233-8" placeholder="Responda aqui" required /> ask Bryan to help her with her studies. He did the same course last year.
                    </p>
                    <p>
                        9. Pregnant women <input type="text" name="grammar233-9" placeholder="Responda aqui" required /> smoke as it can damage the baby.
                    </p>
                    <p>
                        10. We <input type="text" name="grammar233-10" placeholder="Responda aqui" required /> leave too late tomorrow if we want to reach the beach before lunch.
                    </p>
                </p>
                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="29">
                <input type="hidden" name="atividade_id" value="233">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
                <img src="{{ asset('assets/img/dominating/unit29/grammar.png') }}" alt="paciente feliz">
            </figure>

            <h5 class="barlow metade" style="margin-top: 36px">2 - Circle the appropriate form of OUGHT TO or OUGHT NOT TO.</h5>
            <form id="unidade29grammar234" method="post">
                <p>1 - You (<input type="radio" name="grammar234-1" value="1" required /> ought to/<input type="radio" name="grammar234-1" value="2" required /> ought not to) smoke to heavily.</p>
                <p>2 - You (<input type="radio" name="grammar234-2" value="1" required /> ought to/<input type="radio" name="grammar234-2" value="2" required /> ought not to) lie in bed late every day.</p>
                <p>3 - You (<input type="radio" name="grammar234-3" value="1" required /> ought to/<input type="radio" name="grammar234-3" value="2" required /> ought not to) be selfish.</p>
                <p>4 - She (<input type="radio" name="grammar234-4" value="1" required /> ought to/<input type="radio" name="grammar234-4" value="2" required /> ought not to) avoid pasta. She’s on a low carb diet.</p>
                <p>5 - We (<input type="radio" name="grammar234-5" value="1" required /> ought to/<input type="radio" name="grammar234-5" value="2" required /> ought not to) make a tour alone. The city is very complex.</p>
                <p>6 - You (<input type="radio" name="grammar234-6" value="1" required /> ought to/<input type="radio" name="grammar234-6" value="2" required /> ought not to) follow the manual instructions. It’s a very delicate equipment.</p>
                <p>7 - They (<input type="radio" name="grammar234-7" value="1" required /> ought to/<input type="radio" name="grammar234-7" value="2" required /> ought not to) finish the video in three days. The client is extremely punctual.</p>
                <p>8 - John (<input type="radio" name="grammar234-8" value="1" required /> ought to/<input type="radio" name="grammar234-8" value="2" required /> ought not to) to get some images from an image bank. The quality is much superior.</p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="29">
                <input type="hidden" name="atividade_id" value="234">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow" style="margin-top: 36px">3 - You find out that your friend is having a hard time to write good stories for his games.
                Using SHOULD and OUGHT TO write advices to your friend.</h5>
            <form id="unidade29grammar235" method="post">
                <textarea name="grammar235-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="29">
                <input type="hidden" name="atividade_id" value="235">
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

    $("#unidade29grammar233").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade29grammar233 input[type="text"]').each(function(index) {
            if (($('#unidade29grammar233 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade29grammar233 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade29grammar233'), respostas);
        } else {
            enviarAtividade($('#unidade29grammar233'), respostas);
        }
    });

    $("#unidade29grammar234").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade29grammar234 input[type="radio"]:checked').each(function(index) {
            if (($('#unidade29grammar234 input[type="radio"]:checked').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade29grammar234 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade29grammar234'), respostas);
        } else {
            enviarAtividade($('#unidade29grammar234'), respostas);
        }
    });

    $("#unidade29grammar235").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade29grammar235 textarea').attr("name") + '":"' + $('#unidade29grammar235 textarea').val() + '"}';
        if ($('#unidade29grammar235 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade29grammar235'), respostas);
        } else {
            enviarAtividade($('#unidade29grammar235'), respostas);
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
                    $('#unidade29grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    $('#unidade29grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade29grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade29grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade29grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade29grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade29grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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