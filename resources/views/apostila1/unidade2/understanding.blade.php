@extends('layouts.template')
@section('titulo','Unit 2 | understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade2" data-etapa="understanding">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions, according to what you have learned in the unit.</h5>
                <div class="metade">
                    <form id="unidade2understanding10" method="post">
                        <p>
                            1 - When was Photoshop developed?<br>
                            <input type="text" name="understanding10-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 - Who created Photoshop?<br>
                            <input type="text" name="understanding10-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 - Do João and Bruna use Photoshop?<br>
                            <input type="text" name="understanding10-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - Is Bruna a Photographer?<br>
                            <input type="text" name="understanding10-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - Who is Photoshop important to? <br>
                            <input type="text" name="understanding10-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - Why does Bruna need Photoshop?<br>
                            <input type="text" name="understanding10-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - Why does João need Photoshop?<br>
                            <input type="text" name="understanding10-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            8 - What is Bruna’s profession?<br>
                            <input type="text" name="understanding10-8" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            9 - Why is Photoshop important today?<br>
                            <input type="text" name="understanding10-9" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            10 -  Is it possible to use Photoshop to edit videos?<br>
                            <input type="text" name="understanding10-10" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="2">
                        <input type="hidden" name="atividade_id" value="10">
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

        $("#unidade2understanding10").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade2understanding10 input[type="text"]').each(function(index){
                if(($('#unidade2understanding10 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2understanding10 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2understanding10'), respostas);
            }else{
                enviarAtividade($('#unidade2understanding10'), respostas);
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
                        $('#unidade2understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade2understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade2understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
