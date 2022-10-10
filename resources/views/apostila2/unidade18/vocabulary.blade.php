@extends('layouts.template')
@section('titulo','Unit 18 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade18" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 18</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 18/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO PUT </b>/things in order</p>
				<p><b>TO DO </b>/ your best / the right-wrong thing</p>
				<p><b>TO LOOK </b>/ carefully /careleesly</p>
				<p><b>TO STUDY </b>/ hard/ a lot /for hours</p>
				<p><b>TO SPEAK </b>/ fast / slowly / low / loud</p>
				<p><b>TO BECOME </b>/ a better person / good friends</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 18/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>Modeling</b></p>
				</li>
				<li>
					<p><b>Soundtrack</b></p>
				</li>
				<li>
					<p><b>Showed</b></p>
				</li>
				<li>
					<p><b>Mixing</b></p>
				</li>
				<li>
					<p><b>Own</b></p>
				</li>
				<li>
					<p><b>While</b></p>
				</li>
				<li>
					<p><b>Booth</b></p>
				</li>
				<li>
					<p><b>tricks</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection