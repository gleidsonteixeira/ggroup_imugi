@extends('layouts.template')
@section('titulo','Unit 6 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade6" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 06 - Brush and Red Eye Correction</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit6/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>OPEN</b></p></li>
					<li><p><b>TOUCH UP</b></p></li>
					<li><p><b>CAN</b></p></li>
					<li><p><b>REMOVE</b></p></li>
					<li><p><b>BRUSH</b></p></li>
					<li><p><b>SOME</b></p></li>
					<li><p><b>ANSWER</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
