@extends('layouts.template')
@section('titulo','Unit 25 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade25" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 25</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 25/05_PRONUNCIATION/PRONUNCIATION_25.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 07</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">d</h5></td>
					<td><h5 class="barlow">ð</h5></td>
				</tr>
				<tr>
					<td><p>doze</p></td>
					<td><p>those</p></td>
				</tr>
				<tr>
					<td><p>day</p></td>
					<td><p>they</p></td>
				</tr>
				<tr>
					<td><p>dare</p></td>
					<td><p>there</p></td>
				</tr>
				<tr>
					<td><p>den</p></td>
					<td><p>then</p></td>
				</tr>
				<tr>
					<td><p>dough</p></td>
					<td><p>though</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
