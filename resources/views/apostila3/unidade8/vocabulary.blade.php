@extends('layouts.template')
@section('titulo','Unit 08 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade8" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 8</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 08/01_VOCABULARY/VOCABULARY_08.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Powerful</b></p></li>
					<li><p><b>Change</b></p></li>
					<li><p><b>Live</b></p></li>
					<li><p><b>Deliver</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Depend On</b></p></li>
					<li><p><b>Shoot</b></p></li>
					<li><p><b>Upload</b></p></li>
					<li><p><b>Ancient</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
