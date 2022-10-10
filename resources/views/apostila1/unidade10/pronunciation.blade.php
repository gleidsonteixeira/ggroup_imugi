@extends('layouts.template')
@section('titulo','Unit 10 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade10" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit10/pronunciation/pronunciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to your teacher as he reads the following words, and then repeat them. Observe the underlined letters.</h5>
				<ul class="lista-inline">
                    <li><p><b>GO</b></p></li>
                    <li><p><b>LOVE</b></p></li>
                    <li><p><b>SHOW</b></p></li>
                    <li><p><b>FROM</b></p></li>
                    <li><p><b>WORK</b></p></li>
                    <li><p><b>NICOLAS</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Read the sentence after your teacher</h5>
                <div class="espacamento">
                    <p>“I Love Going To Shows With Nicolas”</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
