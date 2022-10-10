@extends('layouts.template')
@section('titulo','Unit 38 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade38" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 38</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 38/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO COUNT </b>/ to ten / on somebody</p>
				<p><b>TO FORGET </b>/ things / people / to do things</p>
				<p><b>TO GIVE </b>/ attention / love / a break</p>
			</div>

			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 38/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div style="margin-top: 36px">
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li>
						<p><b>Add</b></p>
					</li>
					<li>
						<p><b>Goals</b></p>
					</li>
					<li>
						<p><b>Accomplish</b></p>
					</li>
					<li>
						<p><b>Tend</b></p>
					</li>
					<li>
						<p><b>Pitfalls</b></p>
					</li>
					<li>
						<p><b>Ultimate</b></p>
					</li>
					<li>
						<p><b>Upon</b></p>
					</li>
					<li>
						<p><b>Feasible</b></p>
					</li>
					<li>
						<p><b>Fail</b></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection