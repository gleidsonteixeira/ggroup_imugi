@extends('layouts.template')
@section('titulo','Unit 14 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade14" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit14/pronunciation/pronunciation.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe the difference in pronounciation between the letters “Oo” and “U”.</h5>
				<ul class="lista-inline">
					<li><p><b>BOOT</b></p></li>
					<li><p><b>MOOD</b></p></li>
					<li><p><b>HOOT</b></p></li>
					<li><p><b>X</b></p></li>
					<li><p><b>BUT</b></p></li>
					<li><p><b>MUD</b></p></li>
					<li><p><b>HUT</b></p></li>
				</ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
