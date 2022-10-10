@extends('layouts.template')
@section('titulo','Unit 2 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade2" data-etapa="grammar">
            <h3 class="barlow">UNIT 2</h3>
            <h5 class="barlow">3 – GRAMMAR</h5>

            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 2/3. GRAMMAR/GRAMMAR.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <h5 class="barlow" style="margin-top: 16px">A - WH QUESTIONS – WHAT – WHERE – WHO.</h5>
            <p><b>What</b> – Used for <b>general questions.</b></p>
            <h5 class="barlow"><b>Examples:</b></h5>
            <p><b>What</b> is your <b>full name? </b> / My full name is <b>Gleen Frey</b></p>
            <p><b>What’s</b> your favorite <b>software?</b> / My favorite Software is<b> Photoshop.</b></p>
            <p><b>Where</b> – Used for <b>questions about places.</b></p>
            <h5 class="barlow"><b>Examples:</b></h5>
            <p><b>Where</b> is your book? / It is<b> in my backpack</b></p>
            <p><b>Where</b> are your parents? / They are <b>in Europe.</b></p>
            <p><b>Who</b> – Used for <b>questions about people.</b></p>
            <h5 class="barlow"><b>Examples:</b></h5>
            <p><b>Who</b> is your favorite illustrator? / My favorite illustrator is<b> Paul.</b></p>
            <p><b>Who</b>are you? / I am<b> Akira</b> The<b> new game Developer.</b></p>

            <h5 class="barlow" style="margin-top: 16px">B - SUBJECT PRONOUNS X POSSESSIVE ADJECTIVE.</h5>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 2/3. GRAMMAR/GRAMMAR B E C.ogg') }}" type="audio/ogg">
            </audio>

            <table class="center-align metade">
                <tr>
                    <td>
                        <h5 class="barlow">Subject Pronoun</h5>
                    </td>
                    <td>
                        <h5 class="barlow">Possessive Adjective</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>I</p>
                    </td>
                    <td>
                        <p>My</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>You</p>
                    </td>
                    <td>
                        <p>Your</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>He</p>
                    </td>
                    <td>
                        <p>His</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>She</p>
                    </td>
                    <td>
                        <p>Her</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>It</p>
                    </td>
                    <td>
                        <p>Its</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>We</p>
                    </td>
                    <td>
                        <p>Our</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>You</p>
                    </td>
                    <td>
                        <p>Your</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>They</p>
                    </td>
                    <td>
                        <p>Their</p>
                    </td>
                </tr>
            </table>

            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px"><b>Examples:</b></h5>
            <p><b>Laura </b>works as a video Maker.<b> Her </b>favorite software is Sony Vegas.</p>
            <p><b>Akira and John </b>love super hero movies.<b> Their </b>favorite heroes are Batman and Super Man.</p>
            <h5 class="barlow" style="margin-top: 16px">C - DEMONSTRATIVE PRONOUNS</h5>


            <table class="center-align metade">
                <tr>
                    <td></td>
                    <td>
                        <h5 class="barlow upper">Near</h5>
                    </td>
                    <td>
                        <h5 class="barlow upper">Far</h5>
                    </td>
                </tr>
                <tr>
                    <td class="barlow upper">
                        <p>Singular</p>
                    </td>
                    <td>
                        <p>This</p>
                    </td>
                    <td>
                        <p>That</p>
                    </td>
                </tr>
                <tr>
                    <td class="barlow upper">
                        <p>Plural</p>
                    </td>
                    <td>
                        <p>These</p>
                    </td>
                    <td>
                        <p>Those</p>
                    </td>
                </tr>
            </table>

            <br>
            <div class="clear"></div>

            <h5 class="barlow"><b>Examples:</b></h5>

            <div class="umterco esquerda">
                <p><b>This is</b> Mr. Antony, the Coordinator.</b></p>
                <p><b>These</b> new tools are fantastic.</b></p>
            </div>

            <div class="umterco direita">
                <p><b>That</b> lady is the marketing manager.</p>
                <p><b>Those</b> Graffiti on the wall are great.</p>
            </div>

            <div class="clear"></div>
            <h5 class="barlow"><b>EXERCISES:</b></h5>
            <h5 class="barlow">1 - Build up questions for the answers.</h5>
            <form id="unidade2grammar106" method="post">
                <p>E.g She’s Laura./ Who is she?</p>
                <div class="umterco esquerda">
                    <p>1. He’s Akira <br>
                        <input type="text" name="grammar106-1" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>2. They are in New York <br>
                        <input type="text" name="grammar106-2" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>3. That is a new app <br>
                        <input type="text" name="grammar106-3" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>4. Gleen is the teacher <br>
                        <input type="text" name="grammar106-4" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>5. It’s in Brooklin <br>
                        <input type="text" name="grammar106-5" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                </div>

                <div class="umterco direita">
                    <p>6. I am the new manager <br>
                        <input type="text" name="grammar106-6" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>7. This is Carlos, an old student <br>
                        <input type="text" name="grammar106-7" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>8. It’s in the drawer <br>
                        <input type="text" name="grammar106-8" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>9. My favorite hero is Batman <br>
                        <input type="text" name="grammar106-9" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>10. This a new editing software <br>
                        <input type="text" name="grammar106-10" placeholder="Responda aqui" class="full left-align"" required>
                        </p>
                    </div>

                    <div class=" clear">
                </div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="2">
                <input type="hidden" name="atividade_id" value="106">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <figure class="center-align" style="margin-top:16px">
                <img src="{{ asset('assets/img/dominating/unit2/grammar.jpg') }}" alt="super man e batman">
            </figure>

            <h5 class="barlow" style="margin-top:32px">2 - Rewrite these sentences using HE, SHE, IT, THEY, WE, HIS, HER, THEIR, OUR, ITS:</h5>
            <form id="unidade2grammar107" method="post">

                <div class="metade">
                    <p>1. Akira’s father is Japanese.
                        <input type="text" name="grammar107-1" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>2. Editing softwares are very expensive.
                        <input type="text" name="grammar107-2" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>3. John’s experience is very good.
                        <input type="text" name="grammar107-3" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>4. Is your brother a businessman?
                        <input type="text" name="grammar107-4" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>5. My friend and I love comic books.
                        <input type="text" name="grammar107-5" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>6. These are Laura’s and my books.
                        <input type="text" name="grammar107-6" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>7. Where is Gleen’s marker?
                        <input type="text" name="grammar107-7" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>8. My father’s favorite computer is Mac.
                        <input type="text" name="grammar107-8" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>9. The students’ books are in the classroom.
                        <input type="text" name="grammar107-9" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>10. This is Mrs. Brown’s coat, but these are the children’s coats.
                        <input type="text" name="grammar107-10" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                </div>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="2">
                <input type="hidden" name="atividade_id" value="107">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow">3 - Complete the passage. Use these words.</h5>
            <form id="unidade2grammar108" method="post">

                <p class="caixa center-align">my - your - his - her - its - our - their - his</p>
                <br>
                <p>Hello<input type="text" name="grammar108-1" placeholder="Responda aqui" required>name is Patrick. I’m fourteen. I have a brother. His name is Andy and he’s ninenteen.
                    We are on holiday in California. The hotel is very good and <input type="text" name="grammar108-2" placeholder="Responda aqui" required>swimming-pool is large.</p>
                <b>
                    <p>Andy and I have a sister<input type="text" name="grammar108-3" placeholder="Responda aqui" required>name is Liz. She’s sixteen years old
                        <input type="text" name="grammar108-4" placeholder="Responda aqui" required>
                        mother and father are in the restaurant now. Their friends, Mr. and Mrs. Bolton, are in the restaurant, too
                        <input type="text" name="grammar108-5" placeholder="Responda aqui" required>two sons are in the pool.
                </b></p>
                <p>Andy has a girl-friend<input type="text" name="grammar108-6" placeholder="Responda aqui" required>girl-friend’s name is Sandra. She’s in
                    <input type="text" name="grammar108-7" placeholder="Responda aqui" required>class at school.</p>
                <p>Where is your family? Is<input type="text" name="grammar108-8" placeholder="Responda aqui" required>family here, too?</p>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="2">
                <input type="hidden" name="atividade_id" value="108">
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

    $("#unidade2grammar106").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade2grammar106 input[type="text"]').each(function(index) {
            if (($('#unidade2grammar106 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade2grammar106 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade2grammar106'), respostas);
        } else {
            enviarAtividade($('#unidade2grammar106'), respostas);
        }
    });

    $("#unidade2grammar107").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade2grammar107 input[type="text"]').each(function(index) {
            if (($('#unidade2grammar107 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade2grammar107 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade2grammar107'), respostas);
        } else {
            enviarAtividade($('#unidade2grammar107'), respostas);
        }
    });

    $("#unidade2grammar108").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade2grammar108 input[type="text"]').each(function(index) {
            if (($('#unidade2grammar108 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade2grammar108 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade2grammar108'), respostas);
        } else {
            enviarAtividade($('#unidade2grammar108'), respostas);
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
                    $('#unidade2grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade2grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade2grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade2grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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