@extends('layouts.template')
@section('titulo','Unit 29 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade29" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<p><b>Goal: </b> Explain To Students How Possessive Adjectives And Pronouns Differ.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit29/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><p><b>TO LAST</b></p></li>
					<li><p><b>GOT IT</b></p></li>
					<li><p><b>TO SET</b></p></li>
					<li><p><b>AT LEAST</b></p></li>
					<li><p><b>CLIP</b></p></li>
					<li><p><b>BELIEVE</b></p></li>
					<li><p><b>ONLY</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
