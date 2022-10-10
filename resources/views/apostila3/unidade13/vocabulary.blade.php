@extends('layouts.template')
@section('titulo','Unit 13 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade13" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 13</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 13/01_VOCABULARY/VOCABULARY_13.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Feed</b></p></li>
					<li><p><b>Filter</b></p></li>
					<li><p><b>Follower</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top">
					<li><p><b>Awesome</b></p></li>
					<li><p><b>Exchange</b></p></li>
					<li><p><b>Share</b></p></li>
					<li><p><b>Saw</b></p></li>
					<li><p><b>Value</b></p></li>
					<li><p><b>Said</b></p></li>
					<li><p><b>Called</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
