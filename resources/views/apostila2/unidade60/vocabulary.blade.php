@extends('layouts.template')
@section('titulo','Unit 60 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade60" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 60</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 60/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO JUMP </b>/ up and down / for joy</p>
				<p><b>TO NOTICE </b>/ a problem / somebody-something doing something</p>
				<p><b>TO RELAX </b>/ in the swimming pool / all day</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 60/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Desperate</b></p>
				</li>
				<li>
					<p><b>Easily </b></p>
				</li>
				<li>
					<p><b>Deadlines</b></p>
				</li>
				<li>
					<p><b>Kind</b></p>
				</li>
				<li>
					<p><b>Deal</b></p>
				</li>
				<li>
					<p><b>Advise</b></p>
				</li>
				<li>
					<p><b>Pressure</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection