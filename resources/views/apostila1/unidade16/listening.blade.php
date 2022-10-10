@extends('layouts.template')
@section('titulo','Unit 16 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade16" data-etapa="listening">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit16/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Adobe prefers people to use the term “photoshopping” when referring to photo editing to prevent its trademark from becoming generalized. Howver, it’s never caught on as much as they had hoped, and today we regularly use “photoshop” as a verb.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();        

    </script>

@endsection
