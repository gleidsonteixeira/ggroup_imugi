@extends('layouts.template')
@section('titulo','Unit 8 | Aula 19– Pintura Digital III - Texturizando')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade8" data-etapa="aula19">
			<h3 class="barlow">UNIT 7</h3>
			<h5 class="barlow upper">Aula 19– Pintura Digital III - Texturizando</h5>
			{{-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/UNIT 7/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio> --}}
			<div class="clear"></div>
			<h5 class="barlow">Aperfeiçoamento da pintura</h5>
			<ul class="lista-vertical">
				<li><p>• Corpo</p></li>
				<li><p>• Roupas e Tecidos</p></li>
				<li><p>• Referências</p></li>
				<li><p>• Texturas</p></li>
				<li><p>• Aplicação de ajustes, fi ltros e mesclagens.</p></li>
			</ul>
			<h5 class="barlow upper center-align" style="margin-top:10%">A T I V I D A D E S</h5>
            <p style="margin-top:5%">
                1. Uitilizar modo de mesclagem em padrões com ajustes necessários para criar aspecto
				de textura nas pinturas digitais desenvolvidas em sala de aula e nas tarefas de casa.
            </p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
