@extends('layouts.template')
@section('titulo','Unit 16 | ANIMAÇÃO DE PERSONAGEM')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade16" data-etapa="animacao_personagem">
			<h3 class="barlow">UNIT 15 - ANIMAÇÃO DE PERSONAGEM</h3>
			<h5 class="barlow upper">AULA 14 e 15 - IMPORTANDO PERSONAGEM 2D</h5>

			<p>Neste capítulo de Animação de personagem poderemos escolher personagens existentes ou
				criar personagens para entender o sistema de rigging, movimentos em arco e movimentação
				orgânica. E para isso precisamos preparar os personagens para animação
				dentro do aft er eff ects.
			</p>
			<p>
				No illustrator os personagens precisam ser criados subdivididos em layers para cada elemento
				independente e nomeado para melhor entendimento dos arquivos dentro do after effects.
				No photoshop a divisão deve ser a mesma, layer por layer para cada parte do personagem,
				porém o photoshop tem a facilidade de pegar imagens da internet para editá-las e subdividi-
				-las e depois importar as mesmas para o after effects.
			</p><br>
			<h5>Importando os arquivos para o after effects</h5>

			<p>
				Alguns métodos - como wiggle - operam diretamente nos valores das propriedades de
				keyframes.
			</p>
			<p>
				Você pode importar tanto os arquivos do Illustrator (.ai) como os arquivos do Photoshop (.psd)
				ou até mesmo imagens em png. Organizando seus arquivos dentro do after effects você poderá
				trabalhar em sua animação.
			</p>
			<h5>DUIK ANIMATION</h5>
			<p>
				Dentro do after effects após ter importado todos os arquivos, é necessário fazer a organização
				das imagens do personagem e modificação do eixo (Anchor Point) das partes do corpo do personagem
				que serão animados.
			</p>
			<p>
				Com os personagens devidamente organizados suas partes podem ser “parenteadas” (parent)
				para que você crie um tipo de sistema de rigging para os personagens, o que significa que você
				está criando uma estrutura para movimentar o personagem como se todo aquele conjunto de
				imagens fossem de um só objeto, como um esqueleto.
			</p>
			<p>
				O plugin Duik Animation é um script que permite que você crie sistemas de rigging para animar
				o personagem de forma mais fácil e estruturada que pode ser calibrada para adaptar-se a
				movimentos orgânicos como a dobradura de um braço sem divisões ou movimentos divididos
				em juntas do corpo humano.
			</p>
			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>Aula 14: </b>Criar personagem 2d no illustrator ou Photoshop e preparar ele para importar
				para o after effects dividido em camadas.</p>
			<p style="margin-top: 16px"><b>Aula 15: </b>Aproveitar o personagem criado e preparado da aula passada para criar um
				Rigging do personagem e criar uma animação com ele.</p>


		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection