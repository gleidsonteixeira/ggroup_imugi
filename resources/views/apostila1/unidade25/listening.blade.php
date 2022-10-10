@extends('layouts.template')
@section('titulo','Unit 25 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade25" data-etapa="listening">
				<h3 class="barlow">UNIT 25 - PEN TOOLS</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit25/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Photoshop provides multiple <b>Pen</b>. tools The standard Pen tool <b>draws</b> with the greatest <b>precision</b>; the Freeform Pen tool draws paths as if you <b>were</b> drawing with pencil on paper, and the magnetic pen option lets you draw a path that snaps to the edges of defined areas in your <b>image</b>. You can use the <b>pen</b> tools in conjunction with the <b>shape</b> tools to <b>create</b> complex shapes.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
