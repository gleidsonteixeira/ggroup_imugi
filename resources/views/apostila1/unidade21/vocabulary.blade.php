@extends('layouts.template')
@section('titulo','Unit 21 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade21" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
				<p><b>Goal:</b> Provide Students With An Understanding Of The Field Of Ilustration.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit21/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>THOUGH</b></p></li>
					<li><p><b>MOVE</b></p></li>
					<li><p><b>SPECIALIZE</b></p></li>
					<li><p><b>DRAW</b></p></li>
					<li><p><b>NOWADAYS</b></p></li>
					<li><p><b>VARIETY</b></p></li>
					<li><p><b>DURING</b></p></li>
					<li><p><b>SUCH AS</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
