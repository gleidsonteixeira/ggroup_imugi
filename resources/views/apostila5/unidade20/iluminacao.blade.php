@extends('layouts.template')
@section('titulo','Unit 20 | Iluminação')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade20" data-etapa="iluminacao">
			<h3 class="barlow">UNIT 20</h3>
			<h5 class="barlow upper">Aula 1 – Iluminação - Composição de cena</h5>
			<p>
				Já estudamos detalhadamente o render e as configurações de camera, agora vamos fazer o mesmo com iluminação.
			</p>
			<p>
				Esse recurso dá peso a sua cena, acrescentando sombras e permitindo que você controle
				de maneira prática o tipo de luz que está sendo usada, sua intensidade e sua área de ação.
				Tipos diferentes de iluminação como <b>point light, sun light, emisfere light, infinite light e spot
				light</b>, provocam diferentes tipos de efeitos em seu objeto, mas também podemos criar nossos
				próprios pontos de luz usando materiais e texturas.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit20/imagem_unit20_1.png') }}" alt="guia1">
				</figure>
			</div>
			<p>
				Luzes diferentes devem ser usadas para ambientes externos e internos, no caso de usar
				uma imagem ou vídeo para compôr a cena como background, o objetivo com a iluminação é
				chegar o mais próximo possível da usada como plano de fundo.
			</p>
			<p><b>Material com textura feita para brilhar</b></p>
			<p>
				Crie uma material novo e na caixa de diálogo <b>material editor</b> desmarque todas a opções e
				marque apenas a opção <b>luminecense</b>, deixe a cor como branco e altere o valor do brilho para
				padrões maiores que 100%, pode ser 200% ou 300% dependendo de quanta luz a mais você
				quer no ambiente, esse recurso permite a você construir seus próprios pontos de luz. Crie um
				<b>plane</b>, aplique esse material e posicione próximo da sua composição, para visualizar os efeitos
				de iluminação devemos habilitar <b>ambiente occlusion</b> e <b>global light</b> em configurações de renderização, 
				para que a renderização interprete nossos pontos de luz e as sombras envolvidas
				no processo.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit20/imagem_unit20_2.png') }}" alt="guia2">
				</figure>
			</div>
			<p>
				Para não perder tempo use as composições de modelagem das aulas anteriores, 
				inserindo só os modificadores, objetos e materiais descritos nessa aula. Usando o recurso marge
				disponível no menu file, podemos criar um arquivo com nossas iluminações e testar com
				diversos materiais e animações.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit20/imagem_unit20_3.png') }}" alt="guia3">
				</figure>
			</div>
			<p><b>Fontes de luz – point – sun – spot – hemi - área stroboscopic</b></p>
			<p>
				Abra um dos seus trabalhos antigos que contenha materiais e texturas, se não tiver a disposição, 
				crie um pequeno ambiente com um poste e um banco que será iluminado pela luz
				que posicionaremos no poste. Para melhor aproveitamento do recurso crie materiais diferentes
				para texturizar o poste e o banco. Crie um plane para representar o chão, um material e texturize
				o mesmo, agora vamos inserir um ponto de luz.
			</p>
			<p>
				Com o ponto de luz inserido, click na sua representação no painel objetos após tê-lo posicionado. 
				No painel de propriedades, em <b>general</b> temos as configurações de:
			</p>
			<ul>
				<li><p><b>Color</b> - a cor da luz</p></li>
				<li><p><b>Instensity</b> - intensidade</p></li>
				<li><p><b>Type</b></p></li>
			</ul>
			<p>
				Click sobre o <b>type</b> e escolha <b>spot light</b>, a luz perde as características anteriores e recebe
				uma marcação que indica sua direção. <b>Spote light</b> emite luz em uma única direção, ao contrário do primeiro formato <b>Omni</b>, 
				que emite uma luz fosforescente normal que irradia. Infinite é iluminação padrão para todo ambiente independe da 
				distância do ponto emissor, isso cria na área uma iluminação mais dramática, permitindo a edição da emissão atravéz de uma
				referência visual, aproxime e reduza o emissor e ele emitirá menos luz apenas na área que
				cobrir o objeto, muito usado para reforçar iluminações fracas.
			</p>
			<p>
				Para nosso poste vamos usar um <b>spot light</b>, posicione no espaço que você fez para a lâmpada 
				ocupar no poste de maneira que a mesma ilumine o poste e o banco. Note que apenas
				uma parte de cada é iluminado, crie um objeto novo e modele para ser a outra lâmpada e
				posicione no lugar onde a luz está sendo emitida, atribua o material com textura feita para
				brilhar, com o render devidamente configurado click em render para criar a projeção em máxima
				definição da imagem.
			</p>
			<p>
				Crie cenários com mais de um ponto de luz diferente e aplique cores e luzes, também podem ser presas a posição de camera, 
				recurso usado em slanderman restingindo a visualização
				do ambiente. O uso de um objeto texturizado como ponto emissor de luz pode ser feito de
				diversas formas, comumente usado para criar efeitos de sistema de iluminações com painéis
				alinhados, esferas irradiando ou objetos como sabres de luz, lazers e luzes encandescentes
				podem ser representados dessa forma e atribuídos como material a qualquer objeto, todo
				objeto pode facilmente se tornar um ponto emissor de luz.
			</p>
			<p><b>Projeção de sombra ambient occlusion</b></p>
			<p>
				Ambiente occlusion faz com que o seu objeto projete sombras sobre ele mesmo, 
				é imprescindível que esse recurso seja habilitado na opção configuração de render, sempre será
				necessário habilitar o efeito ambiente occlusion.
			</p>
			<div>
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit20/imagem_unit20_4.png') }}" alt="guia4">
				</figure>
			</div>
			<p>
				Para que as iluminações inseridas no cenário funcionem temos que habilitar o efeito <b>global lights</b>, 
				projeção de luz e sombras entre objetos diferentes, esses recursos serão exibidos depois que o render for executado. 
			</p>
			<p>Em <b>Anti-Aliasing</b> configure da seguinte forma:</p>
			<ul>
				<li><p><b>Anti-aliasing</b> para <b>best</b></p></li>
				<li><p><b>Min level</b> para <b>4X4</b></p></li>
				<li><p><b>Max Level</b> para <b>8X8</b></p></li>
			</ul>
			<p>Isso vai elevar a qualidade final para fotografia.</p>
			<p>
				É importante ressaltar que a mente humana usa as noções de sombra para fornecer tridimensionalidade 
				aos objetos realmente tridimensionais, por isso o uso desses efeitos permite uma imerção maior nos resultados finais tanto para imagens quanto para vídeos e isso fará
				seu computador precisar de um pouco mais de tempo, já que esse processo costuma destinar
				maior uso do processador.
			</p>
			<p><b>Custom properties</b></p>
			<p>
				Quando achar necessário usar uma luz como base e aplicar nas existentes para criar modificações a uma que já exista, 
				click em <b>type</b> nas propriedades e marque a opção <b>parallel spot</b> que
				vai criar uma modificação na sua luz atual, explore as outras opções e veja como isso altera sua
				imagem. Você pode customizar sua iluminação em <b>intensity</b>, podemos usar números maiores
				que 100% para causar maior índice de emissão de luz. A configurações e propriedades estão
				todos dipostos no painel propriedades com sua luz selecionada.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
