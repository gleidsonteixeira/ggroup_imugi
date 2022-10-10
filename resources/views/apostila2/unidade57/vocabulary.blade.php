@extends('layouts.template')
@section('titulo','Unit 57 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade57" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 57</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 57/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<ul class="espacamento">
				<p><b>TO DIVE </b>/ into the poll / into the lake / in a project</p>
				<p><b>TO HOPE </b>/ I hope so / I hope not / I hope things go all right</p>
				<p><b>TO LEARN </b>/ English / Geography / history</p>
			</ul>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 57/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 36px">
				<li>
					<p><b>Worried</b></p>
				</li>
				<li>
					<p><b>Behind Schedule</b></p>
				</li>
				<li>
					<p><b>Punctuality</b></p>
				</li>
				<li>
					<p><b>Still</b></p>
				</li>
				<li>
					<p><b>Missing</b></p>
				</li>
				<li>
					<p><b>Until</b></p>
				</li>
				<li>
					<p><b>By then</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection