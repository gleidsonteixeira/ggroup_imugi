@extends('layouts.template')
@section('titulo','Unit 27 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade27" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 27</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 27/01_VOCABULARY/VOCABULARY_27.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 32px">A - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Whatever</b></p>
				</li>
				<li>
					<p><b>To Become</b></p>
				</li>
				<li>
					<p><b>Priceless</b></p>
				</li>
				<li>
					<p><b>Sustainability</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>To Believe</b></p>
				</li>
				<li>
					<p><b>To Invite</b></p>
				</li>
				<li>
					<p><b>Wherever</b></p>
				</li>
				<li>
					<p><b>Confident</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
