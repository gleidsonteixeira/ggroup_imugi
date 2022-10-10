@extends('layouts.template')
@section('titulo','Unit 04 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade4" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 4</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 04/01_VOCABULARY/VOCABULARY_04.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top:16px">A - WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Promote</b></p></li>
					<li><p><b>To Be Nuts</b></p></li>
					<li><p><b>Brainstorm</b></p></li>
					<li><p><b>Allow</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Cheap</b></p></li>
					<li><p><b>Irreverent</b></p></li>
					<li><p><b>To Make</b></p></li>
					<li><p><b>Transmit</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
