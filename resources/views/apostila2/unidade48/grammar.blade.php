@extends('layouts.template')
@section('titulo','Unit 48 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade48" data-etapa="grammar">
            <h3 class="barlow">UNIT 48</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - PAIRED CONJUNCTIONS – NOT ONLY / BUT ALSO</h5>
            <p>We use <b>paired conjunction</b> to connect a pair of ideas of two different sentences. Both
                sentences usually have similar length and grammar structure.</p>
            <br>
            <p>Not only … but also.</p>
            <figure>
                <img src="{{ asset('assets/img/dominating/unit48/grammar.png') }}" alt="titanic">
            </figure>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Use NOT ONLY _______ BUT ALSO _______</h5>
            <form id="unidade48grammar332" class="metade" action="post">
                <p>1. I know you are studying math. Are you studying chemistry too?</p>
                <p><b>Yes, I’m studying not only math but also chemistry.</b></p>
                <p>
                    2. I know his cousin is living with him. Is his mother-in-low living with him too?
                    <input type="text" name="grammar332-1" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    3. I know your country has good universities. Does the United States have good universities too?
                    <input type="text" name="grammar332-2" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    4. I know you lost your wallet. Did you lose your keys too?
                    <input type="text" name="grammar332-3" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    5. I know she goes to school. Does she have a full-time job too?
                    <input type="text" name="grammar332-4" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    6. know he bought a coat. Did he buy a new pair of shoes too?
                    <input type="text" name="grammar332-5" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    7. The children and the parents have serious problems.
                    <input type="text" name="grammar332-6" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    8. He can make people laugh, He can also make them cry.
                    <input type="text" name="grammar332-7" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    9. She writes plays for television and she also acts in movies.
                    <input type="text" name="grammar332-8" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    10. I sent him many letters. Besides that, I tried to call him.
                    <input type="text" name="grammar332-9" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    11. We like to visit our grandfather’s house in summer and winter.
                    <input type="text" name="grammar332-10" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    12. She can dance and sing very well.
                    <input type="text" name="grammar332-11" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    13. They need food and medicine.
                    <input type="text" name="grammar332-12" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    14. She was upset and angry.
                    <input type="text" name="grammar332-13" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    15. In winter days are short, cold and dark.
                    <input type="text" name="grammar332-14" class="full left-align" placeholder="Responda aqui" required>
                </p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="48">
                <input type="hidden" name="atividade_id" value="332">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="metade esquerda">
                <img src="{{ asset('assets/img/dominating/unit48/grammar1.png') }}" alt="dança">
            </figure>
            <figure class="metade direita">
                <img src="{{ asset('assets/img/dominating/unit48/grammar2.png') }}" alt="coral">
            </figure>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">2 - Organization is essential in life. For both personal and professional lives. How can a
                person be organized personally and professionally? Debate with your classmates and write
                a “how to “ guide, giving some tips on organization. Use NOT ONLY / BUT ALSO to write
                about it.</h5>
            <form id="unidade48grammar333" action="post">
                <textarea name="grammar333-1" class="metade left-align" placeholder="Responda aqui"></textarea>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="48">
                <input type="hidden" name="atividade_id" value="333">
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

    $("#unidade48grammar332").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade48grammar332 input[type="text"]').each(function(index) {
            if (($('#unidade48grammar332 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade48grammar332 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade48grammar332'), respostas);
        } else {
            enviarAtividade($('#unidade48grammar332'), respostas);
        }
    });

    $("#unidade48grammar333").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade48grammar333 textarea').attr("name") + '":"' + $('#unidade48grammar333 textarea').val() + '"}';
        if ($('#unidade48grammar333 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade48grammar333'), respostas);
        } else {
            enviarAtividade($('#unidade48grammar333'), respostas);
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
                    $('#unidade48grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade48grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade48grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade48grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade48grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade48grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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