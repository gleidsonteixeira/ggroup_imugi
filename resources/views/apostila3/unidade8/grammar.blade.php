@extends('layouts.template')
@section('titulo','Unit 08 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade8" data-etapa="grammar">
            <h3 class="barlow">UNIT 8 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 08/03_GRAMMAR/GRAMMAR_08.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A – TALKING ABOUT THE PRESENT.</h5>
                <p>There are different ways to talk about the present. It also depends on the message
                you want to communicate. Pay attention to some possibilities on the table.</p>
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow">Verb Tense</h5></td>
                    <td><h5 class="barlow">Explanation</h5></td>
                    <td><h5 class="barlow">Use</h5></td>
                </tr>
                <tr class="bordered center-align">
                    <td><p>Simple Present</p></td>
                    <td><p>Used to express general facts and habitual/regular action in the present.</p></td>
                    <td><p>Gleen <b>teaches</b> in many different courses nowadays.</p></td>
                </tr>
                <tr class="bordered center-align">
                    <td><p>Present Continuous</p></td>
                    <td><p>A progressive or temporary situation in the present.</p></td>
                    <td><p>John <b>is taking</b> a course on photoshop. He said <b>it’s being</b> awesome.</p></td>
                </tr>
                <tr class="bordered center-align">
                    <td><p>To be Used to</p></td>
                    <td><p>Used to express a present habit.</p></td>
                    <td><p>Carlos <b>is used</b> to many different video editing tools. He <b>is used to dealing</b> with different necessities when editing his videos. </p></td>
                </tr>
            </table>
            <h5 class="barlow" style="margin-top:32px"><b>EXERCISES :</b></h5>
            <h5 class="barlow">1 -  Write sentences. Use the PRESENT SIMPLE or the PRESENT CONTINUOUS:</h5>
            <h5 class="barlow"><b>Example:</b></h5>
            <p>(Usually she / work / at the office, but this week she / work / at home.)</p>
            <p>Usually she works at the office, but this week she’s working at home</p>
            <form id="unidade8grammar537" method="post" class="metade" style="margin-top:32px">
                <p>1. (You / not / eat / very much at the moment. Are you ill?)
                <input type="text" name="grammar537-1" class="full left-align" placeholder="Responda aqui" required></p>
                <p>2. (She / know / three words in Italian!)
                <input type="text" name="grammar537-2" class="full left-align" placeholder="Responda aqui" required></p>
                <p>3. (I / take / the bus to work this week, but usually I / walk)
                <input type="text" name="grammar537-3" class="full left-align" placeholder="Responda aqui" required></p>
                <p>4. (I / study / Japanese this year. It’s very difficult.)
                <input type="text" name="grammar537-4" class="full left-align" placeholder="Responda aqui" required></p>
                <p>5. (you / watch / the television at the moment?)
                <input type="text" name="grammar537-5" class="full left-align" placeholder="Responda aqui" required></p>
                <p>6. (I / not / remember / the name of the hotel.)
                <input type="text" name="grammar537-6" class="full left-align" placeholder="Responda aqui" required></p>
                <p>7. (She / speak / three languages.)
                <input type="text" name="grammar537-7" class="full left-align" placeholder="Responda aqui" required></p>
                <p>8. (The sun / shine /. It’s a beautiful day!)
                <input type="text" name="grammar537-8" class="full left-align" placeholder="Responda aqui" required></p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="8">
                <input type="hidden" name="atividade_id" value="537">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 - Make questions and answers. Use THE PRESENT CONTINUOUS:</h5>
            <h5 class="barlow"><b>Example:</b></h5>
            <form id="unidade8grammar538" method="post">
                <div class="metade esquerda">
                    <p>(she / work / in Peru / this year?)</p>
                    <p>Is she working in Peru this year?</p>

                    <p style="margin-top: 32px;">1. (you / study / English / at the moment?)
                    <input type="text" name="grammar538-1" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>2. (they / listen / to the radio?)
                    <input type="text" name="grammar538-2" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>3. (Peter / wash / now?)
                    <input type="text" name="grammar538-3" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>4. (they / live / in Madrid / at the moment?
                <input type="text" name="grammar538-4" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>5. (David / sing / in a group / this year?)
                    <input type="text" name="grammar538-5" class="full left-align" placeholder="Responda aqui" required></p>
                </div>
                <div class="metade direita">
                    <p>(No, she / study / in Mexico)</p>
                    <p>No. She’s studying in Mexico.</p>

                    <p style="margin-top: 32px;">(Yes, I / work / hard.)
                    <input type="text" name="grammar538-6" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>(No, they / play / CDs.)
                    <input type="text" name="grammar538-7" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>(Yes, he / have / a bath.)
                    <input type="text" name="grammar538-8" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>(Yes, they / learn / Spanish.)
                    <input type="text" name="grammar538-9" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>(No, he / work / in a restaurant.)
                    <input type="text" name="grammar538-10" class="full left-align" placeholder="Responda aqui" required></p>
                </div><div class="clear"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="8">
                <input type="hidden" name="atividade_id" value="538">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit8/grammar.jpg') }}" alt="guitarrista">
				</figure>
            </div>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">3 - Read the paragraph and answer the questions:</h5>
            <p>Brian is a doctor. He looks after sick people. He usually gets up at 6.00 o’clock.
            Today he is late, it is 6.30 and he is still in bed. He usually goes to work by train but today he
            is driving to work. He arrives at work at 6.30 every morning but it is 7.30 now and he is still
            driving.</p>
            <p>It’s 12.00 o’clock now. He always has his lunch at 12.00 but today he isn’t having lunch at
            12.00, he is looking after his sick patients. It is half past seven now, Brian is watching TV. He
            usually watches TV at half past seven because his favorite program starts at half past seven.
            Brian has his dinner at 8.30 every day and he is having dinner now.</p>
            <p>It is 24.00 now Brian is going to bed. He always goes to bed at 24.00.</p>
            <form id="unidade8grammar539" method="post" class="metade" style="margin-top:32px">
                <p>1. What does Brian do?
                <input type="text" name="grammar539-1" class="full left-align" placeholder="Responda aqui" required></p>
                <p>2. What time does he usually get up?
                <input type="text" name="grammar539-2" class="full left-align" placeholder="Responda aqui" required></p>
                <p>3. How does he usually go to work?
                <input type="text" name="grammar539-3" class="full left-align" placeholder="Responda aqui" required></p>
                <p>4. Why is he driving to work today?
                <input type="text" name="grammar539-4" class="full left-align" placeholder="Responda aqui" required></p>
                <p>5. What time does he arrive at work every day?
                <input type="text" name="grammar539-5" class="full left-align" placeholder="Responda aqui" required></p>
                <p>6. When does he always have his lunch?
                <input type="text" name="grammar539-6" class="full left-align" placeholder="Responda aqui" required></p>
                <p>7. What is he doing at 12.00 today?
                <input type="text" name="grammar539-7" class="full left-align" placeholder="Responda aqui" required></p>
                <p>8. Why does he usually watch TV at 7.30?
                <input type="text" name="grammar539-8" class="full left-align" placeholder="Responda aqui" required></p>
                <p>9. What time does he go to bed?
                <input type="text" name="grammar539-9" class="full left-align" placeholder="Responda aqui" required></p>
                <p>10. What time is he going to bed now?
                <input type="text" name="grammar539-10" class="full left-align" placeholder="Responda aqui" required></p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="8">
                <input type="hidden" name="atividade_id" value="539">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">4 - Complete the sentences using USED TO or BE USED TO:</h5>
            <form id="unidade8grammar540" method="post">
                <p>1. I <input type="text" name="grammar540-1" placeholder="Responda aqui" required>
                (live) in Finland, but now I live in France.</p>
                <p>2. He <input type="text" name="grammar540-2" placeholder="Responda aqui" required>
                (sit) in the back of the classroom, but now he prefers to sit in the front row.</p>
                <p>3. When I was a child, I
                <input type="text" name="grammar540-3" placeholder="Responda aqui" required>
                (play) games with my friends in a big field near my house after school every day.</p>
                <p>4. It’s hard for my children to stay inside on a cold, rainy day. They
                <input type="text" name="grammar540-4" placeholder="Responda aqui" required>
                (play) outside in the big field near our house. They play there almost every day.</p>
                <p>5. People <input type="text" name="grammar540-5" placeholder="Responda aqui" required>
                (believe) that the world was flat.</p>
                <p>6. Trains <input type="text" name="grammar540-6" placeholder="Responda aqui" required>
                (be) the main means of cross-continental travel. Today, most people take airplanes for long-distance travel.</p>
                <p>7. Ms. Stanton’s job requires her to travel extensively throughout the world.
                She <input type="text" name="grammar540-7" placeholder="Responda aqui" required>
                (travel) by plane.</p>
                <p>8. You and I are from different cultures. You
                <input type="text" name="grammar540-8" placeholder="Responda aqui" required>
                (have) fish for breakfast. I <input type="text" name="grammar540-9" placeholder="Responda aqui" required>
                (have) cheese and bread for breakfast.</p>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="8">
                <input type="hidden" name="atividade_id" value="540">
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


    $("#unidade8grammar537").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar537 input[type="text"]').each(function(index){
                if(($('#unidade8grammar537 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar537 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar537'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar537'), respostas);
            }
        });
    $("#unidade8grammar538").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar538 input[type="text"]').each(function(index){
                if(($('#unidade8grammar538 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar538 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar538'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar538'), respostas);
            }
        });
    $("#unidade8grammar539").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar539 input[type="text"]').each(function(index){
                if(($('#unidade8grammar539 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar539 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar539'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar539'), respostas);
            }
        });
    $("#unidade8grammar540").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar540 input[type="text"]').each(function(index){
                if(($('#unidade8grammar540 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar540 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar540'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar540'), respostas);
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
                    $('#unidade8grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade8grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade8grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
