@extends('layouts.template')
@section('titulo','Unit 37 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade37" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 37</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 37/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO PRACTICE </b>/ sports / English / the piano / the guitar / a new skill</p>
				<p><b>TO ANSWER </b>/ a phone call / a question / a job ad (advertisement) </p>
				<p><b>TO CLEAN </b>/ a place / a person (two meanings : to make things clean /to rob)</p>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li>
						<p><b>Get</b></p>
					</li>
					<li>
						<p><b>Consider</b></p>
					</li>
					<li>
						<p><b>Realized</b></p>
					</li>
					<li>
						<p><b>Ones</b></p>
					</li>
					<li>
						<p><b>Gotta</b></p>
					</li>
					<li>
						<p><b>Chance</b></p>
					</li>
					<li>
						<p><b>Bring</b></p>
					</li>
					<li>
						<p><b>Own</b></p>
					</li>
				</ul>
			</div>
		</div>
</main>
<script>
	activeMenu();
</script>

@endsection
