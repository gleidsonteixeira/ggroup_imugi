@extends('layouts.template')
@section('titulo','Unit 28 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade28" data-etapa="grammar">
            <h3 class="barlow">UNIT 28 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - MODAL VERB HAD BETTER </h5>
                <p><b>Had better</b> is used to express <b>an urgent/strong advice</b> with bad consequences if not followed.</p>
                <table class="metade center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">Urgent/strong advice - HAD BETTER + VERB</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>She <b>had better leave</b> now, otherwise she'll miss the flight.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>You <b>had better have</b> somebody to help with digital marketing.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5 class="barlow">HAD BETTER NOT + VERB</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>They <b>had better not be</b> late for the meeting with the client.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>I <b>had better not start</b> the next report. This one is due tomorrow.</p>
                        </td>
                    </tr>
                </table>

                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Complete the exercise with HAD BETTER or HAD BETTER NOT</h5>
                <form id="unidade28grammar229" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. It’s a very important secret. You <input type="text" name="grammar229-1" placeholder="Responda aqui" required /> tell anybody.
                            </p>
                            <p>
                                2. You <input type="text" name="grammar229-2" placeholder="Responda aqui" required /> take an umbrella. It’s going to rain.
                            </p>
                            <p>
                                3. Nobody likes you so you <input type="text" name="grammar229-3" placeholder="Responda aqui" required /> come to the party.
                            </p>
                            <p>
                                4. You <input type="text" name="grammar229-4" placeholder="Responda aqui" required /> drink more beer. You’ll be sick.
                            </p>
                            <p>
                                5. Susy is weak and looks pale. She <input type="text" name="grammar229-5" placeholder="Responda aqui" required /> see a doctor.
                            </p>
                            <p>
                                6. You are drunk and it makes me nervous. You <input type="text" name="grammar229-6" placeholder="Responda aqui" required /> leave.
                            </p>
                            <p>
                                7. I’m not allowed to come back home late. <input type="text" name="grammar229-7" placeholder="Responda aqui" required /> go now.
                            </p>
                            <p>
                                8. Emma doesn’t like when someone smokes in her room. You <input type="text" name="grammar229-8" placeholder="Responda aqui" required /> smoke over here.
                            </p>
                            <p>
                                9. I have a high fever and splitting headache. I <input type="text" name="grammar229-9" placeholder="Responda aqui" required /> go and see a doctor.
                            </p>
                            <p>
                                10. I <input type="text" name="grammar229-10" placeholder="Responda aqui" required /> Miss the last train to London.
                            </p>
                            <p>
                                11. You <input type="text" name="grammar229-11" placeholder="Responda aqui" required /> give up smoking. It’s bad for you
                            </p>
                            <p>
                                12. Tell James he <input type="text" name="grammar229-12" placeholder="Responda aqui" required /> work so hard. He is overdoing it
                            </p>
                            <p>
                                13. He <input type="text" name="grammar229-13" placeholder="Responda aqui" required /> get some sleep. He looks tired out.
                            </p>
                            <p>
                                14. You <input type="text" name="grammar229-14" placeholder="Responda aqui" required /> Say that to Chris. He’ll be angry with you.
                            </p>
                            <p>
                                15. She <input type="text" name="grammar229-15" placeholder="Responda aqui" required /> try to lift that by yourself. It’s very heavy.
                            </p>
                            <p>
                                16. They <input type="text" name="grammar229-16" placeholder="Responda aqui" required /> eat a lot of sweets.
                            </p>
                            <p>
                                17. You <input type="text" name="grammar229-17" placeholder="Responda aqui" required /> go to the dentist regularly.
                            </p>
                            <p>
                                18. We<input type="text" name="grammar229-18" placeholder="Responda aqui" required /> eat between meals if we want to lose weight.
                            </p>
                            <p>
                                19. You <input type="text" name="grammar229-19" placeholder="Responda aqui" required /> clean your teeth at least twice a day.
                            </p>
                            <p>
                                20. You <input type="text" name="grammar229-20" placeholder="Responda aqui" required /> drive carefully on a busy road.
                            </p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="28">
                    <input type="hidden" name="atividade_id" value="229">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>
            <figure class="metade esquerda">
                <img src="{{ asset('assets/img/dominating/unit28/grammar1.jpg') }}" alt="mobilidade">
            </figure>
            <figure class="metade direita">
                <img src="{{ asset('assets/img/dominating/unit28/grammar2.jpg') }}" alt="mobilidade">
            </figure>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">2 - A friend of yours writes you an email asking for suggestions on how to improve his/her
                skills as an illustrator. Write him back giving him your suggestions. Use HAD BETTER and HAD BETTER NOT.</h5>
            <form id="unidade28grammar230" method="post">
                <textarea name="grammar230-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="28">
                <input type="hidden" name="atividade_id" value="230">
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

    $("#unidade28grammar229").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade28grammar229 input[type="text"]').each(function(index) {
            if (($('#unidade28grammar229 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade28grammar229 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade28grammar229'), respostas);
        } else {
            enviarAtividade($('#unidade28grammar229'), respostas);
        }
    });


    $("#unidade28grammar230").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade28grammar230 textarea').attr("name") + '":"' + $('#unidade28grammar230 textarea').val() + '"}';
        if ($('#unidade28grammar230 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade28grammar230'), respostas);
        } else {
            enviarAtividade($('#unidade28grammar230'), respostas);
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
                    $('#unidade28grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade28grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade28grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade28grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade28grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade28grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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