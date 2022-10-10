@extends('layouts.template')
@section('titulo','Unit 5 | Objetos e Edicao')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade5" data-etapa="objetos_edicao">
			<h3 class="barlow">UNIT 5</h3>
			<h5 class="barlow upper">Aula 1 – Objetos e edição - Seleção e modos Edit mode</h5>
			<div class="container">
				<p>
					Quando criamos nossos objetos eles são simplesmente compostos por alguns pontos,
					retas e superfícies, chamamos essas formas de mesh. São representações digitais de objetos
					em 3D, mas para criar detalhes precisamos interagir de modo mais profundo no objeto, temos
					que modelar. 
				</p>
				<p>
					Podemos encontrar uma lista com um bureau disponibilizado pelo próprio programa em
					suas bibliotecas e menus. Na barra de menus podemos encontrar a opção <b>mesh</b>, que fornece
					uma série de ferramentas que vamos conhecer gradativamente duranta o curso. Nessa mesma barra temos o menu <b>create</b>, 
					que permite inserir todos os objetos básicos para modelar a
					partir deles. Já no painel <b>content browser, presets</b> e <b>sculpting</b> teremos uma série de formas
					básicas pré-moldadas de animais e insetos a formas humanas, tudo fornecido pelo próprio programa. 
					Mas nosso objetivo é produzir essas formas, podemos desenvolver sobre esses presets já
					existentes.
				</p>
				<div class="elemento2">
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit5/imagem_unit5_01.png') }}" alt="guia1">
					</figure>
				</div>
				<div class="elemento">
					<p><b>Tamanho, seleção e interação</b></p>
					<p>
						Até aqui aprendemos a mover e rotacionar usando ferramentas de navegação no objeto, agora vamos isolar áreas e
						modelar literalmente os objetos a partir das formas
						básicas. 
					</p>
					<p>
						Usaremos a barra de ferramentas de cima a baixo, o botão
						<b>make editable</b> torna sua forma básica passível de edição e
						manipulação face a face, vertice a vertice ou ponto a ponto.
						No entanto, precisamos ficar atentos as configurações pra
						conseguir fazer o que queremos.
					</p>
				</div>
				<div class="clear"></div>
				<p>
					Usando a barra de menus rápidos insira o mesh de um cubo, com o quadrado selecionado clique no botão mack editable, 
					agora você pode escolher áreas isoladas do seu objeto pra
					realizar edições. Todos os atalhos de seleção se aplicam, mas agora eles serão específicos para
					as áreas selecionadas, se desejar aplicar uma alteração ao objeto todas as áreas relativas ao
					mesmo devem ser selecionadas.
				</p>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
