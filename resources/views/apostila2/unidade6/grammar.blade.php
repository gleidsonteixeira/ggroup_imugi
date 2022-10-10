@extends('layouts.template')
@section('titulo','Unit 6 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade6" data-etapa="grammar">
            <h3 class="barlow">UNIT 6 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - WH - QUESTIONS</h5>
                <table class="metade center-align">
                    <tr>
                        <td colspan="3">
                            <h5 class="barlow">Verb to Be</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>What's</b> your favorite hobby?</p>
                        </td>
                        <td>
                            <p><b>My favorite hobby</b> is drawing wizards.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Who</b> is the best Avengers Super hero?</p>
                        </td>
                        <td>
                            <p>I Guess <b>Thor</b> is the best.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>When</b> is the special effects workshop?</p>
                        </td>
                        <td>
                            <p><b>I believe it’s in the</b> end of July.</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <h5 class="barlow">Other Verbs</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Where do you find</b> good study references?</p>
                        </td>
                        <td>
                            <p><b>I</b> find very good tutorials <b>on youtube.</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>What do you do</b> before starting a project?</p>
                        </td>
                        <td>
                            <p><b>We have a brainstorm</b> to debate it.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Which FPS do you</b> like to play? BF4 or CS Go.</p>
                        </td>
                        <td>
                            <p>I like to play <b>BF4</b>.</p>
                        </td>
                    </tr>
                </table>

                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/dominating/unit6/grammar.png') }}" alt="jogos">
                    </figure>
                </div>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Read the questions & answers about LAURA and ask and answer about AKIRA.</h5>
                <form id="unidade6grammar125" method="post">
                    <div class="metade esquerda">
                        <h5>QUESTIONS:</h5>
                        <p>
                            <p>1. What does Laura do?</p>
                            <p>2. How <input type="text" name="grammar125-1" placeholder="Responda aqui" required /> is Laura?</p>
                            <p>3. <input type="text" name="grammar125-2" placeholder="Responda aqui" required /> a week does she work?</p>
                            <p>4. What time does she get up?</p>
                            <p>5. What <input type="text" name="grammar125-3" placeholder="Responda aqui" required /> for breakfast?</p>
                            <p>6. <input type="text" name="grammar125-4" placeholder="Responda aqui" required /> does he drink?</p>
                            <p>7. What <input type="text" name="grammar125-5" placeholder="Responda aqui" required /> she do after breakfast? </p>
                            <p>8. What time <input type="text" name="grammar125-6" placeholder="Responda aqui" required /> for work? </p>
                            <p>9. <input type="text" name="grammar125-7" placeholder="Responda aqui" required /> does She have lunch? </p>
                            <p>10. What time does She come home? </p>
                            <p>11. Where does she go in the evening?</p>
                            <p>12. <input type="text" name="grammar125-8" placeholder="Responda aqui" required /> does he go to bed? </p>
                        </p>
                    </div>
                    <div class="metade direita">
                        <h5>LAURA:</h5>
                        <p>
                            <p>1. Laura is a <input type="text" name="grammar125-9" placeholder="Responda aqui" required /></p>
                            <p>2. She’s nineteen years old.</p>
                            <p>3. She works five days a week.</p>
                            <p>4. She <input type="text" name="grammar125-10" placeholder="Responda aqui" required /> at six o’clock every day.</p>
                            <p>5. She eats an enormous breakfast.</p>
                            <p>6. He drinks two cups of tea.</p>
                            <p>7. Then she kisses her boyfriend.</p>
                            <p>8. She leaves for work at half past six.</p>
                            <p>9. She has lunch in a transport café.</p>
                            <p>10. She <input type="text" name="grammar125-11" placeholder="Responda aqui" required /> home at five o’clock.</p>
                            <p>11. In the evening <input type="text" name="grammar125-12" placeholder="Responda aqui" required /> to the pub.</p>
                            <p>12. She goes to bed at ten o’clock.</p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="6">
                    <input type="hidden" name="atividade_id" value="125">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <form id="unidade6grammar126" method="post">
                    <div class="metade esquerda">
                        <h5>QUESTIONS:</h5>
                        <p>
                            <p>1. <input type="text" name="grammar126-1" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>2. <input type="text" name="grammar126-2" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>3. <input type="text" name="grammar126-3" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>4. <input type="text" name="grammar126-4" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>5. <input type="text" name="grammar126-5" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>6. <input type="text" name="grammar126-6" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>7. <input type="text" name="grammar126-7" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>8. <input type="text" name="grammar126-8" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>9. <input type="text" name="grammar126-9" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>10. <input type="text" name="grammar126-10" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>11. <input type="text" name="grammar126-11" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>12. <input type="text" name="grammar126-12" class="full left-align" placeholder="Responda aqui" required /></p>
                        </p>
                    </div>
                    <div class="metade direita">
                        <h5>AKIRA:</h5>
                        <p>
                            <p>1. Game developer.</p>
                            <p>2. 21.</p>
                            <p>3. 4 days a week.</p>
                            <p>4. 7.30 am.</p>
                            <p>5. With a team of developers.</p>
                            <p>6. He loves comic books.</p>
                            <p>7. They are from Japan.</p>
                            <p>8. He’s American.</p>
                            <p>9. He listens to music.</p>
                            <p>10. In California.</p>
                            <p>11. He prefers Fifa 2016.</p>
                            <p>12. Japanese food.</p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="6">
                    <input type="hidden" name="atividade_id" value="126">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">2 - Imagine you are a movie star. Are you ready to answer questions about the following topics on your interview for a famous movie blog.</h5>
                <form id="unidade6grammar127" method="post">
                    <div class="metade">
                        <p>
                            <p>1. Name <input type="text" name="grammar127-1" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>2. Profession <input type="text" name="grammar127-2" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>3. Likes and dislikes <input type="text" name="grammar127-3" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>4. Age <input type="text" name="grammar127-4" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>5. Marital Status <input type="text" name="grammar127-5" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>6. Favorites<input type="text" name="grammar127-6" class="full left-align" placeholder="Responda aqui" required /></p>
                        </p>
                    </div>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="6">
                    <input type="hidden" name="atividade_id" value="127">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/dominating/unit6/grammar4.jpg') }}" alt="rapper">
                    </figure>
                </div>
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

    $("#unidade6grammar125").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade6grammar125 input[type="text"]').each(function(index) {
            if (($('#unidade6grammar125 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade6grammar125 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade6grammar125'), respostas);
        } else {
            enviarAtividade($('#unidade6grammar125'), respostas);
        }
    });

    $("#unidade6grammar126").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade6grammar126 input[type="text"]').each(function(index) {
            if (($('#unidade6grammar126 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade6grammar126 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade6grammar126'), respostas);
        } else {
            enviarAtividade($('#unidade6grammar126'), respostas);
        }
    });

    $("#unidade6grammar127").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade6grammar127 input[type="text"]').each(function(index) {
            if (($('#unidade6grammar127 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade6grammar127 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade6grammar127'), respostas);
        } else {
            enviarAtividade($('#unidade6grammar127'), respostas);
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
                    $('#unidade6grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade6grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade6grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade6grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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