@extends('layouts.template')
@section('titulo','Unit 40 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade40" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 40</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 40/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<div class="espacamento">
				<h5 class="barlow" style="margin-top:32px">Improving pronunciation - / j /</h5>
				<p style="margin-top:32px">
					<p><b>J</b>ack <b>J</b>ohn <b>J</b>effrey <b>j</b>ogs to his <b>j</b>ob.</p>
					<p><b>J</b>im <b>J</b>ones’ <b>j</b>eep is completely <b>j</b>ammed.</p>
					<p><b>J</b>oe’s <b>j</b>eans <b>J</b>acket is from <b>J</b>apan.</p>
				</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection