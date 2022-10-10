@extends('layouts.template')
@section('titulo','Unit 30 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade30" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 30</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 30/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO DIE </b>/ of hunger / of thirsty / of cancer</p>
				<p><b>TO FEEL </b>/ sorry / comfortable / happy / sad / free</p>
				<p><b>TO LIE </b>/ to somebody /</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 30/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Clearer</b></p>
				</li>
				<li>
					<p><b>In love</b></p>
				</li>
				<li>
					<p><b>Briefing</b></p>
				</li>
				<li>
					<p><b>Awesome</b></p>
				</li>
				<li>
					<p><b>Both</b></p>
				</li>
				<li>
					<p><b>Spend</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection