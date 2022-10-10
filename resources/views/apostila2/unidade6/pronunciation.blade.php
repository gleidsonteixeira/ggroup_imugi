@extends('layouts.template')
@section('titulo','Unit 6 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade6" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 6/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>

			<h5 class="barlow" style="margin-top: 16px">A - Practice The Pronunciation Of The Letter D In The Beginning And Middle Of Words.</h5>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li>
						<p><b>long e /i/</b></p>
					</li>
					<li>
						<p>Read</p>
					</li>
					<li>
						<p>Meat</p>
					</li>
					<li>
						<p>Seat</p>
					</li>
					<li>
						<p>Seen</p>
					</li>
					<li>
						<p>Feet</p>
					</li>
					<li>
						<p>deep</p>
					</li>
				</ul>
				<p style="margin-top: 32px">Pl<b>ea</b>se eat the m<b>ea</b>t and the ch<b>ee</b>se before you l<b>ea</b>ve.</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection