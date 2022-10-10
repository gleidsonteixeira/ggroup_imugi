@extends('layouts.template')
@section('titulo','Unit 20 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade20" data-etapa="listening">
				<h3 class="barlow">UNIT 20 - Akira’S REVIEW</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit20/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Layers Is The Basic Tool To Create Anything On Photoshop. To Create More Complex Things, You Can Add Many Layers. This Way, When You Need To Make An Alteration, Or Can Edit By Part. Guides Help You Develop Your Project With More Perfection Because It Helps You Align Everything On The Page.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();        

    </script>

@endsection
