@extends('layouts.template')
@section('titulo','Unit 20 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade20" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 20</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 20/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO SAY </b>/ a few words / nothing</p>
				<p><b>TO IGNORE </b>/ a person / an idea</p>
				<p><b>TO HATE </b>/ people / things / to do things</p>
				<p><b>TO LOSE </b>/ control / something</p>
				<p><b>TO MAKE </b>/ a fuss/ a request / noise</p>
				<p><b>TO LOVE </b>/ people / things / to do things</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 20/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>I guess</b></p>
				</li>
				<li>
					<p><b>Decade</b></p>
				</li>
				<li>
					<p><b>Addicted</b></p>
				</li>
				<li>
					<p><b>Both</b></p>
				</li>
				<li>
					<p><b>Whole</b></p>
				</li>
				<li>
					<p><b>Hobby</b></p>
				</li>
				<li>
					<p><b>Amazed</b></p>
				</li>
				<li>
					<p><b>Diving</b></p>
				</li>
				<li>
					<p><b>World</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>
@endsection