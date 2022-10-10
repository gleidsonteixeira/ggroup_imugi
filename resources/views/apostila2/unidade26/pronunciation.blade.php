@extends('layouts.template')
@section('titulo','Unit 26 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade26" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 26</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 26/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>r sound /r/</b></p>
				</li>
				<li>
					<p>Ready</p>
				</li>
				<li>
					<p>Receive</p>
				</li>
				<li>
					<p>Group</p>
				</li>
				<li>
					<p>Friends</p>
				</li>
				<li>
					<p>Celebrate</p>
				</li>
				<li>
					<p>year</p>
				</li>
			</ul>

			<p style="margin-top:32px">We a<b><u>r</u></b>e ready to <b><u>r</u></b>eceive a g<b><u>r</u></b>oup of f<b><u>r</u></b>iends to celeb<b><u>r</u></b>ate the end of the yea<b><u>r</u></b>.</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection