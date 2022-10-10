@extends('layouts.template')
@section('titulo','Unit 13 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade13" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 13</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 13/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - PARTS OF THE BODY</h5>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>Head</p></b>
				</li>
				<li>
					<p><b>Face</p></b>
				</li>
				<li>
					<p><b>Eyes</p></b>
				</li>
				<li>
					<p><b>Nose</p></b>
				</li>
				<li>
					<p><b>Mouth</p></b>
				</li>
				<li>
					<p><b>Teeth</p></b>
				</li>
				<li>
					<p><b>Took</p></b>
				</li>
				<li>
					<p><b>Neck</p></b>
				</li>
				<li>
					<p><b>Body</p></b>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>Hand</b></p>
				</li>
				<li>
					<p><b>Finger</b></p>
				</li>
				<li>
					<p><b>Elbow</b></p>
				</li>
				<li>
					<p><b>Arm</b></p>
				</li>
				<li>
					<p><b>Foot</b></p>
				</li>
				<li>
					<p><b>Toe</b></p>
				</li>
				<li>
					<p><b>Ankle</b></p>
				</li>
				<li>
					<p><b>Knee</b></p>
				</li>
				<li>
					<p><b>Leg</b></p>
				</li>
			</ul>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 13/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>Small </b></p>
				</li>
				<li>
					<p><b>Twisted </b></p>
				</li>
				<li>
					<p><b>Feel down </b></p>
				</li>
				<li>
					<p><b>Hit </b></p>
				</li>
				<li>
					<p><b>Floor </b></p>
				</li>
				<li>
					<p><b>Awesome </b></p>
				</li>
				<li>
					<p><b>Took</b></p>
				</li>
				<li>
					<p><b>Count on Buddy</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection