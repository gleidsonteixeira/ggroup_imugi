@extends('layouts.template')
@section('titulo','Unit 46 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade46" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 46</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 46/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO HATE </b>/ people / things / to do things</p>
				<p><b>TO IGNORE </b>/ a person / an idea</p>
				<p><b>TO LOSE </b>/ control / a bag / my mind / my life</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 46/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>DEVELOPMENT</b></p>
				</li>
				<li>
					<p><b>SO FAR</b></p>
				</li>
				<li>
					<p><b>SO GOOD</b></p>
				</li>
				<li>
					<p><b>READY</b></p>
				</li>
				<li>
					<p><b>TOGETHER</b></p>
				</li>
				<li>
					<p><b>MINDS</b></p>
				</li>
				<li>
					<p><b>TELLING</b></p>
				</li>
				<li>
					<p><b>CHALLENGING</p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection