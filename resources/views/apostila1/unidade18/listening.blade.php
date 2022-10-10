@extends('layouts.template')
@section('titulo','Unit 18 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade18" data-etapa="listening">
				<h3 class="barlow">UNIT 18 - SHAPE TOOL & ADOBE KULER</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit18/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Shape Tool And Adobe Kuler Are Basic, Yet Extremely Important <b>Website</b> Development Tools. <b>Shape</b> Tool Allows You To <b>Select</b> A Pre-Existing Shape, Or Even <b>Create</b> A New One. These Shapes <b>Format</b> The General <b>Layout</b> Of The Page. Adobe <b>Kuler</b> Is A Color <b>Palet</b> App Which Permits You To Select Pre-Defined <b>Colors</b> Without Having The Create Them.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();        

    </script>

@endsection
