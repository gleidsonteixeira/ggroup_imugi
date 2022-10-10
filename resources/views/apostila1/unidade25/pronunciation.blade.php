@extends('layouts.template')
@section('titulo','Unit 25 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade25" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 25 - PEN TOOLS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit25/pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - Listen and practice the pronounciation of "can" and "can´t".</h5>
				<div class="espacamento">
					<p>I <b>can</b> swim.</p>
					<p>She <b>can’t</b> play the guittar</p>
					<p>He <b>can</b> speak english.</p>
					<p><b>Can</b> they go?</p>
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
