@extends('layouts.template')
@section('titulo','Unit 63 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade63" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 63</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 63/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO CLIMB </b>/ a mountain / a tree / the wall</p>
				<p><b>TO CRASH </b>/ a car / into something</p>
				<p><b>TO CURSE </b>/ someone / something / somebody for doing something</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 63/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Make</b></p>
				</li>
				<li>
					<p><b>Gotta</b></p>
				</li>
				<li>
					<p><b>Asked</b></p>
				</li>
				<li>
					<p><b>Find</b></p>
				</li>
				<li>
					<p><b>Trivial</b></p>
				</li>
				<li>
					<p><b>Beyond</b></p>
				</li>
				<li>
					<p><b>Bold</b></p>
				</li>
				<li>
					<p><b>Winners</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection