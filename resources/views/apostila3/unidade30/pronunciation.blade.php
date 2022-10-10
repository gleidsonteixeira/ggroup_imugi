@extends('layouts.template')
@section('titulo','Unit 30 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade30" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 30</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 30/05_PRONUNCIATION/PRONUNCIATION_30.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 12</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">v</h5></td>
					<td><h5 class="barlow">b</h5></td>
				</tr>
				<tr>
					<td><p>vote</p></td>
					<td><p>boat</p></td>
				</tr>
				<tr>
					<td><p>very</p></td>
					<td><p>berry</p></td>
				</tr>
				<tr>
					<td><p>van</p></td>
					<td><p>ban</p></td>
				</tr>
				<tr>
					<td><p>vest</p></td>
					<td><p>best</p></td>
				</tr>
				<tr>
					<td><p>vet</p></td>
					<td><p>bet</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
