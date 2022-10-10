@extends('layouts.template')
@section('titulo','Unit 16 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade16" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit16/pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe the difference in the pronounciation of letters “P” and “B”.</h5>
				<ul class="lista-inline">
					<li><p><b>PUT</b></p></li>
					<li><p><b>UP</b></p></li>
					<li><p><b>PAIN</b></p></li>
					<li><p><b>LAP</b></p></li>
					<li><p><b>PEN</b></p></li>
					<li><p><b>TAP</b></p></li>
				</ul>
				<ul class="lista-inline">					
					<li><p><b>BUT</b></p></li>
					<li><p><b>JOB</b></p></li>
					<li><p><b>BALL</b></p></li>
					<li><p><b>RUB</b></p></li>
					<li><p><b>BURN</b></p></li>
					<li><p><b>CURB</b></p></li>
				</ul>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
