@extends('layouts.template')
@section('titulo','Unit 26 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade26" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 26</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 26/05_PRONUNCIATION/PRONUNCIATION_26.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 08</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">s</h5></td>
					<td><h5 class="barlow">θ</h5></td>
				</tr>
				<tr>
					<td><p>sin</p></td>
					<td><p>thin</p></td>
				</tr>
				<tr>
					<td><p>sum</p></td>
					<td><p>thumb</p></td>
				</tr>
				<tr>
					<td><p>sank</p></td>
					<td><p>thank</p></td>
				</tr>
				<tr>
					<td><p>sink</p></td>
					<td><p>think</p></td>
				</tr>
				<tr>
					<td><p>saw</p></td>
					<td><p>thaw</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
