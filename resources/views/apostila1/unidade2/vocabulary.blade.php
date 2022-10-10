@extends('layouts.template')
@section('titulo','Unit 2 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade2" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
				<p><b>Goal:</b> Promote a broad understanding of what Photoshop is and its utilities in people’s professional lives.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit2/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>EDIT</b></p></li>
					<li><p><b>DEVELOP</b></p></li>
					<li><p><b>SUBJECT</b></p></li>
					<li><p><b>PICTURE</b></p></li>
					<li><p><b>LAYOUT</b></p></li>
					<li><p><b>TODAY</b></p></li>
					<li><p><b>ANY</b></p></li>
					<li><p><b>FOR</b></p></li>
					<li><p><b>VERSION</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
