@extends('layouts.template')
@section('titulo','Unit 1 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade1" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 01 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe how the sound of the letters “PH” resembles an “F”. Practice by repeating the words below.</h5>
				<ul class="lista-inline">
                    <li><p><b class="upper">Photo</b></p></li>
                    <li><p><b class="upper">Graph</b></p></li>
                    <li><p><b class="upper">Phone</b></p></li>
                    <li><p><b class="upper">Laugh</b></p></li>
                    <li><p><b class="upper">Pharmacy</b></p></li>
                    <li><p><b class="upper">Alphabet</b></p></li>
                    <li><p><b class="upper">Pamphlet</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to your teacher say the words bellow and repeat after him. Observe the pronunciation of the suffixtion.</h5>
                <ul class="lista-inline">
                    <li><p><b class="upper">Production</b></p></li>
                    <li><p><b class="upper">Edition</b></p></li>
                    <li><p><b class="upper">Solution</b></p></li>
                    <li><p><b class="upper">Position</b></p></li>
                    <li><p><b class="upper">Option</b></p></li>
                    <li><p><b class="upper">Introduction</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Read the following sentence to practice pronunciation. Observe the underlined letters.</h5>
                <div class="espacamento">
                    <p>Photoshop is for the edition of photos and other graphic designing production.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
