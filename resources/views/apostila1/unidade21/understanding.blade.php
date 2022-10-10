@extends('layouts.template')
@section('titulo','Unit 21 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade21" data-etapa="understanding">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <div class="metade">
                    <form id="unidade21understanding59" method="post">
                        <p>
                            1 - Where Was Sarah Originally Born?<br>
                            <input type="text" name="understanding59-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 - What Does Sarah Do Nowadays?<br>
                            <input type="text" name="understanding59-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 - What Kind Of Companies Does She Work For?<br>
                            <input type="text" name="understanding59-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - What Will Sarah’s Classes Be About?<br>
                            <input type="text" name="understanding59-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - When Did She Use To Draw?<br>
                            <input type="text" name="understanding59-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - What Did She Use To Draw For? <br>
                            <input type="text" name="understanding59-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - When Did She Move To The U.s. And Why?<br>
                            <input type="text" name="understanding59-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            8 - How Old Is Sarah?<br>
                            <input type="text" name="understanding59-8" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="21">
                        <input type="hidden" name="atividade_id" value="59">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
                <div class="metade esquerda">
                    <figure>
                        <img src="{{ asset('assets/img/playgo/unit21/U21.jpg') }}" alt="Dica">
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

        $("#unidade21understanding59").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade21understanding59 input[type="text"]').each(function(index){
                if(($('#unidade21understanding59 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade21understanding59 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade21understanding59'), respostas);
            }else{
                enviarAtividade($('#unidade21understanding59'), respostas);
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
                        $('#unidade21understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade21understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade21understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade21understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
