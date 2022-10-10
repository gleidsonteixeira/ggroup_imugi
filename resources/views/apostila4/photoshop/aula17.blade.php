@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 17 – Avaliação Teórica')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula17">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlaw">Aula 17 – Avaliação Teórica</h5>
			<p><b>Avaliação aplicada pelo Instrutor baseada no conteúdo abordado durante o curso de
			Adobe Photoshop.</b></p>						
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
