@extends('layouts.template')
@section('titulo','Unit 32 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade32" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 32</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 32/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO SING </b>/ in tune / out of tune / a song / </p>
				<p><b>TO SIT </b>/ beside / on / down / in front of / between two people / behind someone</p>
				<p><b>TO SKIP </b>/ classes / a line / a rope</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 32/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>

			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>HAD</b></p>
				</li>
				<li>
					<p><b>CHANCE</b></p>
				</li>
				<li>
					<p><b>REVIEW</b></p>
				</li>
				<li>
					<p><b>ADDICTION</b></p>
				</li>
				<li>
					<p><b>STUFF</b></p>
				</li>
				<li>
					<p><b>SHARING</b></p>
				</li>
				<li>
					<p><b>GROWTH</b></p>
				</li>
				<li>
					<p><b>LAW</p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection