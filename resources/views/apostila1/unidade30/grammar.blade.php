@extends('layouts.template')
@section('titulo','Unit 30 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade30" data-etapa="grammar">
				<h3 class="barlow">UNIT 30 - VIDEO EFFECTS</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit30/grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Word Order</h5>
                    <p>Notice How, In Questions, The Preposition Usually Goes To The End Of The Sentence.</p>
                    <p><b>Question:</b> Where Are You From?</p>
                    <p><b>Answer:</b> I Am From Brazil</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Create questions for the answers.</h5>
                <form id="unidade30grammar75" method="post">
                    <div class="metade">
                        <p> 
                            <p>1. <b>Question:</b> <input type="text" name="grammar75-1" class="left-align full" placeholder="Responda aqui" required/></p>
                            <p><b>Answer:</b> I Am Afraid Of Spiders.</p>
                        </p>
                        <p> 
                            <p>2. <b>Question:</b> <input type="text" name="grammar75-2" class="left-align full" placeholder="Responda aqui" required/></p>
                            <p><b>Answer:</b>  I Live With My Family.</p>
                        </p>
                        <p> 
                            <p>3. <b>Question:</b> <input type="text" name="grammar75-3" class="left-align full" placeholder="Responda aqui" required/></p>
                            <p><b>Answer:</b>  I Work For Myself.</p>
                        </p>
                        <p> 
                            <p>4. <b>Question:</b> <input type="text" name="grammar75-4" class="left-align full" placeholder="Responda aqui" required/></p>
                            <p><b>Answer:</b> I’m Looking At The Bird.</p>
                        </p>
                        <p> 
                            <p>5. <b>Question:</b> <input type="text" name="grammar75-5" class="left-align full" placeholder="Responda aqui" required/></p>
                            <p><b>Answer:</b>  She’s Waiti ng For Her Friend To Arrive.</p>
                        </p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="30">
                    <input type="hidden" name="atividade_id" value="75">
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

        $("#unidade30grammar75").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade30grammar75 input[type="text"]').each(function(index){
                if(($('#unidade30grammar75 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade30grammar75 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade30grammar75'), respostas);
            }else{
                enviarAtividade($('#unidade30grammar75'), respostas);
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
                        $('#unidade30grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade30grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade30grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade30grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
