@extends('layouts.template')
@section('titulo','Unit 20 | After Effects CC - ROTOSCOPIA E MATTE PAINTING')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade20" data-etapa="matte_painting">
			<h3 class="barlow">UNIT 20 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 23 - MATTE PAINTING</h5>

			<p>Fazer atividade baseado nos capítulos passados de Matte Painting, incorporando personagens a um cenário.</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>01.</b> Aplicar efeito de Matte Painting para compor um vídeo para inclusão de pessoas em cenário fictício.</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
