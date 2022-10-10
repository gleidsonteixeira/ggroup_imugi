@extends('layouts.template')
@section('titulo','Unit 2 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade2" data-etapa="atividades">
			<h3 class="barlow">UNIT 2</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form method="post" class="metade">
					<p>1 - Abra o cinema 4D. 
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
					<p>
						<b>Dica:</b> nesse momento você pode testar o funcionamento básico da sua placa, pressione a tecla
						fixar e observe se há algum daley. Se houver, o seu computador esta fazendo muita força para
						esse programa funcionar!
					</p>
                    <p>2 - Através da barra de atalhos faça a inserção de 4 formas geométricas diferentes.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true"> 
					</p>
					<p>3 - Usando as ferramentas de seleção, alinhe todos os objetos.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">						
					</p>
					<p>4 - Novamente usando a barra de atalhos, selecione os ítens e faça sucessivas trocas de
						posição, até que todos tenham estado em todas as posições.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
					<p>5 - Altere o tamanho dos seus objetos e os coloque em escalas, do maior para o menor.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
                </form>
        </div>
    </div>    
</main>

<script>
	activeMenu();
</script>

@endsection
