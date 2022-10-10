@extends('layouts.template')
@section('titulo','Unit 07 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade7" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 7</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 07/01_VOCABULARY/VOCABULARY_07.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Fasten your seat belt</b></p></li>
					<li><p><b>To be kidding</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Dive into</b></p></li>
					<li><p><b>Take off</b></p></li>
					<li><p><b>Adhered</b></p></li>
					<li><p><b>Employee</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Broadcast</b></p></li>
					<li><p><b>Owner</b></p></li>
					<li><p><b>huge</b></p></li>
					<li><p><b>Hit</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
