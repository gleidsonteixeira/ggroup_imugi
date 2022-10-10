@extends('layouts.template')
@section('titulo','Unit 29 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade29" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 29</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 29/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>ch sound /ʧ/</b></p>
				</li>
				<li>
					<p>Much</p>
				</li>
				<li>
					<p>Teach</p>
				</li>
				<li>
					<p>Watch</p>
				</li>
				<li>
					<p>Challenge</p>
				</li>
				<li>
					<p>Change</p>
				</li>
				<li>
					<p>Channel</p>
				</li>
				<li>
					<p>Choose</p>
				</li>
				<li>
					<p>Check</p>
				</li>
			</ul>

			<p style="margin-top:32px">The tea<b><u>ch</u></b>er is going to <b><u>ch</u></b>ange the <b><u>cha</u></b>llenge to <b><u>ch</u></b>eck how mu<b><u>ch</u></b> time students spend <b><u>choo</u></b>sing and wat<b><u>ch</u></b>ing youtube <b><u>cha</u></b>nnels.</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection