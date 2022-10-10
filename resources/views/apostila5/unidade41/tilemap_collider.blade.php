@extends('layouts.template')
@section('titulo','Unit 41 | Tilemap Collider')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade41" data-etapa="tilemap_collider">
			<h3 class="barlow">UNIT 41</h3>
			<h5 class="barlow upper">Tilemap Collider</h5>
            <figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem12.png') }}" alt="guia1" style="width:45%;">
</figure>
<p style="margin-top:20px;">No <strong>Tilemap Renderer</strong> adicione um componente adicional chamado Tilemap Collider 2D. Este
componente é usado para impedir que os objetos passem através dos tiles , principalmente
quando eles servem como plataformas.</p>
<p>O sistema Tilemap é uma ferramenta robusta que ajudará a acelerar o processo de criação de
níveis 2D e permitir a prototipagem rápida.</p>
<p>O sistema remove muito trabalho redundante e repetitivo, permitindo que você crie níveis 2D
rapidamente sem ter que se preocupar em voltar ao início do trabalho para implementar os
limites, regras e animações manualmente.</p>
</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
