@extends('layouts.template')
@section('titulo','Unit 15 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade15" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 15 - PROFESSOR Akira Suzuki</h3>
				<p><b>Goal: </b>Focus A Lot On Future With Going To And With Will. Give Many Examples To Contrast The Two Structures. Also, Shed Light On How Photoshop Is Important For Web Designers.	Talk A Little Bit About The Field.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit15/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>WILL</b></p></li>
					<li><p><b>PLEASURE</b></p></li>
					<li><p><b>UNTIL</b></p></li>
					<li><p><b>AGE</b></p></li>
					<li><p><b>A FEW</b></p></li>
					<li><p><b>SMALL</b></p></li>
					<li><p><b>HOPE</b></p></li>
					<li><p><b>ASSIST</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
