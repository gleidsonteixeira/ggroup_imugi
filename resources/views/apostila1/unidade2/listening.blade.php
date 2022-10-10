@extends('layouts.template')
@section('titulo','Unit 2 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade2" data-etapa="listening">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit2/listining/listining_a.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to the track and fill in the blanks with the words you hear.</h5>
                <div class="espacamento">
                    <p>Photoshop was <b>developed</b> in 1987 by two brothers. The <b>software</b> is very important for <b>graphic</b> designing. You can <b>create</b> everything you imagine if you understand the program and use your creativity.</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to the passage and write the subject of the audio.</h5>
                <div class="espacamento">
                    <p>Did you know that you can edit videos with Adobe’s image-editing program? It is not necessary to study other programs because Photoshop can do simple editing and transformations.</p>
                </div>
                <div class="metade">
                    <form id="unidade2listening9" method="post">
                        <p>1 - The creation of Photoshop <input class="full left-align" type="text" name="listening9-1" placeholder="Responda aqui" required></p>
                        <p>2 - The professionals who use Photoshop <input class="full left-align" type="text" name="listening9-2" placeholder="Responda aqui" required></p>
                        <p>3 - The tools in Photoshop <input class="full left-align" type="text" name="listening9-3" placeholder="Responda aqui" required></p>
                        <p>4 - The video-editing features of Photoshop <input class="full left-align" type="text" name="listening9-4" placeholder="Responda aqui" required></p>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="2">
                        <input type="hidden" name="atividade_id" value="9">
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

        $("#unidade2listening9").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade2listening9 input[type="text"]').each(function(index){
                if(($('#unidade2listening9 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2listening9 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2listening9'), respostas);
            }else{
                enviarAtividade($('#unidade2listening9'), respostas);
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
                        $('#unidade2listening'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2listening'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade2listening'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade2listening'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
