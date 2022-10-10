@extends('layouts.template')
@section('titulo','Unit 10 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade10" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 10/01_VOCABULARY/VOCABULARY_10.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top:16px">A -  SOCIAL MEDIA GLOSSARY</h5>
				<ul class="lista-inline upper">
					<li><p><b>Algorithm</b></p></li>
					<li><p><b>Analytics</b></p></li>
					<li><p><b>Bio</b></p></li>
				</ul>
				<p><a href="https://www.hopperhq.com/social-media-marketing-glossary-2018/">https://www.hopperhq.com/social-media-marketi ng-glossary-2018/</a></p>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Rest</b></p></li>
					<li><p><b>Kind Of</b></p></li>
					<li><p><b>Still</b></p></li>
					<li><p><b>Increase</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Triggers</b></p></li>
					<li><p><b>Huge</b></p></li>
					<li><p><b>Guess</b></p></li>
					<li><p><b>Believe</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
