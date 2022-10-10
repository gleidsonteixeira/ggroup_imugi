@extends('layouts.template')
@section('titulo','Unit 31 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade31" data-etapa="understanding">
				<h3 class="barlow">UNIT 31 - VIDEO TRANSITION</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions, according to what you have learned in the unit.</h5>
                <div class="metade">
                    <form id="unidade31understanding78" method="post">
                        <p>
                            1 -  Who Knew The Answer To Victor’s First Question?<br>
                            <input type="text" name="understanding78-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 -  What Does Victor Think About The Name Of The Tool?<br>
                            <input type="text" name="understanding78-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 -  Why Does Laura Consider It To Be A Great Tool?<br>
                            <input type="text" name="understanding78-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - Where Is It Located?<br>
                            <input type="text" name="understanding78-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - What Is The Tool Used For?<br>
                            <input type="text" name="understanding78-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - Where Can You Add A Transition Effect?<br>
                            <input type="text" name="understanding78-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - In Addition To Videos, What Else Can You Add This Effect To?<br>
                            <input type="text" name="understanding78-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="31">
                        <input type="hidden" name="atividade_id" value="78">
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

        $("#unidade31understanding78").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade31understanding78 input[type="text"]').each(function(index){
                if(($('#unidade31understanding78 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade31understanding78 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade31understanding78'), respostas);
            }else{
                enviarAtividade($('#unidade31understanding78'), respostas);
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
                        $('#unidade31understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade31understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade31understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade31understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
