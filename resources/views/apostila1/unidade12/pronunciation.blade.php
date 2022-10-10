@extends('layouts.template')
@section('titulo','Unit 12 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade12" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 12 - TYPE TOOL & STYLE PANEL</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit12/pronunciation/pronunciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to your teacher and repeat the words. Notice the difference in the pronunciation of the underlined letters between the two word groups.</h5>
					<ul class="lista-inline">
						<li><p><b>THANKS</b></p></li>
						<li><p><b>WITH</b></p></li>
						<li><p><b>THINK</b></p></li>
						<li><p><b>X</b></p></li>
						<li><p><b>THAT</b></p></li>
						<li><p><b>THEY</b></p></li>
						<li><p><b>THIS</b></p></li>
					</ul>
				<h5 class="barlow" style="margin-top: 16px">B - Read the sentence to practice pronunciation</h5>
				<div class="espacamento">
					<p>“I think that they have this font with custom style.”</p>
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
