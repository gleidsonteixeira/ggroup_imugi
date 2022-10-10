@extends('layouts.template')
@section('titulo','Unit 26 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade26" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 26</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 26/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO WRITE </b>/ beautifully / awfully</p>
				<p><b>TO BUY </b>/ tickets / cars / an idea</p>
				<p><b>TO DRAW </b>/ pictures / conclusions</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 26/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>Channel</b></p>
				</li>
				<li>
					<p><b>outdoor</b></p>
				</li>
				<li>
					<p><b>research</b></p>
				</li>
				<li>
					<p><b>Indoor</b></p>
				</li>
				<li>
					<p><b>Pay attention</b></p>
				</li>
            </ul>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>Shooting</b></p>
                </li>
                <li>
                    <p><b>affordable</b></p>
                </li>
                <li>
                    <p><b>synchronize </b></p>
                </li>
            <ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
