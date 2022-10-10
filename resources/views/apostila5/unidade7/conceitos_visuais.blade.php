@extends('layouts.template')
@section('titulo','Unit 7 | Conceitos Visuais')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade7" data-etapa="conceitos_visuais">
			<h3 class="barlow">UNIT 7</h3>
			<h5 class="barlow upper">Aula 1 – Desenvolvimento e noção de conceitos visuais</h5>
			<p>
				Chegamos a um dos pontos importantes para difinição do nosso material final.
				Já aprendemos o básico sobre modelagem, mas para montar um cenário por exemplo, temos
				que modelar individualmente cada objeto presente no mesmo. Precisamos definir alguns pontos para continuação desse trabalho, 
				use a sua imaginação e não desista nas primeiras dificuldades. Agora, vamos trabalhar separadamente cada pedaço do nosso novo ambiente, 
				árvores,
				cadeiras, casas, portas e todos os detalhes que irão enriquecer nosso desenvolvimento.
			</p>
			<p><b>Objetos</b></p>
			<p><b>Cadeiras, portas, prédios e estruturas retas.</b></p>
			<p>
				Iremos modelar objetos do nosso cotidiano, maturar o conhecimento aplicado nos últimos exercícios. Vamos modelar um pequeno cenário, 
				lembrando sempre que faremos isso usando os objetos disponíveis na nossa barra de atalhos <b>Add object</b>. 
			</p>
			<p>
				Vamos inserir um plane que será o nosso chão, ou a superfície onde todos os nossos objetos
				estarão dispostos. Depois que for inserido e posicionado, faremos o mesmo processo e vamos
				inserir um cubo, esse cubo vai se tranformar em tudo que precisarmos, no caso vamos tranformá-lo em uma cadeira.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit7/imagem_unit7_01.png') }}" alt="guia1">
                </figure>
			</div>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit7/imagem_unit7_02.png') }}" alt="guia2">
                </figure>
			</div>
			<p>
				Primeiro converta seu mesh em objeto editável atravéz do botão <b>macke editable</b>, 
				quando você estiver nesse modo vai poder escolher como interagir com o objeto, como descrito
				na aula anterior, usando <b>subdivided, selection modes e extrude</b> para modelar uma cadeira,
				mesa dentre outros objetos.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit7/imagem_unit7_03.png') }}" alt="guia3">
                </figure>
			</div>
			<p>
				Com o auxílio de uma planta baixa, faremos a modelagem de uma pequena casa. Atenção
				as técnicas necessárias, cada objeto deve ser modelado separadamente, para isso vamos precisar
				conhecer novos recursos, o auxílio da planta baixa irá facilicar a modelagem mais precisa de
				nossos objetos.
			</p>
			<p>
				<b>HUD</b> fornece vários recursos, como cameras em posições fixas. Para compreender melhor,
				baixe no google a planta baixa de uma casa ou se achar muito complexo, use um objeto mais
				simples muito comum em propaganda de imobiliárias ou com ajuda do professor use o photoshop 
				para desenhar uma planta baixa do que você deseja modelar, 
				salve a mesma como pngpara que não haja compressão do arquivo.
			</p>
			<p>
				<b>HUD</b> é tudo que está disponível na tela <b>view</b>, clicando no último botão do canto direito na
				barra de menus da janela <b>views</b> você vai ter acesso aos pontos de visão pré configurados para
				facilitar sua modelagem. Poderá configurá-los tornando a navegação e edição mais confortáveis,
				ao ativar esse botão serão fornecidas as 4 telas disponíveis, entre elas a que você esta usando,
				selecione clicando no botão <b>HUD</b> na janela desejada.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit7/imagem_unit7_04.png') }}" alt="guia4">
                </figure>
			</div>
			<p>
				Você também pode abrir as opções de <b>HUD</b> clicando com o <b>Scroller</b> do mouse pra abrir as
				janelas e novamente clicar com scroller sobre a janela selecionada. Usaremos a visão top,
				onde vamos inserir as plantas baixas, o menu <b>Cameras</b> nos permite navegar entre as formas de visualização disponíveis sem usar o botão HUD, 
				também podemos ativar as mesmas opções usando os seguintes atalhos:
			</p>
			<ul>
				<li><p><b>F1 =</b> Camera perspective, permite navegação 3D;</p></li>
				<li><p><b>F2 =</b> Camera Top;</p></li>
				<li><p><b>F3 =</b> Camera Right;</p></li>
				<li><p><b>F4 =</b> Camera Front.</p></li>
			</ul>
			<p>
				Agora com a imagem que servirá de base pronta salva na pasta, usaremos a barra de menus
				da janela <b>views</b>, clique em <b>options</b> no menu que surge, depois clique em <b>configure</b>. Você
				também pode usar o atalho <b>“SHIFT+V”</b> no teclado, isso vai abrir a aba de propriedades da
				janela View <b>port – top</b>, indicando que todas as modificações feitas nessa aba apenas serão
				visíveis nessa janela do HUD.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit7/imagem_unit7_05.png') }}" alt="guia5">
                </figure>
			</div>
			<p>
				Vamos clicar na opção <b>back</b>, encontrada nessa aba de propriedades. Na nova aba vamos configurar a imagem de fundo, 
				click no botão com 3 pontinhos no canto oposto a opção imagem, na
				janela que surge navegue até a imagem que servirá de planta baixa para sua modelagem, fazendo
				isso uma parte das opções da aba se tornam editáveis, permitindo a manipulação da imagem, essa
				ferramenta deve ser usada para dar proporção entre o desenho e o modelo, para isso você precisa
				inserir uma escala na sua planta baixa, permitindo escalonar. Usando os recursos do cinema 4d,
				modele seu objeto com ajuda do professor.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit7/imagem_unit7_06.png') }}" alt="guia6">
                </figure>
			</div>
			<p><b>Visão de jogo</b></p>
			<p>
				Quando falamos de visão de jogo trata-se de suas características mais importantes. Os
				primeiros jogos eram <b>punti forme</b>, dando visão e interação entre pontos simples, mas sua experiência 
				visual somada a imaginação do jogador leva eles a lugares incríveis dentros de suas
				mentes, isso se chama IMERSÃO.
			</p>
			<p>
				A modernização e capacidade de armazenamento crescente dos novos computadores
				permitiram que essa dimensão se multiplicasse, surgindo assim os jogos usando imagens 
				compostas, personagens, cenários, inimigos, barras, pontos e animações, esses são os jogos <b>2D</b>. 
			</p>
			<p>
				A visão onde podemos ver a ação e o autor da ação se chama visão em <b>3º pessoa</b>, 
				muito comum quando uma pessoa ou ação é cinegrafada, estamos vendo de fora da ação, usa
				elementos de simulação <b>3D</b>. A visão em <b>1º pessoa</b> permite um nível de imersão inimaginável,
				nos colando como produtores da ação, as tecnologias mais novas nos permitem cameras impossíveis, 
				tackes sem cortes passando por lugares e usando recursos que seriam impossíveis
				no mundo real, muito usada em filmes de ação da D’C e Marvel. Com a construção de nossos
				cenários, podemos criar ângulos de camera a ser explorados.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
