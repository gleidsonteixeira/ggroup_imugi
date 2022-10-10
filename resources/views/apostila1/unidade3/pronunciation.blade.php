@extends('layouts.template')
@section('titulo','Unit 3 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade3" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit3/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to and repeat the pronunciation of the following words. Observe the pronunciation of the letter "L".</h5>
				<ul class="lista-inline">
                    <li><p><b class="upper">Wildlife</b></p></li>
                    <li><p><b class="upper">Original</b></p></li>
                    <li><p><b class="upper">Old</b></p></li>
                    <li><p><b class="upper">Tool</b></p></li>
                    <li><p><b class="upper">Call</b></p></li>
                    <li><p><b class="upper">Professional</b></p></li>
                    <li><p><b class="upper">All</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to and repeat the pronunciation of the following words. Pay attention to the pronunciation of “CH”.</h5>
                <ul class="lista-inline">
                    <li><p><b class="upper">Choose</b></p></li>
                    <li><p><b class="upper">Teach</b></p></li>
                    <li><p><b class="upper">Check</b></p></li>
                    <li><p><b class="upper">Touch</b></p></li>
                    <li><p><b class="upper">Change</b></p></li>
                    <li><p><b class="upper">Chat</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Listen to your teacher read the sentence, and then repeat it after him.</h5>
                <div class="espacamento">
                    <p>I teach children to use professional Photoshop tools.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
