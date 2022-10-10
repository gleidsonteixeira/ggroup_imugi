@extends('layouts.template')
@section('titulo','Unit 16 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade16" data-etapa="grammar">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit16/grammar/completo.ogg') }}" type="audio/ogg">
                </audio> 
                <div class="clear"></div>
                <div class="espacamento">
				    <h5 class="barlow">Would</h5>
                    <p>Would is used to express hypothetical ideas.</p>
                    <p>Structure:</p>
                    <p><b>Affirmative:</b> SUBJECT + WOULD + VERB</p>
                    <p>EXAMPLE: I WOULD LIKE TO VISIT PARIS ONE DAY.</p>
                    <p><b>Interrogative:</b> WOULD + SUBJECT + VERB</p>
                    <p>EXAMPLE: WOULD YOU LIKE TO GO WITH ME TO THE GAME?</p>
                    <p><b>Negative:</b> SUBJECT + WOULD + NOT + VERB</p>
                    <p>EXAMPLE: I WOULDN’T LIKE TO LIVE THERE.</p>             
                </div>
				<h5 class="barlow" style="margin-top: 16px">A - Create questions for the answers using would.</h5>
				<form class="metade" id="unidade16grammar45" method="post">
                    <p><b>1 - Question: </b><input type="text" name="grammar45-1" class="full left-align" placeholder="Responda aqui" required></p>
                    <p style="margin-bottom:16px;"><b>Answer: </b>Yes, I Would Love To Go With You To The Movies.</p>
                    <p><b>2 - Question: </b><input type="text" name="grammar45-2" class="full left-align" placeholder="Responda aqui" required></p>
                    <p style="margin-bottom:16px;"><b>Answer: </b>No, I’m Sorry. I Don’t Drink.</p>
                    <p><b>3 - Question: </b><input type="text" name="grammar45-3" class="full left-align" placeholder="Responda aqui" required></p>
                    <p style="margin-bottom:16px;"><b>Answer: </b>No, I Don’t Think They Would Need Help With The Exercise.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="45">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">B - Choose the correct helping verb for each sentence.</h5>
				<form class="metade" id="unidade16grammar46" method="post">
                    <p><b>1 - Question: </b>Would You Like To Live In Canada?</p>
                    <p style="margin-bottom:16px;"><b>Answer: </b><input type="text" name="grammar46-1" class="full left-align" placeholder="Responda aqui" required></p>
                    <p><b>2 - Question: </b>What Would You Buy With A Million Dollars?</p>
                    <p style="margin-bottom:16px;"><b>Answer: </b><input type="text" name="grammar46-2" class="full left-align" placeholder="Responda aqui" required></p>
                    <p><b>3 - Question: </b>Where Would You Like To Visit?</p>
                    <p style="margin-bottom:16px;"><b>Answer: </b><input type="text" name="grammar46-3" class="full left-align" placeholder="Responda aqui" required></p>                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="46">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade16grammar45").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade16grammar45 input[type="text"]').each(function(index){
                if(($('#unidade16grammar45 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade16grammar45 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade16grammar45'), respostas);
            }else{
                enviarAtividade($('#unidade16grammar45'), respostas);
            }
        });

        $("#unidade16grammar46").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade16grammar46 input[type="text"]').each(function(index){
                if(($('#unidade16grammar46 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade16grammar46 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade16grammar46'), respostas);
            }else{
                enviarAtividade($('#unidade16grammar46'), respostas);
            }
        });

                
        function checkAtividade(atividade_id){
            request = $.ajax({
                url: window.location.pathname+'/respostasCheck/'+atividade_id,
                type: 'get',
                error: function(){
                    console.log("Erro de retorno de dados.");
                }
            });
            request.done(function(response){
                if(response == 0){
                    console.log("não veio nada");
                }else{
                    var objeto = JSON.parse(response[0].resposta_respostas);
                    var chaves = Object.keys(objeto);
                    var respostas = Object.values(objeto);
                    for(j = 0; j < respostas.length; j++){
                        $('#unidade16grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade16grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade16grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade16grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : formId.find('input[name="atividade_id"]').val(),
                "unidade_id" : formId.find('input[name="unidade_id"]').val()
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

        function atualizarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_id" : formId.find('input[name="resposta_id"]').val(),
                "resposta_respostas" : respostas
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

    </script>

@endsection
