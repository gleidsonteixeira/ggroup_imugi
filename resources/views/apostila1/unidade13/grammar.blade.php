@extends('layouts.template')
@section('titulo','Unit 13 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade13" data-etapa="grammar">
				<h3 class="barlow">UNIT 13 - LAYER STYLE</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit13/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                   <h5 class="barlow">Simple past (REGULAR VERBS)</h5>
                   <p>The simple past is used to talk about an isolated action in the past.</p>
                   <p>Structure</p>
                   <p><b>Affirmative:</b>  SUBJECT + VERB – ED</p>
                   <p>EXAMPLE: I CREATED A CUSTOM FONT</p>
                   <p><b>Interrogative:</b> DID + SUBJECT + VERB</p>
                   <p>EXAMPLE: DID YOU CREATE A CUSTOM FONT?</p>
                   <p><b>Negative:</b>  SUBJECT + DID + NOT + VERB</p>
                   <p>EXAMPLE: I DIDN’T CREATE A CUSTOM FONT.</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Change the sentences to the other two forms not given.</h5>
                <form id="unidade13grammar37" method="post">
                    <p>
                        1 - <b>Affirmative:</b><br>
                        She worked yesterday.
                    </p>
                    <div class="metade">
                        <p>
                            <b>Interrogative:</b><br>
                            <input type="text" name="grammar37-1" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                        <p>
                            <b>Negative:</b><br>
                            <input type="text" name="grammar37-2" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="metade">
                        <p>
                            2 - <b>Affirmative:</b><br>
                            <input type="text" name="grammar37-3" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <p>
                        <b>Interrogative:</b><br>
                        Did you call me?
                    </p>
                    <div class="metade">
                        <p>
                            <b>Negative:</b><br> 
                            <input type="text" name="grammar37-4" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="metade">
                        <p>
                            3 - <b>Affirmative:</b><br>
                            <input type="text" name="grammar37-5" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                        <p>
                            <b>Interrogative:</b><br>
                            <input type="text" name="grammar37-6" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <p>
                        <b>Negative:</b><br>
                        We didn’t listen to the teacher.
                    </p>
                    <p>
                        4 - <b>Affirmative:</b><br>
                        They used photoshop to make the banner.
                    </p>
                    <div class="metade">
                        <p>
                            <b>Interrogative:</b><br>
                            <input type="text" name="grammar37-7" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="metade">
                        <p>
                            <b>Negative:</b><br>
                            <input type="text" name="grammar37-8" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="metade">
                        <p>
                            5 - <b>Affirmative:</b><br>
                            <input type="text" name="grammar37-9" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <p>
                        <b>Interrogative:</b><br>
                        Did you need help with the editing?
                    </p>
                    <div class="metade">
                        <p>
                            <b>Negative:</b><br>
                            <input type="text" name="grammar37-10" class="left-align full" placeholder="Responda aqui" required/>
                        </p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="13">
                    <input type="hidden" name="atividade_id" value="37">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade13grammar37").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade13grammar37 input[type="text"]').each(function(index){
                if(($('#unidade13grammar37 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade13grammar37 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade13grammar37'), respostas);
            }else{
                enviarAtividade($('#unidade13grammar37'), respostas);
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
                        $('#unidade13grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade13grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade13grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade13grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
