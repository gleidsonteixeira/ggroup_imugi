@extends('layouts.template')
@section('titulo','Unit 19 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade19" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 19 - TEXT FORMATING</h3>
				<!-- <p><b>goal:</b>  Focus On Simple Past With Irregular Verbs. Contrast With The Present Form. Explore Differences Between Simple Present And Simple Past Auxilary Verbs.</p> -->
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit19/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>DOUBT</b></p></li>
					<li><p><b>PRACTICE</b></p></li>
					<li><p><b>NOTICE</b></p></li>
					<li><p><b>BETWEEN</b></p></li>
					<li><p><b>FIX</b></p></li>
					<li><p><b>MENTION</b></p></li>
					<li><p><b>ON TOP OF</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
