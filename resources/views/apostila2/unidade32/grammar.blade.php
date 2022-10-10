@extends('layouts.template')
@section('titulo','Unit 32 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade32" data-etapa="grammar">
            <h3 class="barlow">UNIT 32</h3>
            <h5 class="barlow">3 – GRAMMAR / EXERCISES REVIEW.</h5>

            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">1 - Look at the chart and make sentences as in the examples:</h5>

            <table class="metade center-align">
                <tr>
                    <td></td>
                    <td>
                        <h5 class="barlow">YESTERDAY</h5>
                    </td>
                    <td>
                        <h5 class="barlow">TODAY</h5>
                    </td>
                    <td>
                        <h5 class="barlow">TOMORROW</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>people / travel</b></p>
                    </td>
                    <td>
                        <p>on horseback</p>
                    </td>
                    <td>
                        <p>by plane</p>
                    </td>
                    <td>
                        <p>in spaceships</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>children / play</b></p>
                    </td>
                    <td>
                        <p>hide-and-seak</p>
                    </td>
                    <td>
                        <p>computer games</p>
                    </td>
                    <td>
                        <p>with robots</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>man / explore</b></p>
                    </td>
                    <td>
                        <p>the poles</p>
                    </td>
                    <td>
                        <p>solar system</p>
                    </td>
                    <td>
                        <p>galaxies</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>we / live in</b></p>
                    </td>
                    <td>
                        <p>Villages</p>
                    </td>
                    <td>
                        <p>modern cities</p>
                    </td>
                    <td>
                        <p>undersea cities</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>wives / use</b></p>
                    </td>
                    <td>
                        <p>handmade tools</p>
                    </td>
                    <td>
                        <p>electric appliances</p>
                    </td>
                    <td>
                        <p>intelligent robots</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>vehicles / run by</b></p>
                    </td>
                    <td>
                        <p>Horses</p>
                    </td>
                    <td>
                        <p>Petrol</p>
                    </td>
                    <td>
                        <p>water / electricity</p>
                    </td>
                </tr>
            </table>
            <br>
            <form id="unidade32grammar249" class="metade" style="margin-top:16px" action="post">
                <p>1. People traveled on horseback yesterday.</p>
                <p>People are traveling by plane today.</p>
                <p>People will travel in spaceships tomorrow.</p>
                <p>
                    2.
                    <input type="text" name="grammar249-1" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-2" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-3" placeholder="Responda aqui" class="full left-align" required>
                </p>
                <p>
                    3.
                    <input type="text" name="grammar249-4" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-5" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-6" placeholder="Responda aqui" class="full left-align" required>
                </p>
                <p>
                    4.
                    <input type="text" name="grammar249-7" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-8" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-9" placeholder="Responda aqui" class="full left-align" required>
                </p>
                <p>
                    5.
                    <input type="text" name="grammar249-10" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-11" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-12" placeholder="Responda aqui" class="full left-align" required>
                </p>
                <p>
                    6.
                    <input type="text" name="grammar249-13" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-14" placeholder="Responda aqui" class="full left-align" required>
                    <input type="text" name="grammar249-15" placeholder="Responda aqui" class="full left-align" required>
                </p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="32">
                <input type="hidden" name="atividade_id" value="249">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">2 - Put the verbs in brackets into the correct tense:</h5>
            <form id="unidade32grammar250" class="metade" action="post">
                <p>
                    1. He often<input type="text" name="grammar250-1" placeholder="Responda aqui" required>brings
                    <input type="text" name="grammar250-2" placeholder="Responda aqui" required>(bring) me flowers.
                </p>
                <p>
                    2. <input type="text" name="grammar250-3" class="inputMedio left-align" placeholder="Responda aqui" required>(you / meet) Paul yesterday?
                </p>
                <p>
                    3. Father<input type="text" name="grammar250-4" class="inputMedio left-align" placeholder="Responda aqui" required>(work) in the garden now.
                </p>
                <p>
                    4. What<input type="text" name="grammar250-5" class="inputMedio left-align" placeholder="Responda aqui" required>(you / do) at the moment?
                </p>
                <p>
                    5. Mr. Jones<input type="text" name="grammar250-6" class="inputMedio left-align" placeholder="Responda aqui" required>(paint) his house last month.
                </p>
                <p>
                    6. She<input type="text" name="grammar250-7" class="inputMedio left-align" placeholder="Responda aqui" required>(go) to school on foot every day.
                </p>
                <p>
                    7. It<input type="text" name="grammar250-8" class="inputMedio left-align" placeholder="Responda aqui" required>(be) hot yesterday.
                </p>
                <p>
                    8. The baby<input type="text" name="grammar250-9" class="inputMedio left-align" placeholder="Responda aqui" required>(not / sleep) now.
                </p>
                <p>
                    9. He never<input type="text" name="grammar250-10" class="inputMedio left-align" placeholder="Responda aqui" required>(drive) fast.
                </p>
                <p>
                    10. She<input type="text" name="grammar250-11" class="inputMedio left-align" placeholder="Responda aqui" required>(leave) Paris in 1987.
                </p>
                <p>
                    11. She always<input type="text" name="grammar250-12" class="inputMedio left-align" placeholder="Responda aqui" required>(go) to church on Sunday.
                </p>
                <p>
                    12. I<input type="text" name="grammar250-13" class="inputMedio left-align" placeholder="Responda aqui" required> (buy) a new bicycle last week.
                </p>
                <p>
                    13. My family<input type="text" name="grammar250-14" class="inputMedio left-align" placeholder="Responda aqui" required>(go) to the theatre yesterday.
                </p>
                <p>
                    14. Tom<input type="text" name="grammar250-15" class="inputMedio left-align" placeholder="Responda aqui" required>(live) in London three years ago.
                </p>
                <p>
                    15. My mother<input type="text" name="grammar250-16" class="inputMedio left-align" placeholder="Responda aqui" required>(make) some coffee now.
                </p>
                <p>
                    16. Sam<input type="text" name="grammar250-17" class="inputMedio left-align" placeholder="Responda aqui" required>(go) to the circus yesterday.
                </p>
                <p>
                    17. I<input type="text" name="grammar250-18" class="inputMedio left-align" placeholder="Responda aqui" required>(talk) on the telephone at the moment.
                </p>
                <p>
                    18. Sally always<input type="text" name="grammar250-19" class="inputMedio left-align" placeholder="Responda aqui" required>(help) her mother in the house.
                </p>
                <p>
                    19. I<input type="text" name="grammar250-20" class="inputMedio left-align" placeholder="Responda aqui" required>(have) dinner in a restaurant last Friday.
                </p>
                <p>
                    20. Listen! The birds<input type="text" name="grammar250-21" class="inputMedio left-align" placeholder="Responda aqui" required>(sing) in the garden.
                </p>
                <p>
                    21. I often<input type="text" name="grammar250-22" class="inputMedio left-align" placeholder="Responda aqui" required>(buy) fruit from the greengrocer’s.
                </p>
                <p>
                    22. My mother<input type="text" name="grammar250-23" class="inputMedio left-align" placeholder="Responda aqui" required>(drink) tea now.
                </p>
                <p>
                    23. Look at Tom and Jim! They<input type="text" name="grammar250-24" class="inputMedio left-align" placeholder="Responda aqui" required>(walk) up the hill.
                </p>
                <p>
                    24. That man<input type="text" name="grammar250-25" class="inputMedio left-align" placeholder="Responda aqui" required>(laugh) at the moment.
                </p>
                <p>
                    25. The cat<input type="text" name="grammar250-26" class="inputMedio left-align" placeholder="Responda aqui" required>(play) with a ball now
                </p>
                <p>
                    26. We always<input type="text" name="grammar250-27" class="inputMedio left-align" placeholder="Responda aqui" required>(wear) warm clothes in winter.
                </p>
                <p>
                    27. He often<input type="text" name="grammar250-28" class="inputMedio left-align" placeholder="Responda aqui" required> (eat) a sandwich at lunchtime.
                </p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="32">
                <input type="hidden" name="atividade_id" value="250">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">3 - Write the questions. Use WHEN, WHERE, WHO or WHAT:</h5>
            <form id="unidade32grammar251" action="post">
                <p>1. <b>P: </b> We went to California on our vacation.</p>
                <p><b>R: </b> Really?<input type="text" name="grammar251-1" placeholder="Responda aqui" required> Where did you stay <input type="text" name="grammar251-2" placeholder="Responda aqui" required>(you / stay)?</p>
                <p><b>P: </b>In a hotel in Santa Monica.</p>
                <p>2. <b>P: </b> The children visited the usual tourist attractions.</p>
                <p><b>R: </b> Oh, yeah? <input type="text" name="grammar251-3" placeholder="Responda aqui" required> (they / see)?</p>
                <p><b>P: </b> Oh, they went to Disneyland, the San Diego zoo, and a movie studio.</p>
                <p>3. <b>P: </b> My wife played a lot of tennis.</p>
                <p><b>R: </b><input type="text" name="grammar251-4" placeholder="Responda aqui" required> (she / play) with? </p>
                <p><b>P: </b> She played with our oldest son.</p>
                <p>4. <b>P:</b> I really enjoyed the trip. We even stayed a few extra days.
                    <p><b>R: </b><input type="text" name="grammar251-5" placeholder="Responda aqui" required>(you / plan) to come home?</p>
                    <p><b>P: </b> Well, we planned to come home on Monday, but we didn’t get back until Friday.</p>

                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="31">
                    <input type="hidden" name="atividade_id" value="251">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="metade esquerda">
                <img src="{{ asset('assets/img/dominating/unit32/grammar1.jpg') }}" alt="animal kingdom">
            </figure>
            <figure class="metade direita">
                <img src="{{ asset('assets/img/dominating/unit32/grammar2.jpg') }}" alt="Disney">
            </figure>
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

    $("#unidade32grammar249").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade32grammar249 input[type="text"]').each(function(index) {
            if (($('#unidade32grammar249 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade32grammar249 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade32grammar249'), respostas);
        } else {
            enviarAtividade($('#unidade32grammar249'), respostas);
        }
    });

    $("#unidade32grammar250").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade32grammar250 input[type="text"]').each(function(index) {
            if (($('#unidade32grammar250 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade32grammar250 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade32grammar250'), respostas);
        } else {
            enviarAtividade($('#unidade32grammar250'), respostas);
        }
    });

    $("#unidade32grammar251").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade32grammar251 input[type="text"]').each(function(index) {
            if (($('#unidade32grammar251 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade32grammar251 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade32grammar251'), respostas);
        } else {
            enviarAtividade($('#unidade32grammar251'), respostas);
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
                    $('#unidade32grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade32grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade32grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade32grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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