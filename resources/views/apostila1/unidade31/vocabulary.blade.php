@extends('layouts.template')
@section('titulo','Unit 31 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade31" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 31 - VIDEO TRANSITION</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit31/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><p><b>TRANSITION</b></p></li>
					<li><p><b>TAKE</b></p></li>
					<li><p><b>SUPPOSE</b></p></li>
					<li><p><b>SHOULD</b></p></li>
					<li><p><b>A BUNCH OF</b></p></li>
					<li><p><b>LEFT</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
