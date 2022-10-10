@extends('layouts.template')
@section('titulo','Unit 9 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade9" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 09 - PROFESSOR ANA BEATRIZ</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit9/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>PLEASURE</b></p></li>
					<li><p><b>CALL</b></p></li>
					<li><p><b>TO BE BORN</b></p></li>
					<li><p><b>DO</b></p></li>
					<li><p><b>ADVERTISING</b></p></li>
					<li><p><b>DRAW</b></p></li>
					<li><p><b>BRAND</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
