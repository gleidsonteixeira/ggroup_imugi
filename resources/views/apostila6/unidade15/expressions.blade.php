@extends('layouts.template')
@section('titulo','Unit 15 | EXPRESSIONS')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade15" data-etapa="expressions">
			<h3 class="barlow">UNIT 15</h3>
			<h5 class="barlow upper">AULA 13 - EXPRESSIONS</h5>

			<p>Uma expressão é uma pequena parte de um software - muito parecido com um script - que
				avalia um único valor para uma propriedade de layer única em um ponto específico. Enquanto
				os scripts dizem um aplicativo para fazer algo, uma expressão diz que uma propriedade é algo.
				Se deseja criar e vincular animações complexas, mas deseja evitar a criação de dezenas ou
				centenas de keyframes, deve usar expressões.
			</p>
			<p>
				Com expressões, é possível criar relacionamentos entre as propriedades da layer e usar os
				keyframes de uma propriedade para animar dinamicamente outras layers. Por exemplo, você
				pode usar o chicote de seleção para vincular as propriedades do caminho, de modo que uma
				mask pode seguir seu path a partir de um traço de pincel ou um objeto de layer de forma.
				O idioma de expressão é baseado no idioma JavaScript padrão, mas não é preciso saber o
				JavaScript para usar expressões. É possível criar expressões usando o chicote de seleção ou
				copiando exemplos simples e modificando-os de acordo com suas necessidades. As predefinições
				de animação podem incluir expressões, ou mesmo serem inteiramente de uma expressão. As predefinições
				de animação que usam expressões em vez de keyframes às vezes sãochamadas de comportamentos.
			</p><br>


			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit15/imagem_unit15_1.png') }}" alt="guia1">
				</figure>
			</div><br>
			<p>
				Depois de adicionar uma expressão a uma propriedade, você pode continuar a adicionar ou
				editar keyframes para a propriedade. Uma expressão pode levar o valor de uma propriedade
				como determinado por seus keyframes e usar isso como entrada para gerar novos valores modificados.
				Por exemplo, a seguinte expressão na propriedade rotação de uma camada adiciona
				90 graus ao valor da propriedade rotação, além do movimento com imagem-chave:
			</p>
			<h5>Valor + 90</h5>
			<p>
				Alguns métodos - como wiggle - operam diretamente nos valores das propriedades de
				keyframes.
			</p>
			<p>
				A seguinte expressão na propriedade posição de uma layer preserva o movimento de keyframe
				da layer e faz com que ela mude um pouco:
			</p>
			<h5>Wiggle (10, 10)</h5>
			<p>
				Ao animar texto, é possível usar o seletor de expressão para especificar o quanto você deseja
				que uma propriedade de animação afete cada caractere de texto. É possível adicionar um ou
				mais seletores de expressão a um grupo de animação e esse grupo de animação pode conter
				uma ou mais propriedades.
			</p>

			<h5>Utilizando expressões</h5><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit15/imagem_unit15_2.png') }}" alt="guia1">
				</figure>
			</div><br>

			<p>
				É possível inserir expressões inteiras, digitando-as manualmente ou usando o menu idioma de
				expressão ou ainda criar uma expressão com o chicote de seleção ou colá-lo de um exemplo
				ou outra propriedade. É possível fazer todo o trabalho com expressões no painel timeline,
				embora às vezes seja mais conveniente arrastar o chicote de seleção para uma propriedade
				no painel controles de efeitos.
			</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit15/imagem_unit15_3.png') }}" alt="guia1">
				</figure>
			</div><br>
			<p>
				Para inserir e editar expressões use o campo de expressão (um campo de texto redimensionável
				no gráfico de tempo). O campo de expressão aparece ao lado da propriedade no modo
				barra de camada e na parte inferior do editor de gráficos no modo editor de gráficos. É possível
				escrever uma expressão em um editor de texto e depois copiá-lo para o campo de expressão.
				Ao adicionar uma expressão a uma propriedade de layer, uma expressão padrão aparece no
				campo de expressão. A expressão padrão essencialmente não faz nada - ela define o valor da
				propriedade para simesmo, o que facilita o ajuste da expressão.
			</p>
			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>01. </b> Criar uma animação simples usando as expressões para facilitar
				o processo de animação.</p>


		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection
