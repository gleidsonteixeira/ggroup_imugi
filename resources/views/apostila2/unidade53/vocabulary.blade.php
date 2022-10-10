@extends('layouts.template')
@section('titulo','Unit 53 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade53" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 53</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 53/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO WANT </b>/ something badly</p>
				<p><b>TO BELIEVE </b>/ in love / in God / somebody</p>
				<p><b>TO HURT </b>/ yourself / my feelings</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 53/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Sick</b></p>
				</li>
				<li>
					<p><b>Blink</b></p>
				</li>
				<li>
					<p><b>Till</b></p>
				</li>
				<li>
					<p><b>Around</b></p>
				</li>
				<li>
					<p><b>Huge</b></p>
				</li>
				<li>
					<p><b>Appealing</b></p>
				</li>
				<li>
					<p><b>Captivating</b></p>
				</li>
				<li>
					<p><b>Hangar</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection