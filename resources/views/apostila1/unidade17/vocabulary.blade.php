@extends('layouts.template')
@section('titulo','Unit 17 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade17" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
				<!-- <p><b>Lesson goal:</b>  Review the content studied in the last units during Sophia’s classes, explore more vocabulary and focus on text interpretation.</p> -->
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit17/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>TELL</b></p></li>
					<li><p><b>SOON</b></p></li>
					<li><p><b>TROUBLE</b></p></li>
					<li><p><b>CONSUME</b></p></li>
					<li><p><b>LOOK</b></p></li>
					<li><p><b>PRECICE</b></p></li>
					<li><p><b>ALIGNED</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
