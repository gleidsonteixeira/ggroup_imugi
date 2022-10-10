@extends('layouts.template')
@section('titulo','Unit 4 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade4" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 04 - NICE TO MEET YOU, KATE!</h3>
				<p><b>Goal:</b> Getting to know the foreign student Kate Kawamura while taking the time to learn more about third person verb conjugation as well as nationalities and demonstrative pronouns.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit4/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>NEWS</b></p></li>
					<li><p><b>HAVE</b></p></li>
					<li><p><b>SPEAK</b></p></li>
					<li><p><b>UNDERSTAND</b></p></li>
					<li><p><b>MEET</b></p></li>
					<li><p><b>MAKE</b></p></li>
					<li><p><b>WANT</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
