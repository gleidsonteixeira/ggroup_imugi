@extends('layouts.template')
@section('titulo','Unit 18 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade18" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 18 - SHAPE TOOL & ADOBE KULER</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit18/pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>           
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Notice that when making a question, The intonation at the end of the sentence is usually rising. This occurs to express doubt.</h5>
				<div class="espacamento">
					<p>“Do Any Of You Know What They Are Used For?”</p>
					<p>“What Kinds Of Shapes Can You Create?”</p>								                
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
