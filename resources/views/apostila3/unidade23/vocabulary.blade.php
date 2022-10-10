@extends('layouts.template')
@section('titulo','Unit 23 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade23" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 23</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 23/01_VOCABULARY/VOCABULARY_23.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 32px">A - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Research</b></p>
				</li>
				<li>
					<p><b>War</b></p>
				</li>
				<li>
					<p><b>Leadership</b></p>
				</li>
				<li>
					<p><b>Spent</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Behavior</b></p>
				</li>
				<li>
					<p><b>Address</b></p>
				</li>
				<li>
					<p><b>league</b></p>
				</li>
				<li>
					<p><b>Legend</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
