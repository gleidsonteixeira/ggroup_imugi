@extends('layouts.template')
@section('titulo','Unit 58 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade58" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 58</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 58/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>

			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO SUE </b>/ a person / an institution</p>
				<p><b>TO SUNBATHE </b>/ at the beach / at the club</p>
				<p><b>TO TURN </b>/ on / off / up / around</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 58/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 36px">
				<li>
					<p><b>Lighting</b></p>
				</li>
				<li>
					<p><b>Missing</b></p>
				</li>
				<li>
					<p><b>At least</b></p>
				</li>
				<li>
					<p><b>Spent</b></p>
				</li>
				<li>
					<p><b>Done</b></p>
				</li>
				<li>
					<p><b>Send</b></p>
				</li>
				<li>
					<p><b>Draft</b></p>
				</li>
				<li>
					<p><b>Background</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection