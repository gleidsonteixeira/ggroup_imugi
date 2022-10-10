@extends('layouts.template')
@section('titulo','Unit 10 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade10" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 10</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 10/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>long o /oʊ/</b></p>
				</li>
				<li>
					<p>Go</p>
				</li>
				<li>
					<p>Slow</p>
				</li>
				<li>
					<p>So</p>
				</li>
				<li>
					<p>Those Post</p>
				</li>
				<li>
					<p>Drove moment</p>
				</li>
			</ul>
			<p class="lista-inline" style="margin-top:32px">Don’t g<b><u>o</u></b> too sl<b><u>o</u></b>w. The m<b><u>o</u></b>ment you called, he dr<b><u>o</u></b>ve to the p<b><u>o</u></b>st. </ol>
				<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection