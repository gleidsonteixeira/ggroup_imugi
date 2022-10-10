@extends('layouts.template')
@section('titulo','Unit 12 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade12" data-etapa="listening">
				<h3 class="barlow">UNIT 12 - TYPE TOOL & STYLE PANEL</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit12/listening/listening.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>
                        Typography Is An Important Aspect Of Graphic <b>Design</b>. It Is Crucial For The <b>Creation</b> Of
                        <b>Banners</b>, Flyers, Packages, Books And Sites. To <b>Select</b> The Typography You Want, You <b>Need</b>
                        To Know How To Use Two Fundamental Tools. The First Is Called Horizontal Type Tool. It
                        Is Used To <b>Choose</b> The <b>Font</b> You Want. The Second Is Called <b>Style</b> Panel, Where You Can
                        Select The Style Of The Text With A Variety Of <b>Textures</b>, <b>Colors</b>, <b>Dimensions</b> And More.
                    </p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
