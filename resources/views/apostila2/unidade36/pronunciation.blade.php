@extends('layouts.template')
@section('titulo','Unit 36 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade36" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 36</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 36/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<table class="metade center-align" style="margin-top:16px">
				<tr>
					<td colspan="2">
						<h5 class="barlow">Improving pronunciation - / teen / / ty /</h5>
					</td>
				</tr>
				<tr>
					<td>
						<p>Thir<b>teen</b></p>
					</td>
					<td>
						<p>Thir<b>ty</b></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Four<b>teen</b></p>
					</td>
					<td>
						<p>For<b>ty</b></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Fif<b>teen</b></p>
					</td>
					<td>
						<p>Fif<b>ty</b></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Six<b>teen</b></p>
					</td>
					<td>
						<p>Six<b>ty</b></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Seven<b>teen</b></p>
					</td>
					<td>
						<p>Seven<b>ty</b></p>
					</td>
				</tr>
			</table>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection