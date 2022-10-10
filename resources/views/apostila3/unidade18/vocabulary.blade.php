@extends('layouts.template')
@section('titulo','Unit 18 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade18" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 18</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 18/01_VOCABULARY/VOCABULARY_18.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 18px">A - WORDS AND EXPRESSIONS</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li><p><b>User-generated content</b></p></li>
				<li><p><b>Verified</b></p></li>
				<li><p><b>Viral</b></p></li>
            </ul>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Meet</b></p>
				</li>
				<li>
					<p><b>Deadline</b></p>
				</li>
				<li>
					<p><b>Tiring</b></p>
				</li>
				<li>
					<p><b>Pop Up</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Make Up</b></p>
				</li>
				<li>
					<p><b>Trick</b></p>
				</li>
				<li>
					<p><b>Keep Track</b></p>
				</li>
				<li>
					<p><b>Meaningful</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
