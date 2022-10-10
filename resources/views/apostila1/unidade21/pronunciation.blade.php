@extends('layouts.template')
@section('titulo','Unit 21 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade21" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit21/pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe how the pronounciation of “Used To” and “Use To” are identical.</h5>
				<div class="espacamento">	
					<p>I Used To Go There Every Day, But I Didn’t Use To Stay For Very Long</p>
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
