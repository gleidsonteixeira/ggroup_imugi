@extends('layouts.template')
@section('titulo','Unit 17 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade17" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 17</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 17/01_VOCABULARY/VOCABULARY_17.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 17px">A - WORDS AND EXPRESSIONS</h5>
			<ul class="lista-inline upper" style="margin-top: 17px">
				<li><p><b>Quote Tweet</b></p></li>
				<li><p><b>Reach</b></p></li>
				<li><p><b>Retweet</b></p></li>
            </ul>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Became</b></p>
				</li>
				<li>
					<p><b>Amateur</b></p>
				</li>
				<li>
					<p><b>Realized</b></p>
				</li>
				<li>
					<p><b>Reach</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Otherwise</b></p>
				</li>
				<li>
					<p><b>Hire</b></p>
				</li>
				<li>
					<p><b>Scratch</b></p>
				</li>
				<li>
					<p><b>Label</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
