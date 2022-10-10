@extends('layouts.template')
@section('titulo','Unit 29 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade29" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 29</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 29/01_VOCABULARY/VOCABULARY_29.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 32px">A - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>To Debate</b></p>
				</li>
				<li>
					<p><b>Skills</b></p>
				</li>
				<li>
					<p><b>To Cope With</b></p>
				</li>
				<li>
					<p><b>Properly</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Reminder</b></p>
				</li>
				<li>
					<p><b>Steam</b></p>
				</li>
				<li>
					<p><b>Mass</b></p>
				</li>
				<li>
					<p><b>Blurring</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
