@extends('layouts.template')
@section('titulo','Unit 1 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade1" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 01 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<p><b>Lesson Goal:</b> Permit a communication-friendly environment in order to make students feel comfortable in their first class while exploring their understanding of graphic design production, its applications and the demand for professionals in the market.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>WELCOME</b></p></li>
					<li><p><b>WORK</b></p></li>
					<li><p><b>MOVE</b></p></li>
					<li><p><b>INCLUDE</b></p></li>
					<li><p><b>HAVE</b></p></li>
					<li><p><b>GROW</b></p></li>
					<li><p><b>NEED</b></p></li>
					<li><p><b>USE</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
