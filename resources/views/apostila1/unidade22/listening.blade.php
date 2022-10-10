@extends('layouts.template')
@section('titulo','Unit 22 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade22" data-etapa="listening">
				<h3 class="barlow">UNIT 22 - SARAH’S STUDENTS</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit22/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p><b>Illustrations</b> have been used in advertisements, greeting cards, <b>posters</b>, <b>books</b>, <b>graphic</b>, novels, storyboards, manuals, business, magazines, shirts, video games, tutorials and newspapers. A cartoon illustration can add humor to stories or essays.</p>
                </div>
                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
