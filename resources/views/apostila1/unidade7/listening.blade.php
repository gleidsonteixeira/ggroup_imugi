@extends('layouts.template')
@section('titulo','Unit 7 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade7" data-etapa="listening">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit7/listining/listining_a.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Carlos Utilizes The Adjustment Panel In Photoshop To Select The Black & White Tool In Order To Add Drama To His Photo. He Says He Uses It With Every Picture He Edits.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();        

    </script>

@endsection
