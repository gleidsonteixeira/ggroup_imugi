@extends('layouts.template')
@section('titulo','Unit 25 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade25" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 25</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 25/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO WAKE UP </b>/ early / late</p>
				<p><b>TO WATCH </b>/ movies / the news / series / animes / cartoons</p>
				<p><b>TO WORK </b>/ nine to five / 24-7 / shifts / full time / part time</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 25/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>

			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>AGREE</b></p>
				</li>
				<li>
					<p><b>APPOINTMENT</b></p>
				</li>
				<li>
					<p><b>ANKLE</b></p>
				</li>
				<li>
					<p><b>BIT</b></p>
				</li>
				<li>
					<p><b>ABSENT</b></p>
				</li>
				<li>
					<p><b>AWARE</b></p>
				</li>
				<li>
					<p><b>TAKE OVER</b></p>
				</li>
				<li>
					<p><b>GO ON</p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
