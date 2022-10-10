@extends('layouts.template')
@section('titulo','Unit 39 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade39" data-etapa="grammar">
            <h3 class="barlow">UNIT 39 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 39/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow" style="margin-top: 16px">A - RELATIVE PRONOUNS – WHO, WHOM, THAT</h5>
                <p>We use <b>relative pronouns (who, whom, that)</b> to avoid repetitions and connect sentences.</p>
                <div class="metade">
                    <table class="espacamento center-align bordered">
                        <tr>
                            <td>
                                <h5 class="barlow"><b>RELATIVE PRONOUNS</b></h5>
                            </td>
                            <td>
                                <h5 class="barlow">EXAMPPLES</h5>
                            </td>
                        </tr>
                        <tr class="bordered">
                            <td>
                                <h5 class="barlow">WHO (Used for people)</h5>
                            </td>
                            <td>
                                <p>A: I saw a new person in the school yesterday.</p>
                                <p>B: He was in Gleen's classroom.</p>
                                <p>A+B= He is the new person who was in Akira's classroom. (Defining sentence)</p><br>
                                <p>A: Paul works till late</p>
                                <p>B: Paul is a web designer.</p>
                                <p>A+B= Paul, who is a web designer, works till late. (extra information)</p>
                            </td>
                        </tr>
                        <tr class="bordered">
                            <td>
                                <h5 class="barlow">WHOM (Used for people - Formal)</h5>
                            </td>
                            <td>
                                <p>A: I talked to my client yesterday.</p>
                                <p>B: My client works in NY.</p>
                                <p>A+B= My client, to whom I talked yesterday, works in NY.</p><br>
                                <p>
                                    Whom, in general, is introduced by a preposition
                                    (to, for, with …). It’s not very used in everyday
                                    conversations. It’s usually replaced by Who.
                                </p>
                            </td>
                        </tr>
                        <tr class="bordered">
                            <td>
                                <h5 class="barlow">THAT (Used for people and things)</h5>
                            </td>
                            <td>
                                <p>He is the new person who/that was in Gleen's classroom. (Defining sentense)</p><br>
                                <p>That is used only in defining sentences. We don't use it in extra information sentences.<p>
                            </td>
                        </tr>
                    </table>
                </div>
                <h5 class="barlow" style="margin-top: 32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Complete with WHO.</h5>
                <form id="unidade39grammar285" style="margin-top:32px" method="post">
                    <div class="metade">
                        <p>
                            <p>
                                1. I met a woman <input type="text" name="grammar285-1" placeholder="Responda aqui" required /> who<input type="text" name="grammar285-2" placeholder="Responda aqui" required /> can speak six languages.
                            </p>
                            <p>
                                2. What’s the name of the man <input type="text" name="grammar285-3" placeholder="Responda aqui" required /> lives next door?
                            </p>
                            <p>
                                3. Everybody <input type="text" name="grammar285-4" placeholder="Responda aqui" required /> went to the party enjoyed it very much.
                            </p>
                            <p>
                                4. Do you know anybody <input type="text" name="grammar285-5" placeholder="Responda aqui" required /> want to buy a car?
                            </p>
                            <p>
                                5. I have a friend <input type="text" name="grammar285-6" placeholder="Responda aqui" required /> is very good at repairing cars.
                            </p>
                        </p>
                    </div>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="39">
                    <input type="hidden" name="atividade_id" value="285">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
            </div>

            <h5 class="barlow">2 - Make one sentence from two. Use WHO / THAT:</h5>
            <form id="unidade39grammar286" style="margin-top:32px" method="post">
                <div class="metade">
                    <p>
                        <p>
                            1 - A girl is now in hospital. She was injured in the accident.<br>
                            Ex: <b>A girl who was injured in the accident is now in hospital</b>
                        </p>
                        <p>
                            2 - A man told me you were away. He answered the phone.<br>
                            <input type="text" name="grammar286-1" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            3 - A waitress was very impolite and impatient. She served us.<br>
                            <input type="text" name="grammar286-2" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4 - I saw the man. He closed the door.<br>
                            <input type="text" name="grammar286-3" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5 - The girl is happy. She won the race.<br>
                            <input type="text" name="grammar286-4" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            6 - The student is from China. He sits next to me.<br>
                            <input type="text" name="grammar286-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            7 - The taxi driver was friendly. He took me to the airport.<br>
                            <input type="text" name="grammar286-6" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            8 - The woman was polite. She answered the phone.<br>
                            <input type="text" name="grammar286-8" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            9 - The man has a good voice. He sang at the concert.<br>
                            <input type="text" name="grammar286-9" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            10 - We enjoyed the actors. They played the leading roles.<br>
                            <input type="text" name="grammar286-10" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            11 - The girl is hurt. She fell down the stairs.<br>
                            <input type="text" name="grammar286-11" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            12 - The student is in my class. He is walking with Ann.<br>
                            <input type="text" name="grammar286-12" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            13 - The police caught the thief. He stole the money.<br>
                            <input type="text" name="grammar286-13" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            14 - The man is at the bus stop. He fixed our refrigerator.<br>
                            <input type="text" name="grammar286-14" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            15 - Who are those students? They are talking to Mrs. Hinton.<br>
                            <input type="text" name="grammar286-15" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>
                </div>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="39">
                <input type="hidden" name="atividade_id" value="286">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit39/grammar.png') }}" alt="carro policia">
				</figure>
			</div>

            <h5 class="barlow" style="margin-top: 36px">3 - Write about a famous actor or actress. Use WHO/THAT to give information about him/her.</h5>
            <form id="unidade39grammar287" method="post">
                <textarea name="grammar287-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="39">
                <input type="hidden" name="atividade_id" value="287">
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

    $("#unidade39grammar285").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade39grammar285 input[type="text"]').each(function(index) {
            if (($('#unidade39grammar285 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade39grammar285 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade39grammar285'), respostas);
        } else {
            enviarAtividade($('#unidade39grammar285'), respostas);
        }
    });

    $("#unidade39grammar286").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade39grammar286 input[type="text"]').each(function(index) {
            if (($('#unidade39grammar286 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade39grammar286 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade39grammar286'), respostas);
        } else {
            enviarAtividade($('#unidade39grammar286'), respostas);
        }
    });

    $("#unidade39grammar287").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade39grammar287 textarea').attr("name") + '":"' + $('#unidade39grammar287 textarea').val() + '"}';
        if ($('#unidade39grammar287 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade39grammar287'), respostas);
        } else {
            enviarAtividade($('#unidade39grammar287'), respostas);
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
                    $('#unidade39grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade39grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade39grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade39grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade39grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade39grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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