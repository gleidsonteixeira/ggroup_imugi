@extends('layouts.template')
@section('titulo','Unit 29 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade29" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 29</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 29/05_PRONUNCIATION/PRONUNCIATION_29.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 11</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">w</h5></td>
					<td><h5 class="barlow">v</h5></td>
				</tr>
				<tr>
					<td><p>wine</p></td>
					<td><p>vine</p></td>
				</tr>
				<tr>
					<td><p>west</p></td>
					<td><p>vest</p></td>
				</tr>
				<tr>
					<td><p>while</p></td>
					<td><p>vile</p></td>
				</tr>
				<tr>
					<td><p>wet</p></td>
					<td><p>vet</p></td>
				</tr>
				<tr>
					<td><p>wary</p></td>
					<td><p>vary</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
