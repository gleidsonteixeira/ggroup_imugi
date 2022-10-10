@extends('layouts.template')
@section('titulo','Unit 40 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade40" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 40</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 40/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO TAKE </b>/ a bus / a decision / a shower / a break / a nap / a chance</p>
				<p><b>TO THINK </b>/ about something- someone / once / twice / over and over</p>
				<p><b>TO TRY </b>/ hard / to do something / a new dish / a different food</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 40/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 36px">
				<li>
					<p><b>Find</b></p>
				</li>
				<li>
					<p><b>won</b></p>
				</li>
				<li>
					<p><b>Trying</b></p>
				</li>
				<li>
					<p><b>Cheese</b></p>
				</li>
				<li>
					<p><b>Trap</b></p>
				</li>
				<li>
					<p><b>Close</b></p>
				</li>
				<li>
					<p><b>Funny</b></p>
				</li>
				<li>
					<p><b>Recites</b></p>
				</li>
				<li>
					<p><b>Take</b></p>
				</li>
				<li>
					<p><b>place</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection