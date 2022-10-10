@extends('layouts.template')
@section('titulo','Unit 10 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade10" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit10/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>TELL</b></p></li>
					<li><p><b>LAST</b></p></li>
					<li><p><b>DANCE</b></p></li>
					<li><p><b>SING</b></p></li>
					<li><p><b>FOOD</b></p></li>
					<li><p><b>COOK</b></p></li>
					<li><p><b>CLASS</b></p></li>
					<li><p><b>GO</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
