@extends('layouts.template')
@section('titulo','Unit 13 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade13" data-etapa="grammar">
            <h3 class="barlow">UNIT 13</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 13/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A – WILL X GOING TO X PRESENT CONTINUOUS.</h5>
            <p>
                In the previous lesson, we studied the differences between <b>Will</b> and <b>Going to</b>. We can
                also use <b>Present Continuous</b> to refer to <b>future</b>. When everything is arranged and organized
                to happen, we can use it to refer to such fact in the future.
            </p>
            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">Will (Future Decisions/Unquestionable Facts)</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Simple presente (arranged and organized facts)</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>I’<b>ll bring</b> you some material tomorrow.</p>
                    </td>
                    <td>
                        <p>I'm <b>travelling</b> to New York next month.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 class="barlow">To be going to (Future plans/intensions)</h5>
                    </td>
                    <td>
                        <p>We'<b>re visiting</b> Rockstar next week.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>We’<b>re going to start</b> working on it next month.</p>
                    </td>
                    <td>
                        <p>I'm stuck in trafic. <b>i'm arriving</b> late today.</p>
                    </td>
                </tr>
                <p>
            </table>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top:16px"><b>EXERCISES</b></h5>
            <h5 class="barlow" style="margin-top:16px;">1 - Look at John and Laura’s diary below. Then, use the PRESENT CONTINUOUS form to say what their arrangements are for this week, as in the example:</h5>
            <div class="espacamento">
                <p>Monday - go to the cinema</p>
                <p>Tuesday - have a meeting with a new client.</p>
                <p>Wednesday - take the computer to repair.</p>
                <p>Thursday - buy a computer.</p>
                <p>Friday - organize files.</p>
                <p>Saturday - have some time to relax.</p>
                <p>Sunday - watch a new movie</p>
            </div>
            <form id="unidade13grammar157" method="post" class="metade">
                <p>1. They’re going to the cinema on Monday <input type="text" name="grammar157-1" class="inputMedio" placeholder="Responda aqui" required></p>
                <p>2. <input type="text" name="grammar157-2" class="full left-align" placeholder="Responda aqui" required></p>
                <p>3. <input type="text" name="grammar157-3" class="full left-align" placeholder="Responda aqui" required></p>
                <p>4. <input type="text" name="grammar157-4" class="full left-align" placeholder="Responda aqui" required></p>
                <p>5. <input type="text" name="grammar157-5" class="full left-align" placeholder="Responda aqui" required></p>
                <p>6. <input type="text" name="grammar157-6" class="full left-align" placeholder="Responda aqui" required></p>
                <p>7. <input type="text" name="grammar157-7" class="full left-align" placeholder="Responda aqui" required></p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="13">
                <input type="hidden" name="atividade_id" value="157">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow" style="margin-top:16px;">2 - In pairs, write a future plan for a character you are going to create.
                Use Will, Going to and Present Continuous. Use at least 10 verbs. Be ready to share your stories with your classmates.</h5>
            <form id="unidade13grammar158" method="post">
                <textarea name="grammar158-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="13">
                <input type="hidden" name="atividade_id" value="158">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
                <img src="{{ asset('assets/img/dominating/unit13/grammar.png') }}" alt="Garotos festejando">
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

    $("#unidade13grammar157").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade13grammar157 input[type="text"]').each(function(index) {
            if (($('#unidade13grammar157 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade13grammar157 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade13grammar157'), respostas);
        } else {
            enviarAtividade($('#unidade13grammar157'), respostas);
        }
    });


    $("#unidade13grammar158").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade13grammar158 textarea').attr("name") + '":"' + $('#unidade13grammar158 textarea').val() + '"}';
        if ($('#unidade13grammar158 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade13grammar158'), respostas);
        } else {
            enviarAtividade($('#unidade13grammar158'), respostas);
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
                    $('#unidade13grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade13grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade13grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade13grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade13grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade13grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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