@extends('layouts.template')
@section('titulo','Unit 21 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade21" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 21</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 21/05_PRONUNCIATION/PRONUNCIATION_21.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 03</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">æ</h5></td>
					<td><h5 class="barlow">eɪ</h5></td>
					<td><h5 class="barlow">ɑ:</h5></td>
					<td><h5 class="barlow">ɔ:</h5></td>
				</tr>
				<tr>
					<td><p>hat</p></td>
					<td><p>hate</p></td>
					<td><p>far</p></td>
					<td><p>four</p></td>
				</tr>
				<tr>
					<td><p>mad</p></td>
					<td><p>made</p></td>
					<td><p>tart</p></td>
					<td><p>taught</p></td>
				</tr>
				<tr>
					<td><p>lack</p></td>
					<td><p>lake</p></td>
					<td><p>part</p></td>
					<td><p>port</p></td>
				</tr>
				<tr>
					<td><p>back</p></td>
					<td><p>bake</p></td>
					<td><p>farm</p></td>
					<td><p>form</p></td>
				</tr>
				<tr>
					<td><p>cap</p></td>
					<td><p>cape</p></td>
					<td><p>barn</p></td>
					<td><p>born</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
