@extends('layouts.template')
@section('titulo','Unit 23 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade23" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 23 - BRUSHES</h3>
				<p><b>Goal:</b> Make Students Uderstand There Is A Difference In Spoken And Written Language. Focus On Expressions And The Presented Vocabulary.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit23/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>GONNA</b></p></li>
					<li><p><b>LIMITED</b></p></li>
					<li><p><b>BRUSH</b></p></li>
					<li><p><b>HARDNESS</b></p></li>
					<li><p><b>GOT IT</b></p></li>
					<li><p><b>HAS</b></p></li>
					<li><p><b>TEXTURE</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
