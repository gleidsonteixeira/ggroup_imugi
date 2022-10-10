@extends('layouts.template')
@section('titulo','Unit 52 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade52" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 52</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 52/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>n sound</b> /n/ </p>
				</li>
				<li>
					<p>Negative</p>
				</li>
				<li>
					<p>Note</p>
				</li>
				<li>
					<p>Annual Dinner Creation</p>
				</li>
				<li>
					<p>Woman</p>
				</li>
			</ul>
			<p style="margin-top:32px">
				There’s a negative note in the newspaper saying that the annual dinner to celebrate the
				best Creator is not gonna happen. That woman is crazy to say that.
			</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection