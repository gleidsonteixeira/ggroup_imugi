@extends('layouts.template')
@section('titulo','Unit 9 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade9" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 9/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>short i /ɪ/</b>
						<p>
				</li>
				<li>
					<p>In</p>
				</li>
				<li>
					<p>Bit</p>
				</li>
				<li>
					<p>This</p>
				</li>
				<li>
					<p>Give</p>
				</li>
				<li>
					<p>Sister</p>
				</li>
				<li>
					<p>City</p>
				</li>
				<li>
					<p>Will</p>
				</li>
			</ul>
			<p class="lista-inline" style="margin-top:32px">My s<b><u>i</u></b>ster L<b><u>i</u></b>nda w<b><u>i</u></b>ll l<b><u>i</u></b>ve <b><u>i</u></b>n a b<b><u>i</u></b>g city. </ol>
				<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection