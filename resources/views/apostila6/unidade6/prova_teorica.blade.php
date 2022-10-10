@extends('layouts.template')
@section('titulo','Unit 6 | ProvaTeórica')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade6" data-etapa="prova-teorica">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 24 – ProvaTeórica</h5>
			<p>
				Aplicar prova teórica baseada no conteúdo desenvolvido durante o curso e com base na revisão da aula anterior.
			</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
