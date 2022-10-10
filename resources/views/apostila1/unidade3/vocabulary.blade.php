@extends('layouts.template')
@section('titulo','Unit 3 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade3" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<p><b>Goal:</b> Getting to know Professor Sophia Jones and to create a basic understanding of how Photoshop works alongside photography.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit3/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>MEET</b></p></li>
					<li><p><b>CALL</b></p></li>
					<li><p><b>TEACH</b></p></li>
					<li><p><b>KNOW</b></p></li>
					<li><p><b>PUBLISH</b></p></li>
					<li><p><b>PREFER</b></p></li>
					<li><p><b>OFFER</b></p></li>
					<li><p><b>CHOOSE</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
