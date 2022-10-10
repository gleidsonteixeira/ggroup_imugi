@extends('layouts.template')
@section('titulo','Unit 33 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade33" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 33</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<!--<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
			<!-- nao tem audio ainda -->
			<div class="clear"></div>

			<p style="margin-top:32px"><b>Improving your Pronunciation</b></p>
			<p>
				<b>Th</b>ere are four <b>ch</b>ampions here today. They are <b>Ch</b>arles <b>Sh</b>urmman Mit<b>ch</b>um, <b>Sh</b>aron
				<b>Ch</b>elsea <b>Ch</b>in, <b>Sh</b>eila <b>Ch</b>ase <b>Sh</b>ea, <b>Ch</b>evy <b>Sh</b>eldon, <b>Ch</b>arleston <b>Ch</b>ester.
				<b>Th</b>ere are also 4 vice-<b>ch</b>ampions: <b>Th</b>eo <b>Hil</b>ton <b>Th</b>ea, Hilary Hi<b>ll R</b>ea, <b>Th</b>omas Von
				<b>Th</b>ompson, <b>Th</b>eresa U<b>th</b>a <b>Th</b>urman, <b>Th</b>ey are waiting to <b>r</b>eceive <b>th</b>eir medals.
			</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection