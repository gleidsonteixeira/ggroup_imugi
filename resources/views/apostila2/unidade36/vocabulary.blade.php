@extends('layouts.template')
@section('titulo','Unit 36 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade36" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 36</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 36/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO HAPPEN </b>/ in a nice way / In a difficult way</p>
				<p><b>TO LIVE </b>/ alone / by yourself / your own life / on your own</p>
				<p><b>TO ORDER </b>/ a meal / a newspaper / fast food / in a restaurant / the dessert</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 36/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>Agreed Subtitles</b></p>
				</li>
				<li>
					<p><b>Even though</b></p>
				</li>
				<li>
					<p><b>Under</b></p>
				</li>
				<li>
					<p><b>Worn out</b></p>
				</li>
				<li>
					<p><b>Together</b></p>
				</li>
				<li>
					<p><b>Point out</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection