@extends('layouts.template')
@section('titulo','Unit 2 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade2" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 02</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 2/1. VOCABULARY/VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - NATIONALITIES</h5>

			<ul class="lista-inline" style="margin-top: 16px">
				<li>
					<p><b>BRAZILIAN</b></p>
				</li>
				<li>
					<p><b>AMERICAN</b></p>
				</li>
				<li>
					<p><b>CANADIAN</b></p>
				</li>
				<li>
					<p><b>CHINESE</b></p>
				</li>
				<li>
					<p><b>JAPANESE</b></p>
				</li>
				<li>
					<p><b>FRENCH</b></p>
				</li>
				<li>
					<p><b>SPANISH</b></p>
				</li>
				<li>
					<p><b>COLOMBIAN</b></p>
				</li>
			</ul>

			<h5 class="barlow" style="margin-top: 16px">B - PROFESSIONS</h5>

			<ul class="lista-inline" style="margin-top: 16px">
				<li>
					<p><b>WEB DESIGNER</b></p>
				</li>
				<li>
					<p><b>YOUTUBER</b></p>
				</li>
				<li>
					<p><b>TEACHER</b></p>
				</li>
				<li>
					<p><b>EDITOR</b></p>
				</li>
				<li>
					<p><b>VIDEO MAKER</b></p>
				</li>
				<li>
					<p><b>ILLUSTRATOR</b></p>
				</li>
				<li>
					<p><b>PROGRAMMER</b></p>
				</li>
				<li>
					<p><b>DRAWER</b></p>
				</li>
			</ul>

			<h5 class="barlow" style="margin-top: 16px">C - WORDS IN CONTEXT</h5>

			<ul class="lista-inline" style="margin-top: 16px">
				<li>
					<p><b>INTRODUCE</b></p>
				</li>
				<li>
					<p><b>INTERVIEW</b></p>
				</li>
				<li>
					<p><b>FULL NAME</b></p>
				</li>
				<li>
					<p><b>GUYS</b></p>
				</li>
				<li>
					<p><b>TURN</b></p>
				</li>
				<li>
					<p><b>TELL</b></p>
				</li>
				<li>
					<p><b>FEEL</b></p>
				</li>
				<li>
					<p><b>KNOW</b></p>
				</li>
			</ul>

		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection