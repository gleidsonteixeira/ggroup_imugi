@extends('layouts.template')
@section('titulo','Unit 7 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade7" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 7</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 7/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - SEASONS OF THE YEAR.</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Winter</b></p>
				</li>
				<li>
					<p><b>Spring</b></p>
				</li>
				<li>
					<p><b>Summer</b></p>
				</li>
				<li>
					<p><b>Fall</b></p>
				</li>
			</ul>
			<h5 class="barlow" style="margin-top: 16px">B - TIME EXPRESSIONS.</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 7/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Now</b></p>
				</li>
				<li>
					<p><b>Right now</b></p>
				</li>
				<li>
					<p><b>These days</b></p>
				</li>
				<li>
					<p><b>This week</b></p>
				</li>
				<li>
					<p><b>This month</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>This year</b></p>
				</li>
				<li>
					<p><b>At the moment</b></p>
				</li>
				<li>
					<p><b>At the present Presently</b></p>
				</li>
				<li>
					<p><b>Nowadays</b></p>
				</li>
				<li>
					<p><b>Currently</b></p>
				</li>
			</ul>
			<h5 class="barlow" style="margin-top: 16px">C - WORDS IN CONTEXT.</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 7/1. VOCABULARY/3. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Going to</b></p>
				</li>
				<li>
					<p><b>Current</b></p>
				</li>
				<li>
					<p><b>Developing</b></p>
				</li>
				<li>
					<p><b>Briefing</b></p>
				</li>
				<li>
					<p><b>Scope</b></p>
				</li>
				<li>
					<p><b>Cool</b></p>
				</li>
				<li>
					<p><b>Adding</b></p>
				</li>
				<li>
					<p><b>Synchronize</b></p>
				</li>
				<li>
					<p><b>Outline</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection