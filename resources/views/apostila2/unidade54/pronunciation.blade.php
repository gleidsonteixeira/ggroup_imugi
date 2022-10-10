@extends('layouts.template')
@section('titulo','Unit 54 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade54" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 54</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 54/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>s sound</b> /s/</p>
				</li>
				<li>
					<p>System Select</p>
				</li>
				<li>
					<p>Best</p>
				</li>
				<li>
					<p>Cancel Nice</p>
				</li>
				<li>
					<p>License</p>
				</li>
			</ul>
			<p style="margin-top:32px">
				She is gonna cancel the current license. We have to select the best system
				to the company. It’s a nice decision.
			</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection