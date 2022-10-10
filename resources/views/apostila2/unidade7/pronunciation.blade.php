@extends('layouts.template')
@section('titulo','Unit 7 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade7" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 7</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 7/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li>
						<p><b>short e /ɛ/</b></p>
					</li>
					<li>
						<p>Let</p>
					</li>
					<li>
						<p>Get</p>
					</li>
					<li>
						<p>End</p>
					</li>
					<li>
						<p>Any</p>
					</li>
					<li>
						<p>Fell</p>
					</li>
					<li>
						<p>Bread</p>
					</li>
				</ul>
				<p class="lista-inline" style="margin-top:32px">L<b><u>e</u></b>t me get some br<b><u>e</u></b>ad in the <b><u>e</u></b>nd of the day.</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection