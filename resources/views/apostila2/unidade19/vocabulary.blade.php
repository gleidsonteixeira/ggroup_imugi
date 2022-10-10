@extends('layouts.template')
@section('titulo','Unit 19 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade19" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 19</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 19/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO BEGIN </b>/ with / by doing something</p>
				<p><b>TO PREPARE </b>/ a meal / a report</p>
				<p><b>TO START </b>/ a relationship / a game / talking</p>
				<p><b>TO STOP </b>/dancing / smoking</p>
				<p><b>TO TRAVEL </b>/ alone / by yourself / with friends</p>
				<p><b>TO LIVE </b>/ alone / by yourself</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 19/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>See</b></p>
				</li>
				<li>
					<p><b>Worldwide</b></p>
				</li>
				<li>
					<p><b>Kidding</b></p>
				</li>
				<li>
					<p><b>Terrific</b></p>
				</li>
				<li>
					<p><b>So far</b></p>
				</li>
				<li>
					<p><b>scratch</b></p>
				</li>
				<li>
					<p><b>Release</b></p>
				</li>
				<li>
					<p><b>Astonished</b></p>
				</li>
				<li>
					<p><b>Chance</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection