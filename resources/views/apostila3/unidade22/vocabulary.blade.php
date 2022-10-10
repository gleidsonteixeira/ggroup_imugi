@extends('layouts.template')
@section('titulo','Unit 22 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade22" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 22</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 22/01_VOCABULARY/VOCABULARY_22.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 32px">A - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Channel</b></p>
				</li>
				<li>
					<p><b>Improve</b></p>
				</li>
				<li>
					<p><b>To mention</b></p>
				</li>
				<li>
					<p><b>Content</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Tricks</b></p>
				</li>
				<li>
					<p><b>Make up</b></p>
				</li>
				<li>
					<p><b>Delivery</b></p>
				</li>
				<li>
					<p><b>Visagism</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
