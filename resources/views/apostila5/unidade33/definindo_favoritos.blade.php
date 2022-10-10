@extends('layouts.template')
@section('titulo','Unit 33 | Definindo favoritos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade33" data-etapa="definindo_favoritos">
			<h3 class="barlow">UNIT 33</h3>
			<h5 class="barlow upper">Definindo favoritos</h5>
			<p>
			Assets usados com frequência podem ser definidos como favoritos clicando no botão estrela.
Para um acesso rápido e fácil, podemos pesquisá-los ou filtrá-los no menu suspenso Favoritos
no painel esquerdo.
			</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
