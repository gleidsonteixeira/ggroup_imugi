@extends('layouts.template')
@section('titulo','Unit 30 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade30" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 30</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 30/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>sh sound / ʃ/</b></p>
				</li>
				<li>
					<p>She</p>
				</li>
				<li>
					<p>Show</p>
				</li>
				<li>
					<p>Special</p>
				</li>
				<li>
					<p>Emotion</p>
				</li>
				<li>
					<p>Finish</p>
				</li>
				<li>
					<p>Publish</p>
				</li>
			</ul>
			<p style="margin-top:32px"><b><u>Sh</u></b>e <b><u>sh</u></b>ows a spe<b><u>ci</u></b>al emo<b><u>ti</u></b>on when <b><u>sh</u></b>e fini<b><u>sh</u></b>es and publi<b><u>sh</u></b>es her articles.</ol>
				<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection