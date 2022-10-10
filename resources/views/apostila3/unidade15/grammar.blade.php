@extends('layouts.template')
@section('titulo','Unit 15 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade15" data-etapa="grammar">
            <h3 class="barlow">UNIT 15 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 15/03_GRAMMAR/GRAMMAR_15.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A – MODAL VERBS – REVIEW</h5>
            <p><b>Modal verbs</b> are used as auxiliary verbs and express the speaker’s mood, such as
            obligation, possibility, necessity, etc.</p>
            <table class="espacamento left-align bordered" style="margin-top:32px;">
                <tr>
                    <td colspan="2"><h5 class="barlow center-align">Structure</h5></td>
                </tr>
                <tr class="bordered">
                    <td><p>Affirmative</p></td>
                    <td><p><b>Subject + Modal verb + Main Verb + Complement</b></p></td>
                </tr>
                <tr class="bordered">
                    <td><p>Negative</p></td>
                    <td><p><b>Subject + Modal Verb + not + Main Verb + Complement</b></p></td>
                </tr>
                <tr class="bordered">
                    <td><p>Interrogative</p></td>
                    <td><p><b>Modal Verb + Subject + Main Verb + complement</b></p></td>
                </tr>
            </table>
            <table class="espacamento left-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow center-align">Modal verb</h5></td>
                    <td><h5 class="barlow center-align">Meaning</h5></td>
                    <td><h5 class="barlow center-align">Examples</h5></td>
                </tr>
                <tr class="bordered">
                    <td><p>Can</p></td>
                    <td><p>Used to express possibility, ability and negative certainty</p></td>
                    <td>
                    <p><b>Possibility</b>: <b>I can</b> help you with that.</p>
                    <p><b>Ability</b>:  Akira <b>can</b> draw very well.</p>
                    <p><b>Negative Certainty</b>:  You <b>can’t</b> be serious.</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Could</p></td>
                    <td><p>Used to express remote possibility, past ability and negative certainty.</p></td>
                    <td>
                    <p><b>Remote Possibility</b>: We <b>could</b> visit NY next month.</p>
                    <p><b>Past Ability</b>:   I <b>could</b> understand all the explanation.</p>
                    <p><b>Negative Certainty</b>:   I knew it <b>couldn’t</b> be true.</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Will</p></td>
                    <td><p>Used to express certainty and denial.</p></td>
                    <td>
                    <p><b>Certainty</b>:  I’m sure you <b>will</b> love the new marvel movie.</p>
                    <p><b>Denial</b>:  I <b>won’t</b> see the movie trailer. It’s like intenti onally spoiling yourself. </p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>May</p></td>
                    <td><p>Used to express probability and permission.</p></td>
                    <td>
                    <p><b>Probability</b>:  We <b>may</b> have to edit the video tomorrow morning.</p>
                    <p><b>Permission</b>:  <b>May</b> I use your computer for a while?</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Might</p></td>
                    <td><p>Used to express remote probability.</p></td>
                    <td>
                    <p><b> Remot Probability</b>:  They <b>might</b> send the package tomorrow.</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Must</p></td>
                    <td><p>Used to express obligation,
                        assumption (Affirmative form), or
                        prohibition (negative form)</p></td>
                    <td>
                    <p><b>Obligation</b>:  You <b>must</b> save your work here and there in case of any accident with your machine.</p>
                    <p><b>Assumption</b>:  Laura <b>must</b> be in London these days. She said she would travel to Europe and she has family There.</p>
                    <p><b>Prohibition</b>:  You <b>mustn’t</b> be late with the project ok.</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Should</p></td>
                    <td><p>Used to give advice</p></td>
                    <td>
                    <p>We <b>should</b> start writing the content as soon as we can.</p>
                    </td>
                </tr>
            </table>
            <h5 class="barlow" style="margin-top:32px"><b>EXERCICES</b></h5>
            <h5 class="barlow">1 - A mysterious letter has arrived for Jake by special delivery. He is nervous about opening
            it. Add suitable MODAL VERBS to complete the dialogue. He is with Jill, his wife.</h5>
            <form id="unidade15grammar579" method="post">
                <p>Jill :
                <input type="text" name="grammar579-1"  placeholder="Responda aqui" required>
                I have a look at it? (permission)</p>
                <p>Jake : I
                <input type="text" name="grammar579-2"  placeholder="Responda aqui" required>
                think who it’s from. (negative ability)</p>
                <p>Jill : It
                <input type="text" name="grammar579-3"  placeholder="Responda aqui" required>
                be important. (assumption)</p>
                <p>Jake :
                <input type="text" name="grammar579-4"  placeholder="Responda aqui" required>
                you read the postmark? (ability)</p>
                <p>Jill : It
                <input type="text" name="grammar579-5"  placeholder="Responda aqui" required>
                be from the taxman. (possibility)</p>
                <p>Jake : No, it
                <input type="text" name="grammar579-6"  placeholder="Responda aqui" required>
                be from him. He always uses a special envelope. (negative
                (assumption)</p>
                <p>Jill : It
                <input type="text" name="grammar579-7"  placeholder="Responda aqui" required>
                be from your bank manager (possibility), so you
                <input type="text" name="grammar579-8"  placeholder="Responda aqui" required>
                open it immediately. (advice)</p>
                <p>Jake : Yes, I
                <input type="text" name="grammar579-9"  placeholder="Responda aqui" required>
                stop putting it off (obligation). Now, let’s see. Is it
                good news or bad?</p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="15">
                <input type="hidden" name="atividade_id" value="579">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div style="margin-top:32px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit15/grammar.jpg') }}" alt="cachimbo">
				</figure>
            </div>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">2 -  Fill in the blanks with suitable MODAL AUXILIARY VERBS:</h5>
            <form id="unidade15grammar580" method="post">
                <p>
                    <p>
                        1. At the end of the month the Post Office will send him an enormous bill which he
                        <input type="text" name="grammar580-1"  placeholder="Responda aqui" required> pay.
                    </p>
                    <p>
                        2. When I was a child, I <input type="text" name="grammar580-2"  placeholder="Responda aqui" required>
                        understand adults, and now that I am an adult I <input type="text" name="grammar580-3"  placeholder="Responda aqui" required>
                        understand children.
                    </p>
                    <p>
                        3. When I first went to England I <input type="text" name="grammar580-4"  placeholder="Responda aqui" required> read English but I
                        <input type="text" name="grammar580-5"  placeholder="Responda aqui" required> understand it.
                    </p>
                    <p>4. <input type="text" name="grammar580-6"  placeholder="Responda aqui" required> I see your passport, please?</p>
                    <p>5. He sees very badly, he <input type="text" name="grammar580-7"  placeholder="Responda aqui" required> wear glasses all the time.</p>
                    <p>
                        6. Pedestrians <input type="text" name="grammar580-8"  placeholder="Responda aqui" required>
                        either use the crosswalk or cross the street at the traffic lights.
                    </p>
                    <p>7. The buses were all full; I <input type="text" name="grammar580-9"  placeholder="Responda aqui" required> take a taxi.</p>
                    <p>8. You <input type="text" name="grammar580-10"  placeholder="Responda aqui" required> drive fast; there is a speed limit here.</p>
                    <p>9. <input type="text" name="grammar580-11"  placeholder="Responda aqui" required> we all go to the football match tonight?</p>
                    <p>
                        10. You <input type="text" name="grammar580-12"  placeholder="Responda aqui" required> argue with your father, you
                        <input type="text" name="grammar580-13"  placeholder="Responda aqui" required> obey him.
                    </p>
                </p>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="15">
                <input type="hidden" name="atividade_id" value="580">
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

        $("#unidade15grammar579").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15grammar579 input[type="text"]').each(function(index){
                if(($('#unidade15grammar579 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15grammar579 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15grammar579'), respostas);
            }else{
                enviarAtividade($('#unidade15grammar579'), respostas);
            }
        });
        $("#unidade15grammar580").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15grammar580 input[type="text"]').each(function(index){
                if(($('#unidade15grammar580 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15grammar580 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15grammar580'), respostas);
            }else{
                enviarAtividade($('#unidade15grammar580'), respostas);
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
                    $('#unidade15grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade15grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade15grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade15grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade15grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade15grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
