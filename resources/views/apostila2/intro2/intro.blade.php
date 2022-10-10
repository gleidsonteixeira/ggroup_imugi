@extends('layouts.template')
@section('titulo','Dominating | Introduction')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="intro2" data-etapa="intro">
			<div class="bem-vindo">
				<figure class="banner">
					<img src="{{ asset('assets/img/dominating/intro/bg-intro.png') }}" alt="">
				</figure>
				<h3 class="barlow center-align">Seja Bem Vindo ao Dominating</h3>

				<div class="bem-vindo-conteudo">
					<p>Curso projetado para artistas ou amadores que procuram treinamento de efeitos gráficos e visuais ensinado interdisciplinarmente com a língua inglesa.</p>
					<p>Vivemos em um mundo digital, onde a interatividade está cada vez mais presente na vida das pessoas. Com as ferramentas certas do CG você irá dominar esse universo.</p>
					<p>Inglês é a lingua mais falada do mundo por não nativos. 70% das empresas internacionais do Brasil buscam profissionais que falem inglês podendo oferecer salários de 30% à 50% maior ao daqueles sem o idioma.</p>
				</div>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>
@endsection
