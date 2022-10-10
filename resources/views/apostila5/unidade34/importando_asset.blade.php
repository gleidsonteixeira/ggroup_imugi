@extends('layouts.template')
@section('titulo','Unit 34 | Importando Asset')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade34" data-etapa="importando_asset">
			<h3 class="barlow">UNIT 34</h3>
			<h5 class="barlow upper">Importando Asset</h5>
				<p style="margin-top:20px;">Para carregar nossos assets do Asset Store no projeto, precisamos clicar no Botão
de download no ativo escolhido na Asset Store.</p>
<p>A caixa pop-up Importando pacote aparecerá dentro do editor do Unity, permitindo-nos marcar
os assets que gostaríamos de importar. Assim que terminarmos de selecionar, simplesmente
clique no botão Importar para importar os assets para o nosso projeto.</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
