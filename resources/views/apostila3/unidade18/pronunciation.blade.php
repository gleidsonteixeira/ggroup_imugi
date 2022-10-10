@extends('layouts.template')
@section('titulo','Unit 18 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade18" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 18</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 18/05_PRONUNCIATION/PRONUNCIATION_18.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">1 - Homographs 8</h5>
			<h5 class="barlow" style="margin-top:18px"><b>Examples:</b></h5>
			<p><b>Watch/Watch</b></p>
			<p>Observe the meaning of the words based on the context</p>
			<p>My <b>watch</b> is broken. I got used to checking the time in my cell phone.</p>
			<p>I have to <b>watch</b> the last Avengers movie. It’s awesome</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
