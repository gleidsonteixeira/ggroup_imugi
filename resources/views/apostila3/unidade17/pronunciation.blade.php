@extends('layouts.template')
@section('titulo','Unit 17 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade17" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 17</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 17/05_PRONUNCIATION/PRONUNCIATION_17.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">1 - Homographs 7</h5>
			<h5 class="barlow" style="margin-top:32px"><b>Examples:</b></h5>
			<p><b>Letter/Letter</b></p>
			<p>Observe the meaning of the words based on the context.</p>
			<p>I received a <b>letter</b> from a blog I follow.</p>
			<p>“Letter” is written with two <b>letters</b> “t”.</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
