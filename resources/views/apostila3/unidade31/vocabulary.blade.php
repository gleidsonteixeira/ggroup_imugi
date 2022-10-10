@extends('layouts.template')
@section('titulo','Unit 31 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade31" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 31</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 31/01_VOCABULARY/VOCABULARY_31.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 32px">A - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>To disappear</b></p>
				</li>
				<li>
					<p><b>Workplace</b></p>
				</li>
				<li>
					<p><b>Trend</b></p>
				</li>
				<li>
					<p><b>Rise</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Chaperone</b></p>
				</li>
				<li>
					<p><b>Role</b></p>
				</li>
				<li>
					<p><b>To demand</b></p>
				</li>
				<li>
					<p><b>To emerge</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
