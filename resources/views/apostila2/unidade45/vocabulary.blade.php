@extends('layouts.template')
@section('titulo','Unit 45 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade45" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 45</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 45/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top:16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO CANCEL </b>/ a meeting / a date</p>
				<p><b>TO CRY </b>/ TO BREAK INTO TEARS / TO WEEP</p>
				<p><b>TO FALL </b>/ in love / from a tree / dow><p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 45/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Grampa</b></p>
				</li>
				<li>
					<p><b>Fiction</b></p>
				</li>
				<li>
					<p><b>Changing</b></p>
				</li>
				<li>
					<p><b>Slow</b></p>
				</li>
				<li>
					<p><b>Avoided</b></p>
				</li>
				<li>
					<p><b>Minds</b></p>
				</li>
				<li>
					<p><b>Mediate</b></p>
				</li>
				<li>
					<p><b>disagreement</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>
@endsection
