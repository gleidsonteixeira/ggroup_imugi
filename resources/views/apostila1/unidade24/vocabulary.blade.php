@extends('layouts.template')
@section('titulo','Unit 24 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade24" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<p><b>Goal:</b> Explain To Students How The Eraser Is Not As Basic As It Sounds.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit24/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>FIX</b></p></li>
					<li><p><b>APARENT</b></p></li>
					<li><p><b>LESS</b></p></li>
					<li><p><b>KEEP</b></p></li>
					<li><p><b>HOWEVER</b></p></li>
					<li><p><b>OPACITY</b></p></li>
					<li><p><b>ENTIRELY</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
