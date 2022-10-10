@extends('layouts.template')
@section('titulo','Unit 24 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade24" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 24</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 24/05_PRONUNCIATION/PRONUNCIATION_24.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 06</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">ʃ</h5></td>
					<td><h5 class="barlow">tʃ</h5></td>
				</tr>
				<tr>
					<td><p>shoes</p></td>
					<td><p>choose</p></td>
				</tr>
				<tr>
					<td><p>sheep</p></td>
					<td><p>cheap</p></td>
				</tr>
				<tr>
					<td><p>wash</p></td>
					<td><p>watch</p></td>
				</tr>
				<tr>
					<td><p>mash</p></td>
					<td><p>match</p></td>
				</tr>
				<tr>
					<td><p>cash</p></td>
					<td><p>catch</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
