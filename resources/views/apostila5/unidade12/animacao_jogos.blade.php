@extends('layouts.template')
@section('titulo','Unit 12 | Animação para jogos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade12" data-etapa="animacao_jogos">
			<h3 class="barlow">UNIT 12</h3>
			<h5 class="barlow upper">Aula 1 – Animação para jogos</h5>
			<div class="container">
				<p>
					Dentro da estrutura de um jogo, apesar das semelhanças, as animações são diferentes.
					Quando é feito um vídeo são criadas imagens com movimentos específicos pré programados
					que permitem uma taxa de pixels muito maior, já que esse recurso usa a renderização com
					uma taxa de formação de quadros entre 27 ,29 e 30 frames por segundo.
				</p>
				<p>
					Para o jogo, a imagem é formada a partir de equações e os gráficos respondem a comandos em tempo real, 
					para que isso aconteça de maneira que garanta a ilusão do espectador,
					a taxa de formação de quadros é muito maior que a de um vídeo comum. Nos vídeo games
					mais modernos chegam até 64 frames por segundo, nesse caso o recurso usado para formar
					a imagem é a rasterização, usando o algoritmo do pintor o processador decide e executa em
					tempo real a imagem que deve ser exibida. Isso pode provocar alguns problemas causados no
					decorrer do processamento, sua imagem pode sofrer trucados quando for visualizar saltos na
					animação onde quadros simplesmente não são executados, flicados quando a execução dos
					quadros tendem a se misturar ou o tilt, uma bagunça total na estrutura do código do jogo que
					pode ser provocado por situações diferentes, processo que compromete completamente a
					jogatina.
				</p>
				<p>
					São muitas informações importantes, quando estiver modelando seus objetos pense no
					trabalho que os mesmos vão dar aos processadores que irão executar. Faça uma boa combinação de designe e 
					modelagem pois garantem um bom desempenho. 
					O planejamento permite visualizar e resolver problemas estruturais.
				</p>
				<p><b>Play engine</b></p>
				<p>
					O método usado para rodar um jogo é o play engine. Engine é o mesmo que motor, é
					o programa que vai usar o processador do seu computador para gerar as imagens, incluindo
					as que você vê enquanto usa seu computador para realizar as atividades mais simples, essas
					imagens são geradas pelo motor gráfico do Windows. 
				</p>
				<p>
					Graças aos videogames essa tecnologia de produção de imagem se desenvolveu, hoje
					todos os smartphones, notbooks e até as smart tvs possuem processadores específicos para
					o processamento de imagem em tempo real, recurso que também é usado para exibir imagens 3D em televisores. 
					Esses processadores são chamados de GPU (Grafic Process Unity),
					permitem uma gama muito maior de simulações e drivers específicos para o processamento
					desses dados como Open 3D Gl, recurso usado para gerar gráficos 3D por todos os softwares
					de desenvolvimento de CGI.
				</p>
				<p>
					Um dos primeiros motores 3D foi o chip Super Effect, tornando possível a execução de
					jogos como Star Foz e Mário rpg, usando o sistema de 16 bits do super nintendo.
				</p>
				<p>
					Para entender melhor crie uma superfície usando um plano e sobre essa superfície crie
					um cubo, para nossa animação dinâmica vamos atribuir propriedades físicas aos objetos que
					vão permitir que eles interajam entre si, criando simulações dinâmicas de ações. 

				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit12/imagem_unit12_1.png') }}" alt="guia1">
					</figure>
				</div>
				<p>
					Vamos explorar alguns recursos, usando as ferramentas de seleção click sobre o cubo para
					que ele interaja de maneira a simular presença de gravidade, vamos clicar com o botão direito
					no painel objetos na opção que representa o cubo.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit12/imagem_unit12_2.png') }}" alt="guia2">
					</figure>
				</div>
				<p>
					No menu que surge vamos atribuir uma simulation tag, atribuir ao cubo a propriedade
					higid body, ela passa a interagir como um objeto, mas se você der play na timeline vai notar
					que ele não interage com seu plano, para isso click com o botão direito sobre o plano no painel
					objetos e em simulation tag, depois click sobre a opção collider body, isso vai criar interação
					entre os dois corpos.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit12/imagem_unit12_3.png') }}" alt="guia3">
					</figure>
				</div>
				<p>
					<b>Obs.:</b> para reposicionar o cubo no espaço, você deve zerar a timeline, caso contrário vai
					conseguir selecionar mas os objetos não irá se mover, ao configurar os dois objetos, zere
					sua timeline e click em play. Você pode realizar interações nos objetos e as configurações
					irão reagir com as alterações do ambiente. Crie quedas controladas, faça cópias do plano
					e mude os ângulos ao encaixá-lo, use a timeline para dar mais tempo de duração a animação, testes vão reforçar seu conhecimento.
				</p>
				<p><b>Barras de life</b></p>
				<p>
					Montaremos todo o nosso display de leitura, usaremos recursos de modelagem e animações diponíveis. 
					Crie dois planos e posicione como está descrito na imagem a baixo, insira
					uma camera e posicione de forma que um cubra o outro. 
				</p>
				<p>
					Com o auxílio do seu professor, crie uma animação na barra que se sobrepõe a visão da
					camera, essa barra representará o nosso sistema de vida que precisará ser configurado em
					outro programa. Finalize suas animações e tudo que vai fornecer leitura interativa sobre vida
					e íntens para que isso possa posteriormente ser usado.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit12/imagem_unit12_4.png') }}" alt="guia4">
					</figure>
				</div>
				<p><b>Menus</b></p>
				<p>
					É necessário pensar na interação com o usuário, devemos desenvolver um sistema de
					navegação que possa ou não conter animações, mas precisam implementar programações
					posteriormente , também podem funcionar através de outros sistema de interação como telas
					<b>touchscreen</b>. Planejar a interação do jogador deixa o jogo ou aplicativo mais orgânico.
				</p>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
