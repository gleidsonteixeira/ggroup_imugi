@extends('layouts.template')
@section('titulo','Unit 3 | Cinema 4D')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade3" data-etapa="cinema_4D">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 1 – Apresentação IDE - Softwares e Hardwares</h5>
			<div class="conteiner">
				<p>
					O mais usado para desenvolvimento de vídeos, projetos e jogos em um ambiente agradável
					para o trabalho e com barras e menus que podem ser alterados de acordo com nossas necessidades e usa o 
					padrão de exibição por janelas. Hoje vamos conhecer algumas áreas de
					trabalho pré configuradas no programa para falicitar os diversos tipos de trabalho que por sua
					vez podem ser desenvolvidos.
				</p>
				<h5>Workspace Cinema 4D</h5>
				<p>
					O maior problema encontrado em todos os programas de desenvolvimento 3D é a interação
					e movimento entre eixos medindo profundidade. A barra de menus rápidos localizada a baixo
					do menu iniciar, traz ferramentas para facilitar a edição.
				</p>
				<div>
					<figure class="caixa2">
						<img src="{{ asset('assets/img/games_and_animation/unit3/imagem_unit3_01.png') }}" alt="guia1">
					</figure>
				</div>
				<p>
					Na workspace startup, temos a nossa disposição ferramentas de seleção que permitem segurar, 
					rotacionar e redimensionar o objeto. Logo a frente, temos os botões de acesso rápido,
					onde podemos inserir um cubo por exemplo. Mas, note que no canto direito inferior do botão
					existe uma pequena seta, dando a indicação de que a ferramenta possui sub propriedades,
					nesse caso poderemos escolher outros diversos tipos de formas.
				</p>
				<div>
					<figure class="caixa2">
						<img src="{{ asset('assets/img/games_and_animation/unit3/imagem_unit3_02.png') }}" alt="guia2">
					</figure>
				</div>
				<p class="elemento">
					<b>Dica:</b> repare no canto inferior esquerdo da tela,
					mostra a posição e os eixos, muito importante para
					navegação e quaisquer outras atividades onde X, Y
					e Z representam eixos e suas funções podem mudar
					de acordo com as ferramentas selecionadas.
				</p>
				<div class="elemento3">
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit3/imagem_unit3_03.png') }}" alt="guia3">
					</figure>
				</div>
				<div class="clear"></div>
				<div>
					<figure class="caixa2">
						<img src="{{ asset('assets/img/games_and_animation/unit3/imagem_unit3_04.png') }}" alt="guia4">
					</figure>
				</div>
				<p>
					Insira um cubo. Para mover o cubo podemos clicar em qualquer uma das trêis indicações coloridas dos eixos. 
					Lembrando que o movimento só vai acontecer no eixo selecionado. Se você escolher a segunda ferramenta, 
					teremos marcadores diferentes no objeto selecionado que nos
					permite interagir com o mesmo. A terceira ferramenta permite rotacionar o objeto usando os
					mesmos recursos ao realizar qualquer uma das tarefas, é printado no painel object properties
					o valor da alteração sendo ela ligada a posição, escala e rotação.
				</p>
				<div>
					<figure class="caixa2">
						<img src="{{ asset('assets/img/games_and_animation/unit3/imagem_unit3_05.png') }}" alt="guia5">
					</figure>
				</div>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
