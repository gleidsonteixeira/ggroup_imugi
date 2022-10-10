@extends('layouts.template')
@section('titulo','Unit 62 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade62" data-etapa="grammar">
            <h3 class="barlow">UNIT 62</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - Fill in the correct tenses of the words given .</h5>
                <form id="unidade62grammar409" method="post">
                    <p>
                        <p>
                            1. I <input type="text" name="grammar409-1" placeholder="Responda aqui" required /> (not talk) to Mr. Smith yet, but I
                            <input type="text" name="grammar409-2" placeholder="Responda aqui" required /> (talk) to him soon.
                        </p>
                        <p>
                            2. I <input type="text" name="grammar409-3" placeholder="Responda aqui" required /> (wait) long enough. I am going home now.
                        </p>
                        <p>
                            3. How long <input type="text" name="grammar409-4" placeholder="Responda aqui" required /> (the boys, play) football ? - I think for half an hour.
                        </p>
                        <p>
                            4. While we <input type="text" name="grammar409-5" placeholder="Responda aqui" required /> (play) with our toy cars, the girls
                            <input type="text" name="grammar409-6" placeholder="Responda aqui" required /> (watch ) TV.
                        </p>
                        <p>
                            5. Jack <input type="text" name="grammar409-7" placeholder="Responda aqui" required /> (speak) with Mary yesterday.
                        </p>
                        <p>
                            6. Princess Anne <input type="text" name="grammar409-8" placeholder="Responda aqui" required /> (open) the new hospital in a few weeks.
                        </p>
                        <p>
                            7. Listen! I believe Jack <input type="text" name="grammar409-9" placeholder="Responda aqui" required /> (take) a shower.
                        </p>
                        <p>
                            8. While you <input type="text" name="grammar409-10" placeholder="Responda aqui" required /> (shop) someone
                            <input type="text" name="grammar409-11" placeholder="Responda aqui" required />(come) and
                            <input type="text" name="grammar409-12" placeholder="Responda aqui" required /> (leave) this note.
                        </p>
                        <p>
                            9. I <input type="text" name="grammar409-13" placeholder="Responda aqui" required /> (learn) English since I was four years old.
                        </p>
                        <p>
                            10. They <input type="text" name="grammar409-14" placeholder="Responda aqui" required /> (meet) after school every day.
                        </p>
                        <p>
                            11. We usually <input type="text" name="grammar409-15" placeholder="Responda aqui" required /> (drink) coffee, but we
                            <input type="text" name="grammar409-16" placeholder="Responda aqui" required /> (not drink) any for more than a week.
                        </p>
                        <p>
                            12. How many plays <input type="text" name="grammar409-17" placeholder="Responda aqui" required /> (Shakespeare, write) ?
                        </p>
                        <p>
                            13. <input type="text" name="grammar409-18" placeholder="Responda aqui" required /> (You see) Anne recently ? No, but I
                            <input type="text" name="grammar409-19" placeholder="Responda aqui" required /> (see) her two weeks ago.
                        </p>
                        <p>
                            14. Jack <input type="text" name="grammar409-20" placeholder="Responda aqui" required /> (just, get) home when I phoned . He said he
                            <input type="text" name="grammar409-21" placeholder="Responda aqui" required /> (be) in London.
                        </p>
                        <p>
                            15. Jim <input type="text" name="grammar409-22" placeholder="Responda aqui" required /> (come) back from a holiday a few days ago. But I
                            <input type="text" name="grammar409-23" placeholder="Responda aqui" required />. (not see) him so far.
                        </p>
                        <p>
                            16. After John <input type="text" name="grammar409-24" placeholder="Responda aqui" required /> (repair) the car, he
                            <input type="text" name="grammar409-25" placeholder="Responda aqui" required /> (help) in the garden.
                        </p>
                        <p>
                            17. Tom <input type="text" name="grammar409-26" placeholder="Responda aqui" required /> (burn) his hand while he
                            <input type="text" name="grammar409-27" placeholder="Responda aqui" required /> (cook) dinner.
                        </p>
                        <p>
                            18. I <input type="text" name="grammar409-28" placeholder="Responda aqui" required /> (go) to bed now ! Good night.
                        </p>
                        <p>
                            19. It usually <input type="text" name="grammar409-29" placeholder="Responda aqui" required /> (not rain) very much in Texas.
                        </p>
                        <p>
                            20. I am tired. I <input type="text" name="grammar409-30" placeholder="Responda aqui" required /> (do) a lot of work today.
                        </p>
                        <p>
                            21. At 10 o’clock yesterday Sally <input type="text" name="grammar409-31" placeholder="Responda aqui" required /> (be) in her office .
                            She <input type="text" name="grammar409-32" placeholder="Responda aqui" required /> (work).
                        </p>
                        <p>
                            22. We <input type="text" name="grammar409-33" placeholder="Responda aqui" required /> (eat) two big Macs before we
                            <input type="text" name="grammar409-34" placeholder="Responda aqui" required /> (go) home.
                        </p>
                        <p>
                            23. Our neighbors <input type="text" name="grammar409-35" placeholder="Responda aqui" required /> (travel) around Europe for three months. They
                            <input type="text" name="grammar409-36" placeholder="Responda aqui" required /> ( be) in 5 countries so far.
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="62">
                    <input type="hidden" name="atividade_id" value="409">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/dominating/unit62/grammar.png') }}" alt="sanduiche">
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

    $("#unidade62grammar409").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade62grammar409 input[type="text"]').each(function(index) {
            if (($('#unidade62grammar409 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade62grammar409 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade62grammar409'), respostas);
        } else {
            enviarAtividade($('#unidade62grammar409'), respostas);
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
                    $('#unidade62grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade62grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade62grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade62grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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