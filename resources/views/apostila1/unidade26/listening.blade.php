@extends('layouts.template')
@section('titulo','Unit 26 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade26" data-etapa="listening">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit26/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>The <b>Brush tool</b> is a basic painting tool. It <b>works</b> like a traditional drawing tool by applying the <b>color</b> using strokes. The standard Pen tool draws with the greatest precision; the Freeform Pen tool draws paths as if you were drawing with pencil on paper. The eraser is basically a brush which erases <b>pixels</b> as you drag it across the <b>image</b>. Pixels are erased to transparency, or the background color if the <b>layer</b> is locked.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
