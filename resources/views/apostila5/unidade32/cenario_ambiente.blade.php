@extends('layouts.template')
@section('titulo','Unit 32 | Cenário e Ambiente')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade32" data-etapa="cenario_ambiente">
			<h3 class="barlow">UNIT 32</h3>
			<h5 class="barlow upper">Aula 32 – Cenário e ambiente</h5>
			<p>
				Já desenvolvemos grande parte do nosso material, para contnuarmos nosso desenvolvimento vamos falar um pouco sobre <b> level designer </b> ou seu desenho de cenário. Isso é parte
				importante do mundo principalmente levando em consideração o desenvolvimento para jogos,
				logo vamos dar ênfaze a esses detalhes.
			</p>
			<p>
				Além do fundamental de representar o ambiente a ser enquadrado os recursos na área
				do jogo são de maneira vazia bem mais ampla que pra vídeos. Podemos fazer portas, janelas, casas, móveis e etc., se você deseja que seus objetos sejam atvos devemos modelar e
				exportá-los como FBX separadamente, posteriormente uniremos ao cenário, isso permitrá
				interação. Se deseja que um baú ou utensílio seja funcional deve criar suas animações, mais
				somente a ação individual do objeto.
			</p>
			<p>
				Jogar também serve como laboratório, podemos usar outros jogos como inspiração, jogos
				de outras plataformas como 16 bits. Mas cuidado, devemos nos inspirar e não fazer cópias
				descaradas.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit32/imagem_unit32_1.png') }}" alt="guia1">
				</figure>
			</div>
			<h5>Portas</h5>
			<p>
				Quando estver modelando seu cenário, um dos meshs sevirá como base, mas todos os
				objetos móveis como portas e outras estruturas devem ser modeladas em mesh separados,
				mesmo que esses façam parte do mesmo objeto como baús e caixas. Para facilitar essa adição
				devemos usar o painel de objetos, para associar os objetos de maneira hierárquica, para isso
				após ter terminado de modelar seu objeto com todos os nossos recursos click e matenha
				pressionado sobre o objeto, no painel objectos arraste para cima da referência relacionada do
				maior para o menor, por exemplo: a tampa ao baú, a porta ao cenário. Use o menu <b> simulaton</b>
				para criar os recursos de uso e confgurações, será aplicado de forma externa, ou seja, atravéz
				do uso de outro programa. Elas podem abrir lateralmente conectadas ao objeto, deslizar de
				maneira lisa para os cantos, devemos dar atenção aos detalhes na hora de criar uma animação
				de cenário, uma porta abrindo tem mais detalhes que o que se imagina, ela tem maçaneta,
				sombra por baixo da porta, isso tudo faz parte da cena e podemos criar a animação explorando pontos e perspectvas para fazer de nosso jogo um verdadeiro desafo.
			</p>
			<h5>Desafio</h5>
			<p>
				Dentro de um jogo o cenário e a interação do player é que vão criar a <b> play engine </b> proporcionando a forma de imersão no jogo, recebendo o nome de fase ou objetvo pode muitas
				vezes ser bem explorado com <b> level designer. </b> Planeje amardilhas, zonas mortas, chec points,
				ítens de maneira a dar ênfase maior a como isso sera disposto em sua tela durante a game
				play, pontes estruturas moveis e segmentos externos podem fornecer superfcies realmente
				desafantes quando combinados a um bom planejamento de ação determinando de onde se
				deve iniciar e onde deve acaber a nossa faze descrevendo o caminho da aventura do usuario,
				seja ela visual, emocional ou só pura diverção mesmo.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit32/imagem_unit32_2.png') }}" alt="guia2">
				</figure>
			</div>
			<h5>Iluminação</h5>
			<p>
					Dentro da estrutura do jogo a iluminação tem um peso bem dramátco, podemos ancorar
					a posição da luz e ela sempre seguir o personagem. Crie e edite uma situação que desejar,
					mas essa técnica só fará sentdo com uma luz próxima ao objeto iluminando uma área, o <b> spot
					light </b> que pode ser usado para representar lanternas e iluminações direcionais muito usada
					em jogos de terror.
			</p>
			<p>
				Para criar o parentesco devemos selecioná-los no painel <b> objects </b> e em seguida em  <b> character,
				commander </b> e click em <b> bliend, </b> se for do seu interesse que a iluminação seja projetada respeitando
				os movimentos de alguma área basta relacionar a luz ao <b> joint point </b> específco daquela área,
				será feita a leitura do movimento do <b> joint point </b> e será aplicada a sua iluminação na animação
				desejada, a mesma também será responsiva para animações na tmeline, mas todos esses recursos serão rasterizados no HUD exportando como *.fx, poderemos utlizar posteriormente
				essas animações em nosso jogo renderizando em tempo real.
			</p>
			<h5>Edit, basic, infor e program.</h5>
			<p>
				Para prepararmos nossos arquivos, além de todos os cuidados com detalhes já citados,
				também precisamos torná-lo apto a edições em outros ambientes de edição. Até agora desenvolvemos tudo para cinema ou exibições em vídeo, o nosso próximo sofware precisa reconhecer
				nossos arquivos, para isso não devemos salvá-los e sim exportá-los. Click em <b> file </b>, escolha <b> export </b>e lá escolha o formato <b> fbx, </b> isso fará nosso arquivo posteriormente reconhecido na IDE
				voltada para o desenvolvimento e a edição de engine, o <b> Unity. </b>
			</p>
			<p>
				Mas por que fazer isso? Os recurso do cinema 4D para materiais e objetos são muito melhore a
				que o de qualquer outro programa ligado a área de edição de CG e ENGINES, esses ambientes
				permitem a criação de animações computacionais renderizadas: <b> Moana, Kung fu panda </b>e
				muitos outros, e jogos renderizando seus gráfcos em tempo real. O cinema 4D fornece uma
				maneira muito mais artstca e orgânica de interação entre suas ferramentas e formas.
			</p>
			<p>
				Quando estver no layout sculpt a navegação vai se tornar um pouco diferente, trazendo
				uma novo referêncial para o cursor na área de edição 3D, esse novo marcador mostra como
				atua sua ferramenta na superfcie do mesh fornecendo novos ângulos para cada click.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit32/imagem_unit32_3.png') }}" alt="guia3">
				</figure>
			</div>
			<h5>Ambiente ocllusion</h5>
			<p>
					Já utlizamos alguma vezes, para exclarecer que esse recurso da barra de confgurações
					de render só será útl para saída do arquivo em formato de vídeo, como nosso intuito é por
					renderização, é desnecessário a utlização desse recurso.
			</p>
			<p>
					Para funcionar de maneira correta deve sempre ser usada com modifcadores como <b> sky</b> ou
					<b>background, </b> e também para exibir um vídeo em sua estrutura como <b>camera maping,</b> confgurando a iluminação em <b>object propertes,</b> e posicionando a iluminação de maneira a simular a
					presente na cena, isso reforça a sensação de realidade mesmo usando defnições e moldes de
					baixa qualidade como os primeiros objetos produzidos.
			</p>
			<p>
					Precisamos fazer isso manualmente e devemos usar as sombras presentes no vídeo para
					identfcar a posição de nossa iluminação para que abas fquem harmônicas e você tenha um
					resultado fnal superior de renderização e imagem. Isso pode levar algum tempo e o estudo da
					projeção das sombras presente permite reposicionar a luz de maneira precisa, com o tempo
					isso se torna uma habilidade natural onde a simples observação da foto vai revelar a posição
					precisa para sua iluminação.
			</p>
			<h5>Desenvolvimento</h5>
				<p>
						Usamos o cinema 4D de maneira a desenvolver materiais para representar projetos de
						casas a persongens, também vimos animações e suas mais diversas formas, isso vai mudar sua
						visão, pelo menos a de como você consome esse mercado. Estamos na metade do caminho,
						planejamento é necessário para desenvolver nosso conteúdo, faça uso de todas as ferramentas disponíveis nesse sofware para reforçar as característcas voltadas para modelagem, texturização, maping, pintura digital e animação.
				</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
