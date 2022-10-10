@extends('layouts.template')
@section('titulo','Unit 8 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade8" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 08 - REVIEW OF SOPHIA’S CLASSES</h3>
				<p><b>Lesson goal:</b>  Review the content studied in the last units during Sophia’s classes, explore more vocabulary and focus on text interpretation.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit8/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>LAST</b></p></li>
					<li><p><b>WANT</b></p></li>
					<li><p><b>DURING</b></p></li>
					<li><p><b>TAKE</b></p></li>
					<li><p><b>CAN</b></p></li>
					<li><p><b>DO</b></p></li>
					<li><p><b>MAKE</b></p></li>
					<li><p><b>BETWEEN</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
