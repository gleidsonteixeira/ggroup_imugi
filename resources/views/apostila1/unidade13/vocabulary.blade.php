@extends('layouts.template')
@section('titulo','Unit 13 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade13" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 13 - LAYER STYLE</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit13/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>COOL</b></p></li>
					<li><p><b>TALK</b></p></li>
					<li><p><b>SOUND</b></p></li>
					<li><p><b>VAST</b></p></li>
					<li><p><b>YEAR</b></p></li>
					<li><p><b>BUSINESS</b></p></li>
					<li><p><b>JOB</b></p></li>
					<li><p><b>BORDER</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
