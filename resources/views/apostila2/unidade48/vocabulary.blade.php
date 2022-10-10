@extends('layouts.template')
@section('titulo','Unit 48 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade48" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 48</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 48/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO PRETEND TO BE </b>/ happy / sad / sorry / another person</p>
				<p><b>TO SAY </b>/ a few words / something / nothing</p>
				<p><b>TO SURF </b>/ at the beach / the net</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 48/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>SMART</b></p>
				</li>
				<li>
					<p><b>TRY</b></p>
				</li>
				<li>
					<p><b>LIKE</b></p>
				</li>
				<li>
					<p><b>BUTTERFLY</b></p>
				</li>
				<li>
					<p><b>VIEW</b></p>
				</li>
				<li>
					<p><b>CAPTIVATE</b></p>
				</li>
				<li>
					<p><b>SAW</b></p>
				</li>
				<li>
					<p><b>THINK</p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection