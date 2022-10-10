@extends('layouts.template')
@section('titulo','Unit 7 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade7" data-etapa="grammar">
            <h3 class="barlow">UNIT 7 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 7/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - PRESENT CONTINUOUS</h5>
                <p><b>Present continuous</b> is used to express <b>actions in progress or a temporary situation</b>.</p>
                <p class="center-align caixa" style="margin-top: 32px"><b>Present Continuous = Subject + am/are/is + verb(ing)</b></p>
                <table class="metade center-align">
                    <tr>
                        <td>
                            <h5 class="barlow">Subject</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Am/are/is</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Verb</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Action in progress</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Akira</p>
                        </td>
                        <td>
                            <p>is</p>
                        </td>
                        <td>
                            <p>develop</p>
                        </td>
                        <td>
                            <p>Akira <b>is</b> develop<b>ing</b> a new game.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>I</b></p>
                        </td>
                        <td>
                            <p>am</p>
                        </td>
                        <td>
                            <p>design</p>
                        </td>
                        <td>
                            <p>I <b>am</b> designing a new magazine.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>They</p>
                        </td>
                        <td>
                            <p>are</p>
                        </td>
                        <td>
                            <p>Watch</p>
                        </td>
                        <td>
                            <p>They <b>are</b> watch<b>ing</b> tutorials on youtube.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>She</p>
                        </td>
                        <td>
                            <p>is</p>
                        </td>
                        <td>
                            <p>Plan</p>
                        </td>
                        <td>
                            <p>She <b>is</b> plann<b>ing</b> to take another course.</p>
                        </td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top: 16px">B - YES/NO QUESTION – WH-QUESTIONS</h5>
                <table class="metade center-align">
                    <tr>
                        <td colspan="3">
                            <h5 class="barlow">Yes/no Questions</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Is Laura working</b> on a new video?</p>
                        </td>
                        <td>
                            <p>Yes, Laura is working on a new video/ Yes She is.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Are you searching</b> for new tools? </p>
                        </td>
                        <td>
                            <p>No, I am not searching for new tool/ No I'm not.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Are they prepating</b> the presentation?</p>
                        </td>
                        <td>
                            <p>Yes, they are preparing te presentation/ Yes they are.</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <h5 class="barlow">Wh-Questions</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>What are you doing </b> now?</p>
                        </td>
                        <td>
                            <p>I am downloading pictures for my new job.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Why are you studying</b> 3D modeling?</p>
                        </td>
                        <td>
                            <p>Because I need for my career.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Where is he working</b> this week?</p>
                        </td>
                        <td>
                            <p>He is working in Rockstar.</p>
                        </td>
                    </tr>
                </table>
                <div class="clear"></div>

                <h5 class="barlow" style="margin-top: 16px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Supply PRESENT CONTINUOUS TENSE in the blanks:</h5>
                <form id="unidade7grammar130" method="post">
                    <div class="metade esquerda">
                        <p>
                            <p>1. He <input type="text" name="grammar130-1" placeholder="Responda aqui" required /> (tech) his son how to install an app in his cell phone.</p>
                            <p>2. <b>P:</b> Why <input type="text" name="grammar130-2" placeholder="Responda aqui" required /> Laura <input type="text" name="grammar130-3" placeholder="Responda aqui" required /> (use) Sony Vegas to edit her videos?</p>
                            <p><b>R:</b> Because she likes the tools.</p>
                            <p>3. John usually studies in the evenings, but he <input type="text" name="grammar130-4" placeholder="Responda aqui" required /> (study) it today because he is busy with the new magazine.</p>
                            <p>4. He <input type="text" name="grammar130-5" placeholder="Responda aqui" required /> (not / work), she <input type="text" name="grammar130-6" placeholder="Responda aqui" required /> (Relax).</p>
                            <p>5. <b>P:</b> <input type="text" name="grammar130-7" placeholder="Responda aqui" required /> Gleen <input type="text" name="grammar130-8" placeholder="Responda aqui" required /> (teach) right now?</p>
                            <p><b>R:</b> No, he’s not. He <input type="text" name="grammar130-9" placeholder="Responda aqui" required /> (prepare) a presentation.</p>
                            <p><b>P:</b> Where is his assistant?</p>
                            <p><b>R:</b> She is in the office, she <input type="text" name="grammar130-10" placeholder="Responda aqui" required /> (copy) some documents for him.</p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="7">
                    <input type="hidden" name="atividade_id" value="130">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">2 - Ask questions for the underlined words:</h5>

                <form id="unidade7grammar131" method="post">
                    <div class="metade">
                        <p>
                            <p>1. <input type="text" name="grammar131-1" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>Akira is studying <b>a new Programming language</b> this month.</p>
                            <p>2. <input type="text" name="grammar131-2" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>Yes, He is living in London this year.</p>
                            <p>3. <input type="text" name="grammar131-3" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>The teacher is writing some examples <b>on the board</b>.</p>
                            <p>4. <input type="text" name="grammar131-4" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>No, John is not watching the tutorial right now.</p>
                            <p>5. <input type="text" name="grammar131-5" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>Gleen <b>is preparing a class</b>.</p>
                            <p>6. <input type="text" name="grammar131-6" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>Because she needs to present to her client tomorrow</p>
                            <p>7. <input type="text" name="grammar131-7" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>Laura is doing her job <b>in her office</b>.</p>
                            <p>8. <input type="text" name="grammar131-8" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>No, I’m not taking any course this month.</p>
                            <p>9. <input type="text" name="grammar131-9" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>We’re brainstorming about a new game.</p>
                            <p>10. <input type="text" name="grammar131-10" class="full left-align" placeholder="Responda aqui" required />?</p>
                            <p>He is analyzing the scope of the magazine.</p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="7">
                    <input type="hidden" name="atividade_id" value="131">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">3 - Watch the video and write 5 sentences in the Present continuous.</h5>
                <form id="unidade7grammar132" method="post">
                    <div class="metade esquerda">
                        <p>
                            <p>1. <input type="text" name="grammar132-1" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>2. <input type="text" name="grammar132-2" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>3. <input type="text" name="grammar132-3" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>4. <input type="text" name="grammar132-4" class="full left-align" placeholder="Responda aqui" required /></p>
                            <p>5. <input type="text" name="grammar132-5" class="full left-align" placeholder="Responda aqui" required /></p>
                        </p>
                    </div>
                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="7">
                    <input type="hidden" name="atividade_id" value="132">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <iframe style="margin-top: 16px" width="573" height="240" src="https://www.youtube.com/embed/mN0zPOpADL4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <figure style="margin-top: 36px">
                    <img src="{{ asset('assets/img/dominating/unit7/grammar.png') }}" alt="desenho">
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

    $("#unidade7grammar130").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade7grammar130 input[type="text"]').each(function(index) {
            if (($('#unidade7grammar130 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade7grammar130 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade7grammar130'), respostas);
        } else {
            enviarAtividade($('#unidade7grammar130'), respostas);
        }
    });

    $("#unidade7grammar131").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade7grammar131 input[type="text"]').each(function(index) {
            if (($('#unidade7grammar131 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade7grammar131 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade7grammar131'), respostas);
        } else {
            enviarAtividade($('#unidade7grammar131'), respostas);
        }
    });

    $("#unidade7grammar132").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade7grammar132 input[type="text"]').each(function(index) {
            if (($('#unidade7grammar132 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade7grammar132 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade7grammar132'), respostas);
        } else {
            enviarAtividade($('#unidade7grammar132'), respostas);
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
                    $('#unidade7grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade7grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade7grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade7grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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