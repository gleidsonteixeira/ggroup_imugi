@extends('layouts.template')
@section('titulo','Unit 27 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade27" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 27</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 27/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>h sound /h/</b></p>
				</li>
				<li>
					<p>Hear</p>
				</li>
				<li>
					<p>History</p>
				</li>
				<li>
					<p>Habits</p>
				</li>
				<li>
					<p>Behind</p>
				</li>
				<li>
					<p>Who</p>
				</li>
				</p>
				<li>
					<p>Horse</p>
				</li>
			</ul>
			<p style="margin-top:32px">W<b><u>h</u></b>o <b><u>h</u></b>eard the <b><u>h</u></b>istory of Napoleon’s <b><u>h</u></b>orse and its bad <b><u>h</u></b>abits.</ol>
				<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection