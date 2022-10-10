@extends('layouts.template')
@section('titulo','Unit 17 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade17" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 17</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 17/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO WAIT FOR </b>/somebody /an opportunity</p>
				<p><b>TO CHANGE </b>/ opinion / attitude</p>
				<p><b>TO CREATE </b>/ questions / problems</p>
				<p><b>TO GET </b>/ excited / nervous / stressed / a bus</p>
				<p><b>TO UNDERSTAND </b>/ a question / a problem</p>
				<p><b>TO WANT </b>/ something badly</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 17/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>Crossing </b></p>
				</li>
				<li>
					<p><b>Sharing </b></p>
				</li>
				<li>
					<p><b>Becoming </b></p>
				</li>
				<li>
					<p><b>Fan </b></p>
				</li>
				<li>
					<p><b>Leaving </b></p>
				</li>
				<li>
					<p><b>Sick </b></p>
				</li>
				<li>
					<p><b>Incident </b></p>
				</li>
				<li>
					<p><b>Meet</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection