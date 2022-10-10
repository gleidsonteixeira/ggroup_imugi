@extends('layouts.template')
@section('titulo','Unit 27 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade27" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 27</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 27/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO EXPLAIN </b>/ a problem / a situation / yourself</p>
				<p><b>TO LISTEN </b>/ to music / a conversation / a friend / to somebody / a podcast</p>
				<p><b>TO PAY </b>/ the bills / attention / a visit</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 27/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div style="margin-top: 16px">
				<ul class="lista-inline upper">
					<li>
						<p><b>By the way</b></p>
					</li>
					<li>
						<p><b>Ankle</b></p>
					</li>
					<li>
						<p><b>Healed</b></p>
					</li>
					<li>
						<p><b>Avoid</b></p>
					</li>
					<li>
						<p><b>Standing</b></p>
					</li>
					<li>
						<p><b>Prevent</b></p>
					</li>
					<li>
						<p><b>Injuries</b></p>
					</li>
					<li>
						<p><b>Go on</b></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection