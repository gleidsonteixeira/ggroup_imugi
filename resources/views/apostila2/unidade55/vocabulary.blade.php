@extends('layouts.template')
@section('titulo','Unit 55 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade55" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 55</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 55/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO DANCE </b>/ at a party / all night long</p>
				<p><b>TO DREAM </b>/ every night / every other night / once in a while</p>
				<p><b>TO EXIST </b>/ for years / for decades / for centuries</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 55/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 32px">
				<li>
					<p><b>Get back</b></p>
				</li>
				<li>
					<p><b>Still</b></p>
				</li>
				<li>
					<p><b>Phase Characters</b></p>
				</li>
				<li>
					<p><b>Knowledge</b></p>
				</li>
				<li>
					<p><b>Tried Much </b></p>
				</li>
				<li>
					<p><b>Easier</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection