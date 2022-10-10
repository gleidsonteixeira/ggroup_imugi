@extends('layouts.template')
@section('titulo','Unit 13 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade13" data-etapa="grammar">
            <h3 class="barlow">UNIT 13 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 13/03_GRAMMAR/GRAMMAR_13.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A – RELATIVE PRONOUNS REVIEW.</h5>
            <p>We use <b>relative pronouns to connect</b> references, ideas and general info previously
            mentioned within sentences. In short, we may connect sentences to make the speech more
            fluid. Depending on the type of reference, we pick different relative pronouns as you can see
            in the table.</b></p>
            <table class="espacamento left-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow center-align">Reference/Idea/Information</h5></td>
                    <td><h5 class="barlow center-align">Connect with</h5></td>
                    <td><h5 class="barlow center-align">Examples</h5></td>
                </tr>
                <tr class="bordered">
                    <td><p>People</p></td>
                    <td><p><b>Who, Whom,That</b></p></td>
                    <td>
                        <p>• Thanos, who is the villain in the Ultimate, dies in the end of the movie.</p>
                        <p>• Thanos is the villain that dies in the end of the movie.</p>
                        <p>• Thor, to whom Hulk talks to, was living in a hidden fishermen
                        village.</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Places</p></td>
                    <td><p><b>Where , Which</b></p></td>
                    <td>
                        <p>• Wakanda, <b>where</b> the black Panther lives, is a high tech city.(*)</p>
                        <p>• Wakanda, <b>which</b> is hidden in an African territory, is my
                        favorite marvel city.(*)</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Things</p></td>
                    <td><p><b>Which, That</b></p></td>
                    <td>
                        <p>• The wakandian weapons, <b>which</b> are extremely powerful, are astonishing.(*)</p>
                        <p>• The vest <b>that</b> the black panther wears in the movie is made with nanotechnology.(**)</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Dates</p></td>
                    <td><p><b>When</b></p></td>
                    <td><p>• I get extremely anxious <b>when</b> DC or Marvel announces a new
                    release. (**)</p></td>
                </tr>
                <tr class="bordered">
                    <td><p>Possession</p></td>
                    <td><p><b>Whose</b></p></td>
                    <td><p>• Captain America, <b>whose</b> main weapon is a Shield, could hold
                    Thor hammer in the ultimate.</p></td>
                </tr>
            </table>
            <p style="margin-top:32px"><b>(*) Non-restrictive Clauses</b> – They just add extra information and appear in the sentences
            between commas. If you leave this information out, the sentence is still meaningful.</p>

            <h5 class="barlow"><b>Example:</b></h5>
            <p>John’s brother, who lives in London, is coming to Brazil. (John has only one brother
            living in Europe)</p>

            <p><b>(**) Restrictive Clauses</b> – They add essential information to the sentence. Without this
            information, it’s not possible to fully understand the meaning of the sentence.</p>

            <h5 class="barlow"><b>Example:</b></h5>
            <p>
                Mary’s brother who lives in London is coming to Brazil. (Mary has one brother
                Who lives in London and another one who Lives in Italy, so the information about the London
                brother is essential to distinguish between both brothers.)
            </p>

            <h5 class="barlow" style="margin-top:16px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 -  Complete the sentences with WHO / WHICH / WHERE / WHOSE:</h5>
            <form id="unidade13grammar571" method="post">
                <p>My friend <input type="text" name="grammar571-1"  placeholder="Responda aqui" required>
                took me to a restaurant works in a big shop
                <input type="text" name="grammar571-2"  placeholder="Responda aqui" required> sells
                expensive shoes. The restaurant
                <input type="text" name="grammar571-3"  placeholder="Responda aqui" required>
                we had lunch was very modern. The food
                <input type="text" name="grammar571-4"  placeholder="Responda aqui" required>
                they served was excellent. The waiters
                <input type="text" name="grammar571-5"  placeholder="Responda aqui" required>
                shirts were silk were
                always busy with the customers
                <input type="text" name="grammar571-6"  placeholder="Responda aqui" required>
                wallets were full of money.
                The table
                <input type="text" name="grammar571-7"  placeholder="Responda aqui" required>
                we had was near a window, so we could see the cars
                <input type="text" name="grammar571-8"  placeholder="Responda aqui" required>
                were parked by the rich customers outside the restaurant. They were being watched by a
                young man in uniform.
                After we had finished the meals, the waiter
                <input type="text" name="grammar571-9"  placeholder="Responda aqui" required>
                my friend called came with a
                small silver box
                <input type="text" name="grammar571-10"  placeholder="Responda aqui" required>
                he had already put the bill in. When my friend took the bill out
                of the box, he opened his eyes in surprise because he had never had to pay so much money
                before.</p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="13">
                <input type="hidden" name="atividade_id" value="571">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 -  Rewrite the following story combining the sentences using a RELATIVE PRONOUN:</h5>
            <div style="margin-top:36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit13/grammar.jpg') }}" alt="garrafa">
				</figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:16px">
                In 1956, a young sailor wrote a note. He felt very lonely. He put the note into a bottle. He
                threw the bottle into the ocean. In his note, he wanted any girl to write to him. A girl would
                find the bottle.
            </p>

            <p>
                Two years later, a fisherman saw the sailor’s bottle and picked it up. He was fishing on a
                shore in Sicily. As a joke, he gave it to his daughter. She wrote the sailor a letter. After more
                letters, the sailor married her in 1958. He visited Sicily.
            </p>

            <form id="unidade13grammar572" method="post">
                <textarea name="grammar564-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="13">
                <input type="hidden" name="atividade_id" value="572">
                <div class="clear"></div>
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

        $("#unidade13grammar571").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade13grammar571 input[type="text"]').each(function(index){
                if(($('#unidade13grammar571 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade13grammar571 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade13grammar571'), respostas);
            }else{
                enviarAtividade($('#unidade13grammar571'), respostas);
            }
        });

        $("#unidade13grammar572").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade13grammar572 textarea').attr("name")+'":"'+$('#unidade13grammar572 textarea').val()+'"}';
            if($('#unidade13grammar572 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade13grammar572'), respostas);
            }else{
                enviarAtividade($('#unidade13grammar572'), respostas);
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
        var atividade = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_respostas": respostas,
            "atividade_id": formId.find('input[name="atividade_id"]').val(),
            "unidade_id": formId.find('input[name="unidade_id"]').val()
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: atividade,
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
