@extends('layouts.template')
@section('titulo','Unit 43 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade43" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 43</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 43/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
            </audio>
			<h5 class="barlow" style="margin-top:16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO FIX </b>/ a car / a dinner</p>
				<p><b>TO HAVE </b>/ a car / breakfast-lunch – dinner – a snack / a break / problems / headache</p>
				<p><b>TO SEE </b>/ a person / something / your point</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 43/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Hard</b></p>
				</li>
				<li>
					<p><b>Character</b></p>
				</li>
				<li>
					<p><b>Each</b></p>
				</li>
				<li>
					<p><b>Something</b></p>
				</li>
				<li>
					<p><b>RPG</b></p>
				</li>
				<li>
					<p><b>Also</b></p>
				</li>
				<li>
					<p><b>Fun</b></p>
				</li>
				<li>
					<p><b>Wait</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>
@endsection
