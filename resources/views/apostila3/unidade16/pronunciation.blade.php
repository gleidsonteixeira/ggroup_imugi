@extends('layouts.template')
@section('titulo','Unit 16 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade16" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 16</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 16/05_PRONUNCIATION/PRONUNCIATION_16.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">1 - Homographs 6</h5>
			<h5 class="barlow" style="margin-top:32px"><b>Examples:</b></h5>
			<p><b>Capital/Capital</b></p>
			<p>Observe the meaning of the words based on the context.</p>
			<p>Washington Dc is the <b>capital</b> of the USA.</p>
			<p>We write the months of the year with <b>capital</b> lett er. Example; June, July and etc.</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
