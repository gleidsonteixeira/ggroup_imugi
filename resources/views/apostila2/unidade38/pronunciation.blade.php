@extends('layouts.template')
@section('titulo','Unit 38 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade38" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 38</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 38/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<table class="metade espacamento center-align" style="margin-top:16px">
				<tr>
					<td colspan="3">
						<h5 class="barlow">Improving pronunciation - / g /</h5>
					</td>
				</tr>
				<tr>
					<td>
						<p><b>G</b>ara<b>g</b>e</p>
					</td>
					<td>
						<p><b>G</b>el</p>
					</td>
					<td>
						<p><b>G</b>od</p>
					</td>
				</tr>
				<tr>
					<td>
						<p><b>G</b>iraffe</p>
					</td>
					<td>
						<p><b>G</b>olf</p>
					</td>
					<td>
						<p><b>G</b>ym</p>
					</td>
				</tr>
				<tr>
					<td>
						<p><b>G</b>eo<b>g</b>raphy</p>
					</td>
					<td>
						<p><b>G</b>eor<b>g</b>e</p>
					</td>
					<td>
						<p><b>G</b>allery</p>
					</td>
				</tr>
				<tr>
					<td>
						<p><b>G</b>eena</p>
					</td>
					<td>
						<p><b>G</b>ary</p>
					</td>
					<td>
						<p>Bug</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Wa<b>g</b>on</p>
					</td>
					<td>
						<p>Wa<b>g</b>e</p>
					</td>
					<td>
						<p>Bi<b>g</b></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Ba<b>g</b></p>
					</td>
					<td>
						<p>Bud<b>g</b>et</p>
					</td>
					<td>
						<p>Frid<b>g</b>e</p>
					</td>
				</tr>
			</table>
			<p style="margin-top:32px">
				<p><b>G</b>eorge’s bi<b>g</b> ba<b>g</b> is at the <b>g</b>ym.</p>
				<p>The <b>g</b>allery bud<b>g</b>et is in <b>G</b>eena’s hands.</p>
				<p>The frid<b>g</b>e is in the wa<b>g</b>on in <b>G</b>ary’s <b>g</b>olf club.</p>
			</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection