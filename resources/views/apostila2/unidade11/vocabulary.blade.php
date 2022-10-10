@extends('layouts.template')
@section('titulo','Unit 11 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade11" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 11</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 11/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - EXPRESSIONS</h5>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>For sure</b></p>
				</li>
				<li>
					<p><b>By the way</b></p>
				</li>
				<li>
					<p><b>As I said/mentioned</b></p>
				</li>
				<li>
					<p><b>I have no idea</b></p>
				</li>
				<li>
					<p><b>Well, let me see</b></p>
				</li>
				<li>
					<p><b>Well, let me think</b></p>
				</li>
				<li>
					<p><b>I have to think about it</b></p>
				</li>
				<li>
					<p><b>That’s a good question</b></p>
				</li>
			</ul>
			<h5 class="barlow" style="margin-top: 16px">B – WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 11/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>Finish</b></p>
				</li>
				<li>
					<p><b>Currently</b></p>
				</li>
				<li>
					<p><b>Actually</b></p>
				</li>
				<li>
					<p><b>Touch</b></p>
				</li>
				<li>
					<p><b>Take</b></p>
				</li>
				<li>
					<p><b>NGO</b></p>
				</li>
				<li>
					<p><b>Orphan</b></p>
				</li>
				<li>
					<p><b>Getting</b></p>
				</li>
				<li>
					<p><b>back</b></p>
				</li>
				<li>
					<p><b>Choose</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection