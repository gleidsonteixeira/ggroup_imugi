@extends('layouts.template')
@section('titulo','Unit 24 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade24" data-etapa="listening">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit24/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>The <b>Eraser</b> Is Used To <b>Delete</b> An Entire Project Or Just A Part Of It. It Can Also Be Used To Superficially Erase Traces Or <b> Colors.</b> Use The Eraser And Its <b>Variety</b> Of Functions In The Options <b>Panel</b> And Create New <b>Effects.</b></p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
