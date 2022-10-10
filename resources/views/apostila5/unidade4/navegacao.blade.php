@extends('layouts.template')
@section('titulo','Unit 4 | Navegação')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade4" data-etapa="navegacao">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow upper">Aula 1 – Navegação</h5>
			
			<p>
				É necessário muita atenção aos detalhe de navegação, já que o ambiente de desenvolvimento 3D é uma simulação de mundo real, 
				precisamos saber como navegar, selecionar e editar
				nossos objetos.
			</p>
			<p>
				<b>Ferramentas, Objetos, dimensões e linguagens. Dimensões e linguagens</b>
			</p>
			<p>
				<b>Dimensões</b> são unidades de grandeza usadas para representar ou suprir a necessidade de
				uma representação para compreensão de um assunto observado. Medidas como <b>comprimento, 
				temperatura</b> e massa são grandezas dimensionais.
			</p>
			<p>
				Vamos nos concentrar na representação de objetos. Para a física, um objeto pode ser:
				<b>Puntiforme</b> representado por um ponto;
				<b>Lineforme</b> quando suas dimensões podem ser representadas por uma reta;
				<b>Bidimensional</b> com dimensões de altura e largura;
				<b>Tridimensional</b> com a representação da profundidade além de altura e largura;
				<b>Polidimensional</b> com a representação do hipercubo.
			</p>
			<p>
				As leituras sobre sua posição em relação aos 3 eixos é feita facilmente através da representação fornecida pela tela <b>View</b>,
				permitindo uma edição mais intuitiva. Como em qualquer
				ferramenta, a perfeição vem com prática.
				Para modelagem de objetos usaremos especificamente algumas ferramentas que precisamos conhecer melhor. 
				Sim, o seu computador permite que você use os softwares, mas
				vamos dar foco as funcionalidades adicionais das ferramentas e o uso de atalhos. Atenção a
				postura e como você deve se comportar durante uma edição.
			</p>
			<p>
				<b>Dica:</b> Mantenha as 2 mãos livres, fique longe de equipamentos que podem provocar sua
				distração. Se o telefone for realmente necessário, deixe ele dentro do seu campo de visão
				em modo silencioso. Procure uma cadeira confortável que te deixe em uma posição favorável a longos períodos sentado. 
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit4/imagem_unit4_01.png') }}" alt="guia1">
                </figure>
			</div>
			<p><b>Vamos ao assunto...</b></p>
			<div class="esquerda">
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit4/imagem_unit4_02.png') }}" alt="guia2">
                </figure>
			</div>
			<p class="direita">
				A maior dificuldade está na sua ferramenta de seleção direta ou o
				mouse, ele é responsável por mover o cursor na tela. Mas você pode
				movê-lo livremente em um plano bidimensional representado pela
				tela do seu computador, ele pode se mover em 2 eixos, um que permite movimentos horizontais e outro que permite movimentos verticais,
				que de modo matemático cartesional são
				representados pelos eixos X e Y. No entanto, nossos objetos possuem
				uma dimensão além da largura representada por “X”, ou da altura
				representada por “Y”, vamos conhecer o eixo “Z” que agora representa profundidade. Essa
				profundidade também possui variações, pode ser representada com ou sem perspectiva de
				maneira isométrica, mas nossos objetos ainda não são 3D, apenas parecem ser 3D.
				Existe uma dificuldade em representar um objeto tridimensional em uma superfície bidimensional. 
				São como as imagens dessa apostila, não são 3D mas representam um objeto em 3
				dimensões, mesmo estando impresso em uma folha que só pode nos dar as dimensões de
				altura e largura. Isso se chama representação 3D, quando se perde uma parte da informação
				para que ela seja representada em uma dimensão que a forma não pertence, ela deixa de ser
				forma e vira representação. 
			</p>
			<div>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit4/imagem_unit4_03.png') }}" alt="guia3">
                </figure>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
