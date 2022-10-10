@extends('layouts.template')
@section('titulo','Unit 19 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade19" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 19</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 19/05_PRONUNCIATION/PRONUNCIATION_19.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<p style="margin-top:16px">
				A minimal pair is a pair of words which differ only in one sound. They are a great way to help
				your students become more aware of their difficulties with pronunciation. For example,
				Spanish students often struggle with the pairs “sheet” and “seat”, or “cat” and “cut”. They
				can really improve their pronunciation by practicing these pairs.
			</p>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">æ</h5></td>
					<td><h5 class="barlow">^</h5></td>
					<td><h5 class="barlow">ɪ</h5></td>
					<td><h5 class="barlow">i:</h5></td>
				</tr>
				<tr>
					<td><p>cat/</p></td>
					<td><p>cut/</p></td>
					<td><p>ship/</p></td>
					<td><p>sheep/</p></td>
				</tr>
				<tr>
					<td><p>ankle</p></td>
					<td><p>uncle</p></td>
					<td><p>it</p></td>
					<td><p>eat</p></td>
				</tr>
				<tr>
					<td><p>ran</p></td>
					<td><p>run</p></td>
					<td><p>hit</p></td>
					<td><p>heat</p></td>
				</tr>
				<tr>
					<td><p>drank</p></td>
					<td><p>drunk</p></td>
					<td><p>bin</p></td>
					<td><p>bean</p></td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td><p>live</p></td>
					<td><p>leave</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
