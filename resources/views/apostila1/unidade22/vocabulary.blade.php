@extends('layouts.template')
@section('titulo','Unit 22 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade22" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 22 - SARAH’S STUDENTS</h3>
				<p><b>Goal:</b> Focus On Contrasting Of The Verb Tenses Studied Previously.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit22/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>THINK</b></p></li>
					<li><p><b>LEARN</b></p></li>
					<li><p><b>DO</b></p></li>
					<li><p><b>CALL</b></p></li>
					<li><p><b>TAKE</b></p></li>
					<li><p><b>FIELD</b></p></li>
					<li><p><b>EXPECT</b></p></li>
					<li><p><b>GUESS</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
