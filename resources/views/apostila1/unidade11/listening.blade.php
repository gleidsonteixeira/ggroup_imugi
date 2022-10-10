@extends('layouts.template')
@section('titulo','Unit 11 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade11" data-etapa="listening">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit11/listening/listening.wav') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Color <b>Picker</b> Is A Tool Used To <b>Choose</b> The Color You Want To Use To <b>Create</b> Anything From Flyers To Company <b>Logos</b>. In The Color Picker <b>Option</b>, You Can <b>Click</b> To <b>Add</b> The Color To The Swatches Panel. This <b>Panel</b> Is Where You Can Store The <b>Colors</b> You Saved To Use During The Project.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
