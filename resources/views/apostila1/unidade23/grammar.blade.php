@extends('layouts.template')
@section('titulo','Unit 23 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade23" data-etapa="grammar">
				<h3 class="barlow">UNIT 23 - BRUSHES</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit23/grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Relative pronouns</h5>
                    <p>A Relative Pronoun Is Used To Connect A Clause Or Phrase To A Noun Or Pronoun. Who – Used When Speaking Of People.</p>
                    <p>Which- Used When Speaking About Things. (Relative Pronouns Are Not Necessary Before Subject Pronouns)</p>                                               
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences using the propper relative pronoun. Leave the space in blank if no pronoun is necessary.</h5>
                <form id="unidade23grammar62" method="post">
                    <p>1 - She’s The Woman <input type="text" name="grammar62-1" placeholder="Responda aqui" required> Lives Next Door</p>
                    <p>2 - I Understand How To Use The Tool <input type="text" name="grammar62-2" placeholder="Responda aqui" required> Was Taught In Class.</p>
                    <p>3 - This Is The Cellphone <input type="text" name="grammar62-3" placeholder="Responda aqui" required> I Use For Work.</p>
                    <p>4 - He’s The One <input type="text" name="grammar62-4" placeholder="Responda aqui" required> Called You Yesterday.</p>
                    <p>5 - I Selected The Image <input type="text" name="grammar62-5" placeholder="Responda aqui" required> Was Going To Be Published.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="23">
                    <input type="hidden" name="atividade_id" value="62">
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

        $("#unidade23grammar62").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade23grammar62 input[type="text"]').each(function(index){
                if(($('#unidade23grammar62 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade23grammar62 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade23grammar62'), respostas);
            }else{
                enviarAtividade($('#unidade23grammar62'), respostas);
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
                        $('#unidade23grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade23grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade23grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade23grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
            console.log(resposta);
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
