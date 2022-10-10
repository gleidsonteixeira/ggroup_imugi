@extends('layouts.template')
@section('titulo','Unit 31 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade31" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 31 - VIDEO EFFECTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit31/pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Notice the contractions in the tag questions.</h5>
				<ul class="lista-inline">
					<li><p><b>ISN’T HE?</b></p></li>
					<li><p><b>DOESN’T SHE?</b></p></li>
				</ul>
				<ul class="lista-inline">
					<li><p><b>AREN’T THEY?</b></p></li>
					<li><p><b>DOESN’T HE?</b></p></li>
				</ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
