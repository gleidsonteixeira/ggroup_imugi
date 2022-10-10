@extends('layouts.template')
@section('titulo','Unit 8 | Visão e Navegação')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade8" data-etapa="visao_navegacao">
			<h3 class="barlow">UNIT 8</h3>
			<h5 class="barlow upper">Aula 1 – Visão e Navegação</h5>
			<p>
				O cinema 4D permite o uso e a navegação entre diversos tipos de camera no HUD. Porém,
				essas cameras são úteis apenas para edição, já que para realizar a renderização de uma 
				animação você também pode definir uma camera para poder configurar por inteira.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit8/imagem_unit8_01.png') }}" alt="guia1">
                </figure>
			</div>
			<p>
				Vamos inserir objetos ou abrir qualquer um dos exercícios anteriores, através da barra
				de atalhos vamos inserir uma camera que será colocada exatamente em nossa posição de
				visualização atual, mas ela não está fixa, para ativar essa opção você deve ir até o menu
				<b>Camera</b> na janela <b>views</b> e linkar a camera ao HUD, assim podemos configurar a posição da
				camera usando as ferramentas de navegação como mostrado na introdução dessa apostila.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit8/imagem_unit8_02.png') }}" alt="guia2">
                </figure>
			</div>
			<p>
				Para mover a camera livremente como um objeto selecionado você deve voltar ao menu
				<b>Cameras</b>, no submenu use <b>camera</b> e ative a opção <b>default camera</b>, podendo usar as ferramentas de seleção 
				ao invés das de navegação para mover sua camera, mas ao fazer isso você
				vai perder a imagem que ela está capturando.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit8/imagem_unit8_03.png') }}" alt="guia3">
                </figure>
			</div>
			<p>
				Para retornar a visão da <b>camera</b> após posicioná-la, vá novamente ao menu <b>camera</b>, no
				submenu use camera e click na opção com o nome da camera presente, agora posicione várias
				cameras em seu cenário e navegue entre elas para ter várias imagens dos seus objetos sobre
				pontos de vista diferentes.
			</p>
			<p><b>Navegação</b></p>
			<p>
				Quando posicionamos nossas cameras no cenário transmitimos nosso ponto de vista ao
				espectador, mas esses sistemas de exibição e filmagem vão mudar de acordo com as escolhas
				feitas no desenvolvimento.
			</p>
			<p>
				Ao planejar um cenário ou animação é fundamental que você imagine a forma como isso
				vai ser visto ou o ponto de vista, isso vai permitir a navegação dentro do seu ambiente, 
				não vamos nos limitar ao cinema, abordaremos também com mais ênfaze os sistemas de renderização
				em tempo real, temos hoje uma boa gama de formatos, os principais são:
			</p>
			<ul>
				<li><p>1ª pessoa</p></li>
				<li><p>3ª pessoa</p></li>
				<li><p>Bidimensionais</p></li>
				<li><p>Exométricos</p></li>
				<li><p>Plataforma Adventure</p></li>
				<li><p>Simuladores 8 e 16 bits</p></li>
				<li><p>Realidade aumentada</p></li>
				<li><p>Óculos VR</p></li>
			</ul>
			<p>
				Por isso é muito importante fazer uma boa escolha de projeto, para que seus modelos e
				animações sejam feitos com excelência. Todos esses recursos devem ser usados para incrementar nossas criações, 
				nas próximas aulas vamos criar personagens e objetos compostos.
			</p>
			<p>
				Faça um exercício mental de pensar no seu trabalho, escolha o modelo de corpo que
				irá usar pra construir seus personagens. Você pode optar por uma visão mais sombria, com
				pouca luz por exemplo, perfeito pra uma história de terror, principalmente se você tiver bons
				modelos humanos realistas. Poderá usar o <b>S.D</b> ou <b>Super Deformed</b> para seus personagens
				facilitando a criação e modelagem, reforçando o lado lúdico muito comum nos jogos de ação atualmente, 
				onde os personagens não são bem modelados, mas tem animações surprendentes.
				Precisamos criar um bureau, uma base de informação e inspiração. 
			</p>
			<p>
				Crie uma pasta chamada <b>bases</b> e dentro dela armazene suas plantas baixas para casas e
				modelos, será muito útil para as próximas aulas. Crie um cubo usando os botões da barra de
				atalhos, posicione sua visão para que consiga ver o cubo e a linha do horizonte, deixando o
				mais parecido possível com a imagem a baixo.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit8/imagem_unit8_04.png') }}" alt="guia4">
                </figure>
			</div>
			<p>
				Quando tiver posicionado sua visão insira uma camera, ela vai ser inserida na exata
				posição do seu campo de visão, será inserido em sua tela o marcador que representa a
				camera e permite seu movimento e redimensionamento. 
			</p>
			<p>
				Agora vamos ver as propriedades, nessa aba com a camera selecionada podemos
				escolher as propriedades de nossa camera, como tipo de <b>camera, lentes, foco, balanço de luz</b>
				e todas as configurações possíveis em camera profissional como as existentes no mercado. 
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit8/imagem_unit8_05.png') }}" alt="guia5">
                </figure>
			</div>
			<p>
				Vamos voltar a nossa área 3D, agora selecione a sua camera e vamos até o menu <b>character</b>,
				dentro dele no submenu <b>commander</b> selecione a opção <b>set parent</b>, isso cria um parentesco. Mas
				cuidado, nesse momento seu cursor ficará com um ponto de interrogação, você precisa dizer quais
				objetos devem ser pareados. Como você clicou em <b>set parent</b> com a camera selecionada, o próximo
				objeto a ser clicado é aquele a ser seguido, clique no cubo e isso confirmará o pareamento.
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit8/imagem_unit8_06.png') }}" alt="guia6">
                </figure>
			</div>
			<p>
				Para testar desfaça qualquer seleção pressionando <b>“CTRL+SHIFT+A”</b>, isso deve remover
				qualquer seleção, com a ferramenta <b>mover</b> clique sobre o cubo e mova ele em qualquer um
				dos eixos, se tudo tiver sido feito corretamente sua camera estará seguindo o cubo. Vamos
				salvar com o nome de <b>camera player 1º</b>, isso vai nos permitir navegar livremente nos cenários
				que começaremos a construir a partir da próxima aula.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
