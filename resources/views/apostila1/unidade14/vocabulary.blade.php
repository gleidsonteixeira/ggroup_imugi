@extends('layouts.template')
@section('titulo','Unit 14 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade14" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit14/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>ABOUT</b></p></li>
					<li><p><b>REVIEW</b></p></li>
					<li><p><b>REMEMBER</b></p></li>
					<li><p><b>OTHER</b></p></li>
					<li><p><b>SAVE</b></p></li>
					<li><p><b>GIVE</b></p></li>
					<li><p><b>FORGET</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
