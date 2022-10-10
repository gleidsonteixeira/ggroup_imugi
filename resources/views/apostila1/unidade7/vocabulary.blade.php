@extends('layouts.template')
@section('titulo','Unit 7 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade7" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
				<p><b>Goal:</b> Teach students verb conjugation in the simple present; Focus on pronunciation of plurals.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit7/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>SAY</b></p></li>
					<li><p><b>REMEMBER</b></p></li>
					<li><p><b>ADJUSTMENT</b></p></li>
					<li><p><b>UTILIZE</b></p></li>
					<li><p><b>GIVE</b></p></li>
					<li><p><b>EFFECT</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
