@extends('layouts.template')
@section('titulo','Unit 6 | Aula 14 – Composição Temática III')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade6" data-etapa="aula12">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlaw">Aula 14 – Composição Temática III</h5>
			<h5 class="barlaw">DarkArt</h5>
			<p>Dark art (em português, Arte escura) é a arte bizarra que é criada digitalmente. Geralmente é a união de várias imagens que levam cicatrizes e sangue para formar uma imagem nova.</p>
			<p>O Photoshop é um dos programas mais usados para criar o estilo dark art.</p>
			<p>Dark art não e apenas modificar imagens para transformar elas em imagem de medo,
			mas sim transmitir o que o ser humano tem dentro de si próprio, e uma forma contemporânea de ser expressar.</p>
			<p><b>Origem: Wikipédia, a enciclopédia livre.</b></p>
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b>  Utilizando os recursos e ferramentas aprendidas até então no curso, realize com auxilio
			de seu professor, uma composição DarkArt</p>			
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
