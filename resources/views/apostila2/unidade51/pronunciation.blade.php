@extends('layouts.template')
@section('titulo','Unit 51 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade51" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 51</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 51/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>m sound</b> /m/ </p>
				</li>
				<li>
					<p>Method</p>
				</li>
				<li>
					<p>Manager</p>
				</li>
				<li>
					<p>Almost Format Calm</p>
				</li>
				<li>
					<p>Time</p>
				</li>
			</ul>
			<p style="margin-top:32px">
				The manager method was efficient for almost calming the client down. Now they know
				that the problem is matter of time and format.
			</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection