@extends('layouts.template')
@section('titulo','Unit 42 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade42" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 42</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 42/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO ARRIVE </b>/ early / on time / late / at home / at work</p>
				<p><b>TO CARRY </b>/ a book / on a conversation / on doing something</p>
				<p><b>TO CATCH </b>/ a bus / a train / a cold</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 42/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Came up</b></p>
				</li>
				<li>
					<p><b>Filter</b></p>
				</li>
				<li>
					<p><b>According</b></p>
				</li>
				<li>
					<p><b>Hints</b></p>
				</li>
				<li>
					<p><b>Skills</b></p>
				</li>
				<li>
					<p><b>Master</b></p>
				</li>
				<li>
					<p><b>Advice</b></p>
				</li>
				<li>
					<p><b>Made up</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>
@endsection
