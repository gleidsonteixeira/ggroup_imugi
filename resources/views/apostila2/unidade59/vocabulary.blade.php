@extends('layouts.template')
@section('titulo','Unit 59 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade59" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 59</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 59/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO YELL </b>/ at somebody / out in surprise-pain / </p>
				<p><b>TO BAKE </b>/ a cake / a pie</p>
				<p><b>TO DATE </b>/ a girl / a boy</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 59/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 36px">
				<li>
					<p><b>Calmer </b></p>
				</li>
				<li>
					<p><b>Freaking </b></p>
				</li>
				<li>
					<p><b>out</b></p>
				</li>
				<li>
					<p><b>Managed</b></p>
				</li>
				<li>
					<p><b>Wrong</b></p>
				</li>
				<li>
					<p><b>Desperate</b></p>
				</li>
				<li>
					<p><b>Evaluate</b></p>
				</li>
				<li>
					<p><b>Decide Hint</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection