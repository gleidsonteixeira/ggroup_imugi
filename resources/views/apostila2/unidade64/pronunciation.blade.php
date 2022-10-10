@extends('layouts.template')
@section('titulo','Unit 64 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade64" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 64</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 64/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>

			<p style="margin-top:32px">
				<p>Tongue twisters</p>
				<p>“Susie works in a shoeshine shop. Where she shines she sits, and where she sits she shines”</p>
			</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
