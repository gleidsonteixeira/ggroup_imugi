@extends('layouts.template')
@section('titulo','Unit 35 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade35" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 35</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 35/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO TRAVEL </b>/ alone / by yourself / with friends / abroad</p>
				<p><b>TO VISIT </b>/ a friend / a city / a place</p>
				<p><b>TO VOTE </b>/ in the elections / for a person / for an idea</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 35/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>

			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>PRETEND</b></p>
				</li>
				<li>
					<p><b>IN ORDER</b></p>
				</li>
				<li>
					<p><b>GO FOR</b></p>
				</li>
				<li>
					<p><b>GATHERING</b></p>
				</li>
				<li>
					<p><b>BRAINSTORMING</b></p>
				</li>
				<li>
					<p><b>AT LEAST</b></p>
				</li>
				<li>
					<p><b>TO BE IN TOUCH</b></p>
				</li>
				<li>
					<p><b>INSPIRE</p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection