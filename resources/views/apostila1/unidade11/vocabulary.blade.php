@extends('layouts.template')
@section('titulo','Unit 11 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade11" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
				<p><b>Lesson goal:</b>  Teach students about basic color tool options and focus on present continuous tense.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit11/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>CREATE</b></p></li>
					<li><p><b>TRY</b></p></li>
					<li><p><b>MAKE</b></p></li>
					<li><p><b>RECOMMEND</b></p></li>
					<li><p><b>SELECT</b></p></li>
					<li><p><b>CHOOSE</b></p></li>
					<li><p><b>PICK</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
