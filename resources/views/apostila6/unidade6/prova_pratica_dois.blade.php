@extends('layouts.template')
@section('titulo','Unit 6 | Prova Prática II')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade6" data-etapa="prova-pratica-dois">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 22 – Prova Prática II</h5>
			<p>
				Os alunos deveram dar continuidade a um projeto de curta metragem aplicando coneitos e técnicas abordados em todo o curso
			</p>
			<h5>ATIVIDADES</h5>
				<ol class="unidade_6_5">
					<li>Continuar desenvolvimento de projeto curta metragem.</li>
				</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
