@extends('layouts.template')
@section('titulo','Unit 8 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade8" data-etapa="grammar">
				<h3 class="barlow">UNIT 08 - REVIEW OF SOPHIA’S CLASSES</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit8/grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <table class="metade center-align">
                    <tr>
                        <td colspan="4"><h5 class="barlow">Negative form of the simple present</h5></td>
                    <tr>
                        <td><p>I don´t</p></td>
                        <td rowspan="4" style="vertical-align: middle;"><p>+ Verb</p></td>
                        <td><p>He doesn´t</p></td>
                        <td rowspan="4" style="vertical-align: middle;"><p>+Verb</p></td>
                    </tr>
                    <tr>
                        <td><p>You don´t</p></td>
                        <td><p>She doesn´t</p></td>
                    </tr>
                    <tr>
                        <td><p>We don´t</p></td>
                        <td><p>It doesn´t</p></td>
                    </tr>
                    <tr>
                        <td><p>They don´t</p></td>
                        <td></td>
                    </tr>
                </table>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences with the correct helping verb in the negative form.</h5>
				<form id="unidade8grammar26" method="post">
                    <p>1 - Sarah and Mike <input type="text" name="grammar26-1" placeholder="Responda aqui" required/> know how to use burn tool.</p>
                    <p>2 - John <input type="text" name="grammar26-2" placeholder="Responda aqui" required/> work with Photography.</p>
                    <p>3 - Nick and I <input type="text" name="grammar26-3" placeholder="Responda aqui" required/>  utilize Dodge tool.</p>
                    <p>4 - Brian <input type="text" name="grammar26-4" placeholder="Responda aqui" required/> need to use Spot Healing Brush on his photos.</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="8">
                    <input type="hidden" name="atividade_id" value="26">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                
                <h5 class="barlow">B - Take the given sentences and write them in the other two forms.</h5>
                    <form id="unidade8grammar27" method="post">
                        <p>1 - <b>Affirmative:</b></p>
                        <p>She works with photography.</p>
                        <div class="metade">
                            <p>
                                <b>Interrogative:</b>
                                <input type="text" name="grammar27-1" class="left-align full" placeholder="Responda aqui" required/>
                            </p>
                            <p>
                                <b>Negative:</b>
                                <input type="text" name="grammar27-2" class="left-align full" placeholder="Responda aqui" required/>
                            </p>
                        </div>
                        <div class="metade">
                            <p>
                                2 - <b>Affirmative:</b> 
                                <input type="text" name="grammar27-3" class="left-align full" placeholder="Responda aqui" required/>
                            </p>
                        </div>
                        <p><b>Interrogative:</b></p>
                        <p>Do Caio and Sarah have an editing software ?</p>
                        <div class="metade">
                            <p>
                                <b>Negative:</b> 
                                <input type="text" name="grammar27-4" class="left-align full" placeholder="Responda aqui" required/>
                            </p>
                        </div>
                        <div class="metade">
                            <p>
                                3 - <b>Affirmative:</b> 
                                <p><input type="text" name="grammar27-5" class="left-align full" placeholder="Responda aqui" required/></p>
                            </p>
                            <p>
                                <b>Interrogative:</b> 
                                <p><input type="text" name="grammar27-6" class="left-align full" placeholder="Responda aqui" required/></p>
                            </p>
                        </div>
                        <p><b>Negative:</b></p>
                        <p>They don´t want to study.</p>
                        <div class="clear"></div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="8">
                        <input type="hidden" name="atividade_id" value="27">
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

        $("#unidade8grammar26").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar26 input[type="text"]').each(function(index){
                if(($('#unidade8grammar26 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar26 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar26'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar26'), respostas);
            }
        });

        $("#unidade8grammar27").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar27 input[type="text"]').each(function(index){
                if(($('#unidade8grammar27 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar27 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar27'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar27'), respostas);
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
                        $('#unidade8grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade8grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade8grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade8grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
