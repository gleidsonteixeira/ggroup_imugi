@extends('layouts.template')
@section('titulo','Unit 03 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade3" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 3</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 03/01_VOCABULARY/VOCABULARY_03.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline upper">
					<li><p><b>Let’s start the game</b></p></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Purpose</b></p></li>
					<li><p><b>Phenomenon</b></p></li>
					<li><p><b>Thought</b></p></li>
					<li><p><b>Reaching</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Creator</b></p></li>
					<li><p><b>Players</b></p></li>
					<li><p><b>Sold</b></p></li>
					<li><p><b>Causing</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
