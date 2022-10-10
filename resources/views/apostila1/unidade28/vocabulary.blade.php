@extends('layouts.template')
@section('titulo','Unit 28 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1"  data-unidade="unidade28" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 28 - VICTOR’S STUDENTS</h3>
				<p><b>Goal: </b> Explore Vocabulary With Students.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit28/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><p><b>AS</b></p></li>
					<li><p><b>SAY</b></p></li>
					<li><p><b>ACTUALLY</b></p></li>
					<li><p><b>JOURNALIST</b></p></li>
					<li><p><b>EDITOR</b></p></li>
					<li><p><b>YOU ALL</b></p></li>
					<li><p><b>SHOULD</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
