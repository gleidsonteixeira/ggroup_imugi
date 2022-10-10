@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 16 – Avaliação Prática')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula16">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlaw">Aula 16 – Avaliação Prática</h5>
			<p><b>Sugestões para trabalho Final:</b></p>
			<p>• Trabalho Final de Composição Avançada</p>
			<p>• Trabalho Final de Pintura Digital</p>
			<p>• Trabalho Final de Animação</p>
			<p>• Trabalho Final de Mockup</p>			
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
