@extends('layouts.template')
@section('titulo','Unit 32 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade32" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 32 - VICTOR’S REVIEW</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit32/pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Practice the pronunciation of the letter "D" in the beginning and middle of words.</h5>
				<ul class="lista-inline">
					<li><p><b>DAY</b></p></li>
					<li><p><b>WEDDING</b></p></li>
					<li><p><b>DATE</b></p></li>
					<li><p><b>VIDEO</b></p></li>
					<li><p><b>DOLL</b></p></li>
					<li><p><b>DEDICATION</b></p></li>
				</ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
