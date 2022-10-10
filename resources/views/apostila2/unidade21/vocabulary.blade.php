@extends('layouts.template')
@section('titulo','Unit 21 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade21" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 21</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 21/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO BRUSH </b>/ your hair / your teeth</p>
				<p><b>TO DO </b>/ your best / the right-wrong thing</p>
				<p><b>TO COMB </b>/ your hair</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 21/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>CAME</b></p>
				</li>
				<li>
					<p><b>CHILDHOOD</b></p>
				</li>
				<li>
					<p><b>A LOT</b></p>
				</li>
				<li>
					<p><b>TOGETHER</b></p>
				</li>
				<li>
					<p><b>YOUNGER</b></p>
				</li>
				<li>
					<p><b>ALL DAY LONG</b></p>
				</li>
				<li>
					<p><b>KIND OF</b></p>
				</li>
				<li>
					<p><b>LOOK FOR</p>
				</li>
			</ul>

		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection