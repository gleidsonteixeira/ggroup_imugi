@extends('layouts.template')
@section('titulo','Unit 45 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade45" data-etapa="grammar">
            <h3 class="barlow">UNIT 45</h3>
            <h5 class="barlow">3 - GRAMMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 45/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A - CONJUNCTIONS FOR CONCLUDING INFORMATION.</h5>
            <p>We also use <b>connectors to conclude ideas.</b> Take a look at the examples below</p>
            <div class="metade">
                <table class="center-align">
                    <tr>
                        <td>
                            <h5 class="barlow"> Drawing a conclusion</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>so, therefore , as I’ve said , based on , as , as a conclusion , to
                                conclude , summing up , because of that , since , as a result</p>
                        </td>
                    </tr>
                </table>
                <table class="center-align">
                    <tr class="bordered">
                        <td>
                            <h5 class="barlow">Sentences / information</h5>
                        </td>
                        <td>
                            <h5 class="barlow">Connected sentences / conclusion</h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="bordered  left-align">
                            <p>a.Cinema 4D is a <b>fast</b> software.</p>
                            <p>b.Cinema 4D is <b>very efficient</b> for renderizations.</p>
                            <p>c.Cinema 4D is <b>very cheap</b> when compared to other softwares.</p>
                        </td>
                        <td class="bordered">
                            <p>A+b+c</p><br>
                            <p>Cinema 4D has a lot of good qualities.<b>So</b>, we decided to use it in our company.</p><br>
                            <p>Cinema 4D has a lot of good qualities.<b>Therefore</b>, we decided to use it in our company.</p><br>
                            <p>Cinema 4D has a lot of good qualities.<b>Because of that</b>, we decided to use it in our company.</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 - Complete the sentences in A using BECAUSE or BECAUSE OF and an idea from B. Use each idea in B only one.</h5>
            <div class="metade espacamento">
                <div class="metade esquerda left-align">
                    <p><b>A</b></p>
                    <p>1. He phoned the police</p>
                    <p>2. I didn’t have any lunch</p>
                    <p>3. Our plane was delayed</p>
                    <p>4. He went to Paris</p>
                    <p>5. I took an umbrella</p>
                    <p>6. He couldn’t run very fast</p>
                </div>
                <div class="metade direita left-align">
                    <p><b>B</b></p>
                    <p>a. his bad leg</p>
                    <p>b. I thought it might rain</p>
                    <p>c. I wasn’t hungry</p>
                    <p>d. he’d lost his wallet</p>
                    <p>e. the fog</p>
                    <p>f. he wanted to learn French</p>
                </div>
            </div>
            <div class="clear"></div>
            <form id="unidade45grammar319" method="post" style="margin-top:32px">
                <p>
                    1. <input type="text" placeholder="Responda aqui" name="grammar319-1" required>
                    He phoned the police because he’d lost his wallet. <input type="text" placeholder="Responda aqui" name="grammar319-1" required>
                </p>
                <div class="metade">
                    <p>2. <input type="text" placeholder="Responda aqui" name="grammar319-2" class="full left-align" required></p>
                    <p>3. <input type="text" placeholder="Responda aqui" name="grammar319-3" class="full left-align" required></p>
                    <p>4. <input type="text" placeholder="Responda aqui" name="grammar319-4" class="full left-align" required></p>
                    <p>5. <input type="text" placeholder="Responda aqui" name="grammar319-5" class="full left-align" required></p>
                    <p>6. <input type="text" placeholder="Responda aqui" name="grammar319-6" class="full left-align" required></p>
                </div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="45">
                <input type="hidden" name="atividade_id" value="319">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - Choose the correct answers:</h5>
            <form class="quasefull" id="unidade45grammar320" method="post">
                <p>1.<input type="radio" name="grammar320-1" value="1" required>
                    <b>As</b> / <input type="radio" name="grammar320-1" value="2" required>
                    <b>As a result</b> it was such a beautiful day, we decided to have a picnic.</p>

                <p>2. It was his birthday <input type="radio" name="grammar320-2" value="1" required>
                    <b>because</b> / <input type="radio" name="grammar320-2" value="2" required><b>so</b>
                    we decided to buy him a present.</p>

                <p>3. <input type="radio" name="grammar320-3" value="1" required>
                    <b>As a result</b> / <input type="radio" name="grammar320-3" value="2" required>
                    <b>Since</b> all the seats on the train were taken, we had to stand.</p>

                <p>4. The banks were closed and <input type="radio" name="grammar320-4" value="1" required>
                    <b>as a result</b> / <input type="radio" name="grammar320-4" value="2" required>
                    <b>because</b> we couldn’t get any money.</p>

                <p>5. I didn’t find the book very interesting and <input type="radio" name="grammar320-5" value="1" required>
                    <b>so</b> / <input type="radio" name="grammar320-5" value="2" required>
                    <b>as</b> I didn’t finish it.</p>

                <p>6. We couldn’t drive across the bridge <input type="radio" name="grammar320-6" value="1" required>
                    <b>as a result</b> / <input type="radio" name="grammar320-6" value="2" required>
                    <b>because</b> it was closed.</p>

                <p>7. She had the best qualifications and she <input type="radio" name="grammar320-7" value="1" required>
                    <b>so</b> / <input type="radio" name="grammar320-7" value="2" required>
                    <b>therefore</b> got the job.</p>

                <p>8. I haven’t got much money <input type="radio" name="grammar320-8" value="1" required>
                    <b>as</b> / <input type="radio" name="grammar320-8" value="2" required>
                    <b>so</b> I can’t afford a new car.</p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="45">
                <input type="hidden" name="atividade_id" value="320">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure>
                <img src="{{ asset('assets/img/dominating/unit45/grammar.png') }}" alt="Garotos festejando">
            </figure>
            <h5 class="barlow" style="margin-top: 16px;">3 - In groups of 3 or 4, debate what could the bone to bring the movies and games universe
                to the classroom to improve students interest and learning. Use the linking words to draw
                a conclusion.</h5>
            <form id="unidade45grammar321" method="post">
                <textarea name="grammar321-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="45">
                <input type="hidden" name="atividade_id" value="321">
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

    $("#unidade45grammar319").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade45grammar319 input[type="text"]').each(function(index) {
            if (($('#unidade45grammar319 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade45grammar319 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade45grammar319'), respostas);
        } else {
            enviarAtividade($('#unidade45grammar319'), respostas);
        }
    });


    $("#unidade45grammar320").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade45grammar320 input[type="radio"]:checked').each(function(index) {
            if (($('#unidade45grammar320 input[type="radio"]:checked').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade45grammar320 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade45grammar320'), respostas);
        } else {
            enviarAtividade($('#unidade45grammar320'), respostas);
        }
    });

    $("#unidade45grammar321").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade45grammar321 textarea').attr("name") + '":"' + $('#unidade45grammar321 textarea').val() + '"}';
        if ($('#unidade45grammar321 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade45grammar321'), respostas);
        } else {
            enviarAtividade($('#unidade45grammar321'), respostas);
        }
    });


    function checkAtividade(atividade_id, inputType) {
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

                console.log('tipo input -> ' + inputType);
                if (inputType === 'radio') {
                    for (j = 0; j < respostas.length; j++) {
                        $('#unidade45grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    }
                } else {
                    for (j = 0; j < respostas.length; j++) {
                        $('#unidade45grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                        $('#unidade45grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                        $('#unidade45grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                        $('#unidade45grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    }
                }
                $('#unidade45grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade45grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
