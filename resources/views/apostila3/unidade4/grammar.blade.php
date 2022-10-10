@extends('layouts.template')
@section('titulo','Unit 04 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade4" data-etapa="grammar">
				<h3 class="barlow">UNIT 4 </h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
                    <source src="{{ asset('assets/audio/apostila3/LESSON 04/03_GRAMMAR/GRAMMAR_04.mp3') }}" type="audio/mp3">
                </audio>
                <div class="clear"></div>
                <div class="center-align" style="margin-top:46px">
                    <p class="contentVerde">Call attention to important steps - Reminders<p>
                </div>
                <h5 class="barlow" style="margin-top:16px">A -  EXPLAINING PROCEDURES: REMINDERS</h5>
                <div class="espacamento">
                    <p><b>Don’t forget to…</b></p>
                    <p><b>Remember to…</b></p>
                    <p><b>Bear in mind…</b></p>
                    <p><b>Keep in mind that…</b></p>
                    <p><b>It’s important to…</b></p>
                    <p><b>Make sure you...</b></p>
                </div>

                <h5 class="barlow" style="margin-top: 32px"><b>EXERCISES:</b></h5>
                <h5 class="barlow">1 - Take a look at the procedures you wrote about in the previous class and add some
                reminders about critical steps that can’t be forgotten.</h5>
                <form id="unidade4grammar515" method="post">
                    <textarea name="grammar515-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="4">
                    <input type="hidden" name="atividade_id" value="515">
                    <div class="clear"></div>
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">2 - In your opinion, how can a person be prepared to deal with work and studies? Think
                about it and share your ideas with the class.</h5>
                <form id="unidade4grammar516" method="post">
                    <textarea name="grammar516-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="4">
                    <input type="hidden" name="atividade_id" value="516">
                    <div class="clear"></div>
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

        $("#unidade4grammar515").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade4grammar515 textarea').attr("name")+'":"'+$('#unidade4grammar515 textarea').val()+'"}';
            if($('#unidade4grammar515 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade4grammar515'), respostas);
            }else{
                enviarAtividade($('#unidade4grammar515'), respostas);
            }
        });
        $("#unidade4grammar516").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade4grammar516 textarea').attr("name")+'":"'+$('#unidade4grammar516 textarea').val()+'"}';
            if($('#unidade4grammar516 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade4grammar516'), respostas);
            }else{
                enviarAtividade($('#unidade4grammar516'), respostas);
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
                        $('#unidade4grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade4grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade4grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade4grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);

                }
                    $('#unidade4grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade4grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(formId, respostas){
            var atividade = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : formId.find('input[name="atividade_id"]').val(),
                "unidade_id" : formId.find('input[name="unidade_id"]').val()
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: atividade,
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
