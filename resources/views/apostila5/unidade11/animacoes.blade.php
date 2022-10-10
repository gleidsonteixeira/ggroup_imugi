@extends('layouts.template')
@section('titulo','Unit 11 | Animações')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade11" data-etapa="animacoes">
			<h3 class="barlow">UNIT 11</h3>
			<h5 class="barlow upper">Aula 1 – Animações em timeline e dinâmicas</h5>
			<p><b>Tipos de animação</b></p>	
			<p>
				Para criar animações precisamos entender alguns conceitos. Nossos objetos criados até
				agora são uma representação de massa e espaço, um corpo ou massa ocupando um espaço
				construindo uma imagem e gerando assim uma composição visual. É muito comum seu uso
				para representação midiática de objetos simples, usados como representação para todos os
				tipos de ideias a serem vendidas, toda forma em estático pode ser desempenhada até aqui,
				mas precisamos incrementar as nossas criações. 
			</p>
			<p>
				Uma quarta dimensão, além de altura, largura e profundidade, nossos objetos
				também terão tempo. Vamos aprender a usar a <b>timeline</b>, com ela vamos poder criar relações
				entre posição, espaço e tempo, gerando movimento ordenado ou caótico. 
			</p>
			<p>
				Vamos esperimentar e brincar com todos, o tempo representado pela timeline precisa ser
				compreendido para ser melhor operado. Quando aplicamos o tempo a representação dele,
				temos que tomar cuidado com algumas <b>referências</b>. Frame é a menor divisão de uma linha do
				tempo, ele é uma imagem definida pela quantidade de linhas e colunas que compões uma imagem ou sub magnitude. 
				Cada segundo na sua linha do tempo é representado por um frame,
				o segundo pode variar entre 24 e 30 frames aproximandamente, dependendo de como seu
				projeto vai ser finalizado, os formatos de renderização e as configurações do motor gráfico
				que criaram as imagens do jogo em tempo real, no último caso a tacha de frame hate é bem
				mais alta, para garantir imagens bonitas evitando flicados e trucados. Na taxa de formação
				de quadros em modo engine as imagens são formadas em até 60 fps e as tecnologias mais
				recentes usam frames com tamanho de até 2304 linhas por 4096 colunas, o famigerado 4K, as
				ultra imagens.
			</p>
			<p>
				Trabalharemos dois tipos de animação, as que pontualmente podem ser criadas através
				da timeline, onde você diz a posição no espaço e no tempo descrevendo o que pode ser uma
				trajetória, alteração de tamanho, rotação ou disperção. Quase sempre envolvem ciclos ou
				mecânicas simples. Dinâmicas usam relação entre objetos, resistência, massa e gravidade,
				uma simulação básica do mundo real. Podemos criar conexões diferentes entre as partes, 
				podendo fornecer o que for necessário ao movimento. 
			</p>
			<p><b>Ponto de vista</b></p>
			<p>
				Posição sobre a qual uma ação é observada, aos olhos do observador existem hoje recursos e equipamentos 
				para que isso seja executado de forma real, movimentos <b>free hand</b> usam
				stetcans e manipuladores de equilíbrio, travels, graus, muitas montagens e recursos de edição,
				recursos reais usados pra causar a sensação de efeitos somente vistos em situações virtuais,
				como a super camera criada para fotografar quadros posteriormente animados gerando a
				sensação de camera virtual, a menos que o <b>Clark Kent</b> fosse camera e não repóter, Cenas que
				posteriormente serão editadas de maneira digital.
			</p>
			<div>
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit11/imagem_unit11_1.png') }}" alt="guia1">
				</figure>
			</div>
			<div>
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit11/imagem_unit11_2.png') }}" alt="guia2">
				</figure>
			</div>
			<p>
				Outros recursos são usados como a camera tremida para minimizar as experiências dos
				atores nas áreas de artes marciais, popularizado pela série de filmes que contam a histórias
				do agente <b>Jason Borne</b>, muito usada nos novos filmes da DC e Marvel.
			</p>
			<p><b>Primeiros movimentos</b></p>
			<p>
				Crie um cubo e ative o botão na aba timeline na parte inferior da sua janela, a primeira
				informação dessa aba é sua timeline ou linha do tempo. Esses pequenos quadros são a representação dos frames, 
				ela está padronizadamente posicionada no frame zero.
			</p>
			<div>
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit11/imagem_unit11_3.png') }}" alt="guia3">
				</figure>
			</div>
			<p>
				O primeiro painel dessa barra nos da as informações de start frame e and frame, permitindo
				o controle minucioso de nosso tempo de ação. A barra posicionada no centro é o zoon, a parte
				que pode ser pré-renderizada ou rasterizada, altere o seu número do lado esquerdo para mais.
				A barra do centro irá dimunir, mas clicando sobre ela você pode alterá-la clicando sob a lateral
				esquera do zoon, mantendo o click pressionado, puxe o mouse pra sua direita, isso permitirá
				uma edição em mais frames.
			</p>
			<div>
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit11/imagem_unit11_4.png') }}" alt="guia4">
				</figure>
			</div>
			<p>
				Crie um objeto como um cubo, click sobre o ícone de uma pequena chave na mesma barra desse painel, 
				fazendo isso você vai criar um <b>keyframe</b>, forneça uma nova posição a timeline
				clicando sobre sua representação na aba, ao fazê-lo selecione o objeto e o posicione em um
				outro lugar na tela. Feito isso, clique novamente no ícone da chave, criando um novo <b>keyframe</b>
				em sua timeline.
			</p>
			<div>
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit11/imagem_unit11_5.png') }}" alt="guia5">
				</figure>
			</div>
			<div class="container">
				<div class="metade esquerda">
					<p class="elemento">
						A primeira sequência de botões após os botões para zoon na timeline,
						temos os comandos básicos de vídeo go to star, go to previos key, go to
						previos frame, play, go	to next frame, go to next
						key e go to end. Clique no botão start frame e em
						seguida no botão play, a animação do movimento descrito por você será realizada.
					</p>
				</div>
				<div class="metade direita">
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit11/imagem_unit11_6.png') }}" alt="guia6">
					</figure>
				</div>
			</div>
			<div class="clear"></div>
			<div class="metade">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit11/imagem_unit11_7.png') }}" alt="guia7">
				</figure>
			</div>
			<br>
			<div class="container">
				<div class="elemento4">
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit11/imagem_unit11_8.png') }}" alt="guia8">
					</figure>
				</div>
				<div class="elemento">
					<p>
						O próximo painel de botões ativa as áreas em que a timeline está ativa: <b>position, scale, rotate, parameters e points</b>.
					</p>
				</div>
			</div>
			<div class="clear"></div>
			<p>
				Crie 5 animações e altere o tamanho e posição em relação a rotação. Faça testes e se
				perca, é a melhor forma de aprender, salve todos os seus projetos.
			</p>
			<p><b>Pose mode</b></p>
			<p>
				Na barra de ferramentas, no botão que nos dá acesso aos modos, temos acesso ao <b>animation</b>. 
				Estando nesse modo não agimos mas sobre o objeto e sim sobre toda a animação gerada
				com ele, podendo criar combinações de movimentos como relógios, motores, ventiladores,
				ciclos de movimentos repetidos e etc. Também podemos interagir diretamente sobre os pontos já editados, 
				se quisermos que uma determinada posição se repita, temos que selecionar
				na timeline com um click sobre a <b>keyframe</b> a ser copiada, pressione <b>“CTRL+C”</b>, click em uma
				nova posição na timeline e você conseguirá repetir a posição do objeto com precisão, perfeito
				pra fechar ciclos de movimentos cíclicos ou lups de animação fechadas.
			</p>
			<p><b>Timeline estrutural</b></p>
			<p>
				Quando se adiciona uma estrutura a um objeto com os esqueletos que permitem a movimentação de corpos com pontos flexíveis, 
				o uso da timeline funciona exatamente da mesma
				forma, sendo que para realizar o movimento o objeto selecionado deve ser o esqueleto e não
				o mesh. Cada nova posição deve ativar o botão keyframe, todas as opções de seleção também
				são funcionais, de acordo com a ferramenta.
			</p>
			<p><b>Timeline para animação</b></p>
			<p>
				Podemos planejar os elementos de nossa timeline, esse recurso criativo se chama <b>history board</b>, 
				planejamento de movimento em ação, criando antecipadamente os recursos visuais a
				serem explorados pra formar a cena de maneira simplificada, expondo posições, ações, 
				movimentos e cameras que compõem a cena.
			</p>
			<p>
				O exercício do hitory board não necessariamente precisa de capacidades avançadas de
				desenho, criar um history bord é muito mais um ato de criatividade do que de técnica, pode
				se tornar um hábito para armazenar ideias para mentes visuais.
			</p>
			<p><b>Motion ure</b></p>
			<p>
				Apesar do nome parecer se referir a uma coisa moderna, essa prática já é bem antiga.
				Fotografar ou filmar um movimento para que esse posteriormente seja usado para gerar
				animações é chamado de rotoscopia, temos diversos exemplos como com os sprites de jogos
				bidimensionais usados em Prince of Percia para computadores.
			</p>
			<p>
				Os recursos mais modernos permitem selecionar pontos específicos da imagem e do mesh para reagirem com o movimento capturado em camera. 
				Com ajuda do seu professor,
				crie o history board para as animações básicas do seu personagem em jogo ou vídeo parado,
				andando, correndo, realizando toda e qualquer ação que você espere que os seus personagens realizem no jogo. Sendo detalhista e cuidadoso, 
				você pode fazer isso usando até bonecos
				de pauzinhos, tomando o cuidado certo vai obter bons resultados.
			</p>
		</div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
