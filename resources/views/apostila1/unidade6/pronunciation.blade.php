@extends('layouts.template')
@section('titulo','Unit 6 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade6" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 06 - Brush and Red Eye Correction</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit6/pronuciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe how in the suffix “ing” the letter “g” is not pronounced.</h5>
				<ul class="lista-inline">
                    <li><b class="upper">Touching up</b></li>
                    <li><b class="upper">Healing</b></li>
                    <li><b class="upper">Editing</b></li>
                    <li><b class="upper">Opening</b></li>
                    <li><b class="upper">Adding</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Read the sentence out loud to practice pronunciation.</h5>
                <div class="espacamento">
                    <p>"Touching up personal photos by adding healing brush effects is common."</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
