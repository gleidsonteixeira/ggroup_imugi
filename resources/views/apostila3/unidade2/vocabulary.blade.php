@extends('layouts.template')
@section('titulo','Unit 02 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade2" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 2</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 02/01_VOCABULARY/VOCABULARY_01.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline upper">
					<li><p><b>Let’s get down</b></p></li>
					<li><p><b>to work To do something right</b></p></li>
					<li><p><b>To be sure</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Scratch</b></p></li>
					<li><p><b>Wanna Be</b></p></li>
					<li><p><b>Outstanding</b></p></li>
					<li><p><b>Through</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Wrong</b></p></li>
					<li><p><b>Purpose</b></p></li>
					<li><p><b>Sharing</b></p></li>
					<li><p><b>Contribute</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
