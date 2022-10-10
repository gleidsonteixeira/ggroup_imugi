@extends('layouts.template')
@section('titulo','Unit 4 | Aula pratica de Edição III')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade4" data-etapa="aula_pratica">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow upper">Aula 14 – Aula pratica de Edição III</h5>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>1.</b>Com o projeto usado na aula de creditos iniciais e finais, criar uma correção para o video,
				estiliando-o com correções de cores e mesclagem com presets de video para criar um estilo
				de genero cinematografico.</p>
			<p style="margin-top: 16px"><b>1.</b>Aplicar no projeto, vinheta de video para passar a impressão de uma película cinematogáfica.</p>



		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection