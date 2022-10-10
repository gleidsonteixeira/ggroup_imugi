@extends('layouts.template')
@section('titulo','Unit 6 | Revisao Prova')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade6" data-etapa="revisao-prova">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 22 – Revisao Prova</h5>
			<p>
				Revisão direcionada abordando os tópicos inclusos na prova teórica.
			</p>
			<h5>ATIVIDADES</h5>
				<ol class="unidade_6_5">
					<li>Desenvolver práticas rápidas dos tópicos que os alunos apresentarem maiores dúvidas.</li>
				</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
