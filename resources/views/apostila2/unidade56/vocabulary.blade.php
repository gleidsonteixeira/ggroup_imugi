@extends('layouts.template')
@section('titulo','Unit 56 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade56" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 56</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 56/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO SMELL </b>/ good / awful </p>
				<p><b>TO SPEND </b>/ money / time / energy</p>
				<p><b>TO CELEBRATE </b>/ someone’s birthday / a marriage / an anniversary</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 56/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 36px">
				<li>
					<p><b>Concise</b></p>
				</li>
				<li>
					<p><b>Aware constraints</b></p>
				</li>
				<li>
					<p><b>Fits</b></p>
				</li>
				<li>
					<p><b>Into</b></p>
				</li>
				<li>
					<p><b>Guidance</b></p>
				</li>
				<li>
					<p><b>Almost Sequencing</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection