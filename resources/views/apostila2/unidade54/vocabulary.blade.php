@extends('layouts.template')
@section('titulo','Unit 54 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade54" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 54</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 54/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO SERVE </b>/ breakfast / lunch / dinner / somebody</p>
				<p><b>TO STATE </b>/ an opinion / information</p>
				<p><b>TO CHECK </b>/ in / out / the information / the map</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 54/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 36px">
				<li>
					<p><b>Hard</b></p>
				</li>
				<li>
					<p><b>Budget Chances</b></p>
				</li>
				<li>
					<p><b>Star</b></p>
				</li>
				<li>
					<p><b>Blockbuster</b></p>
				</li>
				<li>
					<p><b>Key</b></p>
				</li>
				<li>
					<p><b>Unforgettable Touching</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection