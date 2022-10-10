@extends('layouts.template')
@section('titulo','Unit 26 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade26" data-etapa="understanding">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <div class="metade">
                    <form id="unidade26understanding68" method="post">
                        <p>
                            1 - What Three Tools Is The Review About?<br>
                            <input type="text" name="understanding68-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 - When Was Sarah Thinking About What To Teach In The Review?<br>
                            <input type="text" name="understanding68-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 - What Did Sarah Use To Do When She Was Young?<br>
                            <input type="text" name="understanding68-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - When Did Sarah Use To Make Paintings?<br>
                            <input type="text" name="understanding68-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - What Does Sarah Want The Students To Do?<br>
                            <input type="text" name="understanding68-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - Who Recommends The Brush Tool?<br>
                            <input type="text" name="understanding68-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - Why Does Marcelo Think Brush Tool Is The Best For The Sky?<br>
                            <input type="text" name="understanding68-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            8 - How Does Kylie Think The Sky Should Be Detailed?<br>
                            <input type="text" name="understanding68-8" class="full left-align" placeholder="Responda aqui" required>
                        </p>   
                        <p>
                            9 - Where Does Mariana Want To Draw A Line In The Painting?<br>
                            <input type="text" name="understanding68-9" class="full left-align" placeholder="Responda aqui" required>
                        </p>   
                        <p>
                            10 - Why Does Mariana Think Pen Tool Is Ideal For The Horizon?<br>
                            <input type="text" name="understanding68-10" class="full left-align" placeholder="Responda aqui" required>
                        </p>                  
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="26">
                        <input type="hidden" name="atividade_id" value="68">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
                <div class="metade esquerda">
                    <figure>
                        <img src="{{ asset('assets/img/playgo/unit26/U26.jpg') }}" alt="Dica">
                    </figure>
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

        $("#unidade26understanding68").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade26understanding68 input[type="text"]').each(function(index){
                if(($('#unidade26understanding68 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade26understanding68 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade26understanding68'), respostas);
            }else{
                enviarAtividade($('#unidade26understanding68'), respostas);
            }
        });

        function checkAtividade(atividade_id){
            console.log(atividade_id);
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
                        $('#unidade26understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade26understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade26understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade26understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
