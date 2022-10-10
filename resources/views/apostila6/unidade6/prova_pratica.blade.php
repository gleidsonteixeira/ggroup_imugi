@extends('layouts.template')
@section('titulo','Unit 6 | Prova Prática I')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade6" data-etapa="prova-pratica">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 21 – Prova Prática I</h5>
			<p>
				Os alunos deveram dar inicio a um projeto de curta metragem fazendo uso do material desenvolvido até então. Apresentação do projeto Amv, Gmv ou Trailer de Filme.
			</p>
			<h5>ATIVIDADES</h5>
			<ol class="unidade_6_5">
					<li>Iniciar Edições dos vídeos do projeto curta metragem usando gravaçoes realizadas até então.</li>
					<li>Os alunos deverão apresentar ou finalizar o projeto Amv. Gmv ou Trailer de Filme.</li>
			</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
