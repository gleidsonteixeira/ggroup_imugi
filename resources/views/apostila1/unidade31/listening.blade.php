@extends('layouts.template')
@section('titulo','Unit 31 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade31" data-etapa="listening">
				<h3 class="barlow">UNIT 31 -  VIDEO TRANSITION</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit31/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Photoshop Offers A <b>Tool</b> Called Video <b>Transition.</b> In It, You <b>Can</b> Find A Great Variety Of <b>Effects</b> For Slides And <b>Videos</b>. You Can <b>Add</b> A Transition Effect To The <b>Start</b>, Middle And End Of A Video/Slide.</p>
                </div>
            </div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
