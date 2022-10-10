@extends('layouts.template')
@section('titulo','Unit 8 | Aula 18 – Pintura Digital II - Iluminação e Sombreamento')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade8" data-etapa="aula18">
			<h3 class="barlow">UNIT 8</h3>
			<h5 class="barlow upper">Aula 18 – Pintura Digital II - Iluminação e Sombreamento</h5>
			{{-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/UNIT 7/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio> --}}
			<div class="clear"></div>
			<h5 class="barlow">Aperfeiçoamento da pintura</h5>
			<ul class="lista-vertical">
				<li><p>• Pintura de Pele</p></li>
				<li><p>• Tons de Cor</p></li>
				<li><p>• Sombras</p></li>
				<li><p>• Áreas Claras</p></li>
				<li><p>• Picos de Luz</p></li>
				<li><p>• Devolução de Luz</p></li>
			</ul>
			<h5 class="barlow upper center-align" style="margin-top:10%">A T I V I D A D E S</h5>
            <p style="margin-top:5%">
                1. Aplicar sombreamento e iluminação nas áreas da pintura digital desenvolvida em sala
				de aula e em casa da aula anterior.
            </p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
