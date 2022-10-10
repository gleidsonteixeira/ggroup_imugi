@extends('layouts.template')
@section('titulo','Unit 29 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade29" data-etapa="listening">
            <h3 class="barlow">UNIT 29</h3>
            <h5 class="barlow">5 - LISTENING</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 29/06_LISTENING/LISTENING_29.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A -  Watch the videos and debate with your friends what the 4Th is all about?</h5>
            <iframe class="metade esquerda" width="616" height="347" src="https://www.youtube.com/embed/v9rZOa3CUC8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="metade direita" width="616" height="347" src="https://www.youtube.com/embed/SCGV1tNBoeU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="clear"></div>
            <form id="unidade29listening699" method="post" style="margin-top:32px">
                <textarea name="listening699-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                <div class="clear"></div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="29">
                <input type="hidden" name="atividade_id" value="699">
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>

            <h5 class="barlow" style="margin-top:16px"><b>Text:</b></h5>
            <h5 class="barlow">10 Essential skills for the 4th Industrial Revolution</h5>
            <p>Wednesday, April 17, 2019 - 09:44</p>
            <p>There has been much debate surrounding the 4th industrial revolution and its impact on the workplace.</p>
            <p>The question of whether or not robots will replace human beings has been at the forefront of this discussion.</p>
            <p>
                While experts have warned that there will be an increase in job automation and artificial
                intelligence, specialists agree that human beings will never be made completely obsolete.
                However there are certain skills that will grow in importance as technology becomes more
                entrenched in our everyday lives.
            </p>
            <p>
                According to the World Economic Forum ‘the skill sets required in both old and new
                occupations will change in most industries and transform how and where people work.”
                In the video ‘Ten Skills You Need to Thrive in the Fourth Industrial Revolution’ we reflect on
                the skills required for these future occupations.
            </p>
            <p>
                These top ten skills include: Complex problem solving, Critical thinking, Creativity, People
                management, Coordinating with others, Emotional intelligence, Judgement and decision
                making, Service orientation, Negotiation, Cognitive Flexibility
            </p>

            <p>
                Emotional Intelligence is key
                Most of these capabilities are expressions of emotional intelligence which will be one of the
                defining characteristics of the 21st century employee.
                “Emotional intelligence will become one of the top skills needed by all.”
                As machines take over technical operations employers will begin to place greater value on
                soft skills and tasks that cannot be performed by robots.
            </p>

            <p>Get Ready!</p>
            <p>“Change won’t wait for us to be proactive in upskilling...”</p>
            <p>We need to start training now so that we can benefit from the fourth industrial revolution</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
    console.log(window.location.pathname);

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade29listening699").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade29listening699 textarea').attr("name") + '":"' + $('#unidade29listening699 textarea').val() + '"}';
        if ($('#unidade29listening699 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade29listening699'), respostas);
        } else {
            enviarAtividade($('#unidade29listening699'), respostas);
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
                    $('#unidade29listening' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade29listening' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade29listening' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade29listening' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade29listening' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade29listening' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
