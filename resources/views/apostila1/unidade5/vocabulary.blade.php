@extends('layouts.template')
@section('titulo','Unit 5 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade5" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
				<p><b>Goal:</b> To learn what Burn Tool is used for while focusing on adjectives in their comparative forms.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit5/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>THINK</b></p></li>
					<li><p><b>BRIGHT</b></p></li>
					<li><p><b>DARK</b></p></li>
					<li><p><b>WANT</b></p></li>
					<li><p><b>KNOW</b></p></li>
					<li><p><b>MAKE</b></p></li>
					<li><p><b>BRUSH</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
