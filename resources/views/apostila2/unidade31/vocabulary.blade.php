@extends('layouts.template')
@section('titulo','Unit 31 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade31" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 31</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 31/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO REST </b>/ your feet / your legs / on the sofa / in peace (RIP).</p>
				<p><b>TO ROB </b>/ people / places</p>
				<p><b>TO SHOUT </b>/ out / at somebody</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 31/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>

			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>TO BE INTO</b></p>
				</li>
				<li>
					<p><b>A LOT OF</b></p>
				</li>
				<li>
					<p><b>DETAILS</b></p>
				</li>
				<li>
					<p><b>ENDLESS</b></p>
				</li>
				<li>
					<p><b>REGARDING</b></p>
				</li>
				<li>
					<p><b>VIBE</b></p>
				</li>
				<li>
					<p><b>TRICKS</b></p>
				</li>
				<li>
					<p><b>SAW</p>
				</li>
				<li>
					<p><b>SO FAR</p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection