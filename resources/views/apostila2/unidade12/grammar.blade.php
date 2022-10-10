@extends('layouts.template')
@section('titulo','Unit 12 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade12" data-etapa="grammar">
            <h3 class="barlow">UNIT 12</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 12/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A - WILL X GOING TO</h5>
            <p>The selection of an appropriate verb tense depends on the meaning of the message you want to communicate. Both <b>Will</b> and <b>Going to</b>
                refer to future ideas. Check the subtle differences in the final message for each one of them. You, as a speaker, decide what implied message you
                want to communicate.</p>
            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">Will (Future Decisions/Unquestionable Facts)</h5>
                        <h5 class="barlow">To be going to (Future plans/intensions)</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Ok, I<b>’ll help</b> you in a minute.</p>
                    </td>
                    <td>
                        <p>Comic Con <b>is going to bring</b> many new stuff.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>I’m not sure, but I<b>’ll check</b> my email box ok</p>
                    </td>
                    <td>
                        <p><b>I'm gonna start</b> a new course next year.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>The next Marvel movie <b>will be</b> extraordinary.</p>
                    </td>
                    <td>
                        <p>They <b>are going to visit</b> Warner Bross on Friday.</p>
                    </td>
                </tr>
            </table>
            <div class="clear"></div>
            <h5 class="barlow"><b>EXERCICIOS</b></h5>
            <h5 class="barlow" style="margin-top:16px;">1 - Fill in WILL or BE GOING TO:</h5>
            <form id="unidade12grammar153" method="post">
                <p>1. <b>P:</b> Why do you need so many pictures?</p>
                <p><b>R:</b> I <input type="text" name="grammar153-1" placeholder="Responda aqui" required> prepare them for the new magazine.</p>
                <p>2. <b>P:</b> Oh no! I forgot my wallet at home and I don’t have any money with me!</p>
                <p><b>R:</b> Don’y worry. I <input type="text" name="grammar153-2" placeholder="Responda aqui" required> lend you some.</p>
                <p>3. <b>P:</b> I don’t know how to use this tool.</p>
                <p><b>R:</b> That’s OK. I <input type="text" name="grammar153-3" placeholder="Responda aqui" required> show you how.</p>
                <p>4. <b>P:</b> Why are all these people gathered here?</p>
                <p><b>R:</b> Because Zaxon CEO <input type="text" name="grammar153-4" placeholder="Responda aqui" required> is going to announce a new release.</p>
                <p>5. <b>P:</b> Did you remember to buy the magazine I asked for?</p>
                <p><b>R:</b> Sorry, I didn’t. I <input type="text" name="grammar153-5" placeholder="Responda aqui" required> buy it when I go out again.</p>
                <p>6. <b>P:</b> What’s this in your picture?</p>
                <p><b>R:</b> Gee, It’s a shade. I <input type="text" name="grammar153-6" placeholder="Responda aqui" required> edit it again in the afternoon.</p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="12">
                <input type="hidden" name="atividade_id" value="153">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow" style="margin-top:16px;">2 - Think of an event that you like and write about it using Will and Going to. Examples: Sana, Comic Con, LOL world championship and etc.</h5>
            <form id="unidade12grammar154" method="post">
                <textarea name="grammar154-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="12">
                <input type="hidden" name="atividade_id" value="154">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
                <img src="{{ asset('assets/img/dominating/unit12/grammar.png') }}" alt="sana">
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

    $("#unidade12grammar153").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade12grammar153 input[type="text"]').each(function(index) {
            if (($('#unidade12grammar153 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade12grammar153 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade12grammar153'), respostas);
        } else {
            enviarAtividade($('#unidade12grammar153'), respostas);
        }
    });

    $("#unidade12grammar154").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade12grammar154 textarea').attr("name") + '":"' + $('#unidade12grammar154 textarea').val() + '"}';
        if ($('#unidade12grammar154 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade12grammar154'), respostas);
        } else {
            enviarAtividade($('#unidade12grammar154'), respostas);
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
                    $('#unidade12grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade12grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade12grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade12grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade12grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade12grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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