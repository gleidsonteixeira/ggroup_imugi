@extends('layouts.template')
@section('titulo','Unit 5 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade5" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 05</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 5/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - SEQUENCE WORDS/EXPRESSIONS</h5>

			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>FIRST</b></p>
				</li>
				<li>
					<p><b>SECOND</b></p>
				</li>
				<li>
					<p><b>NEXT</b></p>
				</li>
				<li>
					<p><b>BEFORE AFTER THAT</b></p>
				</li>
				<li>
					<p><b>THEN</b></p>
				</li>
				<li>
					<p><b>IN THE END</b></p>
				</li>
				<li>
					<p><b>FINALLY</b></p>
				</li>
			</ul>

			<h5 class="barlow" style="margin-top: 16px">B - CLARIFYNG SENTENCES</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 5/1. VOCABULARY/2. VOCABULARY.mp3') }}" type="audio/mp3">
			</audio>
			<div class="clear"></div>

			<table class="metade" style="margin-top:16px">
				<tr>
					<td>
						<p>What do you wanna mean?</p>
					</td>
					<td>
						<p>Can/Could you repeat please?</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>I don’t get it. Could you explain again?</p>
					</td>
					<td>
						<p>I didn’t get / understand.</p>
					</td>
				</tr>
			</table>

			<h5 class="barlow" style="margin-top: 16px">C - COMMON ADVERBS</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 5/1. VOCABULARY/3. VOCABULARY.mp3') }}" type="audio/mp3">
			</audio>
			<div class="clear"></div>

			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>WELL</b></p>
				</li>
				<li>
					<p><b>CAREFULLY</b></p>
				</li>
				<li>
					<p><b>PERFECTLY</b></p>
				</li>
				<li>
					<p><b>PROBABLY</b></p>
				</li>
				<li>
					<p><b>SPECIALLY</b></p>
				</li>

            </ul>
            <ul class="lista-inline upper">
                <li>
                    <p><b>SERIOUSLY</b></p>
                </li>
                <li>
                    <p><b>ABSOLUTELY</b></p>
                </li>
                <li>
                    <p><b>TERRIBLY</p>
                </li>
                <li>
                    <p><b>COMPLETELY</b></p>
                </li>
            </ul>
			<h5 class="barlow" style="margin-top: 16px">D - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 5/1. VOCABULARY/4. VOCABULARY.mp3') }}" type="audio/mp3">
			</audio>
			<div class="clear"></div>

			<ul class="lista-inline" style="margin-top:16px">
				<li>
					<p><b>TIPS</b></p>
				</li>
				<li>
					<p><b>SHARE</b></p>
				</li>
				<li>
					<p><b>MEAN</b></p>
				</li>
				<li>
					<p><b>STEPS</b></p>
				</li>
				<li>
					<p><b>NEED</b></p>
				</li>
				<li>
					<p><b>OPTIMIZE</b></p>
				</li>
				<li>
					<p><b>SEND</b></p>
				</li>
				<li>
					<p><b>MEETING</b></p>
				</li>
				<li>
					<p><b>UNFORTUNATELY</b></p>
				</li>
			</ul>

		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
