@extends('layouts.template')
@section('titulo','Unit 47 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade47" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 47</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 47/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO LOVE </b>/ people / things / to do things</p>
				<p><b>TO MAKE </b>/ a request / noise / a fuss / friends / a cake</p>
				<p><b>TO PREFER </b>/ salmon to tuna / reading books to watching movies</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 47/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>GOTTA</b></p>
				</li>
				<li>
					<p><b>CAREFUL</b></p>
				</li>
				<li>
					<p><b>LINEAR</b></p>
				</li>
				<li>
					<p><b>RIGHT</b></p>
				</li>
				<li>
					<p><b>FORGOT</b></p>
				</li>
				<li>
					<p><b>SOLVE</b></p>
				</li>
				<li>
					<p><b>BELIEVE</b></p>
				</li>
				<li>
					<p><b>SURE</p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection