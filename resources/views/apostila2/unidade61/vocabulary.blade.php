@extends('layouts.template')
@section('titulo','Unit 61 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade61" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 61</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 61/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO SELECT </b>/ an option / someone / something / somebody to do something</p>
				<p><b>TO FIND </b>/ it difficult – easy / your way</p>
				<p><b>TO MARRY </b>/ a man / a woman / late / </p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 61/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Aware</b></p>
				</li>
				<li>
					<p><b>Took</b></p>
				</li>
				<li>
					<p><b>Whole</b></p>
				</li>
				<li>
					<p><b>Missed</b></p>
				</li>
				<li>
					<p><b>Grow</b></p>
				</li>
				<li>
					<p><b>Position</b></p>
				</li>
				<li>
					<p><b>Realized</b></p>
				</li>
				<li>
					<p><b>Touch</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection