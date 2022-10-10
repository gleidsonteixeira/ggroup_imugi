@extends('layouts.template')
@section('titulo','Unit 47 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade47" data-etapa="grammar">
            <h3 class="barlow">UNIT 47</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - PAIRED CONJUNCTIONS – NEITHER / NOR</h5>
            <p>We use paired conjunction to connect a pair of ideas of two different sentences. Both
                sentences usually have similar length and grammar structure.</p>
            <br>
            <p>Neither … nor.</p>
            <br>
            <p>Neither/nor sentences are affirmative sentences with <b>NEGATIVE MEANINGS</b>.</p>
            <h5 class="barlow" style="margin-top: 32px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Use NEITHER ______ NOR _______</h5>
            <form id="unidade47grammar328" class="metade" action="post">
                <p>1. He doesn’t like coffee. Does he like tea?</p>
                <p><b>No, he likes neither coffee nor tea.</b></p>
                <p>
                    2. Her husband doesn’t speak English. Do her children speak English?
                    <input type="text" name="grammar328-1" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    3. The students aren’t wide awake today. Is the teacher wide awake today?
                    <input type="text" name="grammar328-2" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    4. They don’t have a refrigerator for their new apartment. Do they have a stove?
                    <input type="text" name="grammar328-3" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    5. She doesn’t enjoy hunting. Does she enjoy fishing?
                    <input type="text" name="grammar328-4" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    6. The result wasn’t good. Was the result bad?
                    <input type="text" name="grammar328-5" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    7. Sara and Sue are very busy today. They can’t help you with your homework.
                    <input type="text" name="grammar328-6" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    8. His father didn’t believe in both this son and his friend. He thought that both were lying.
                    <input type="text" name="grammar328-7" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    9. I can perfectly handle my problem alone. I don’t need your help or your compassion.
                    <input type="text" name="grammar328-8" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    10. My mum doesn’t know how to read or write. She’s illiterate.
                    <input type="text" name="grammar328-9" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    11. You can’t use this computer and the other one. Someone must fix them.
                    <input type="text" name="grammar328-10" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    12. She doesn’t like hip-hop or heavy metal music.
                    <input type="text" name="grammar328-11" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    13. Emily can’t sing or dance well.
                    <input type="text" name="grammar328-12" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    14. He never listens to or advises his friends when they have problems.
                    <input type="text" name="grammar328-13" class="full left-align" placeholder="Responda aqui" required>
                </p>
                <p>
                    15. Richard and Tom didn’t keep her secret.
                    <input type="text" name="grammar328-14" class="full left-align" placeholder="Responda aqui" required>
                </p>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="47">
                <input type="hidden" name="atividade_id" value="328">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <figure>
				<img src="{{ asset('assets/img/dominating/unit47/grammar.png') }}" alt="preocupada">
            </figure>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top:16px">2 - As a visual art professional, it’s usually necessary to work in teams. In your opinion,
                what behavior or situations must be observed if you want to have a good environment to
                work. Use NEITHER/NOR to write about it.</h5>
            <form id="unidade47grammar329" class="metade" action="post">
                <textarea name="grammar329-1" class="left-align" placeholder="Responda aqui"></textarea>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="47">
                <input type="hidden" name="atividade_id" value="329">
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

    $("#unidade47grammar328").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade47grammar328 input[type="text"]').each(function(index) {
            if (($('#unidade47grammar328 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade47grammar328 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade47grammar328'), respostas);
        } else {
            enviarAtividade($('#unidade47grammar328'), respostas);
        }
    });

    $("#unidade47grammar329").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade47grammar329 textarea').attr("name") + '":"' + $('#unidade47grammar329 textarea').val() + '"}';
        if ($('#unidade47grammar329 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade47grammar329'), respostas);
        } else {
            enviarAtividade($('#unidade47grammar329'), respostas);
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
                    $('#unidade47grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade47grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade47grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade47grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade47grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade47grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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