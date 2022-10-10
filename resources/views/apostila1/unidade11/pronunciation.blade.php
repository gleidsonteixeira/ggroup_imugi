@extends('layouts.template')
@section('titulo','Unit 11 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade11" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit11/pronunciation/pronunciation.wav') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Listen to your teacher read the words below, repeat after Him/Her. Observe the pronunciation of the underlined letters. Notice that the letter ‘G’ at the end is not pronounced.</h5>
                <ul class="lista-inline">
					<li><p><b>STUDYING</b></p></li>
					<li><p><b>CREATING</b></p></li>
					<li><p><b>DEVELOPING</b></p></li>
					<li><p><b>TRYING</b></p></li>
				</ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
