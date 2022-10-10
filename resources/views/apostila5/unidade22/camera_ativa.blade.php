@extends('layouts.template')
@section('titulo','Unit 22 | Camera Ativa')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade22" data-etapa="camera_ativa">
			<h3 class="barlow">UNIT 22</h3>
			<h5 class="barlow upper">Aula 1 – Camera Ativa e seus instrumentos</h5>
			<p>
				Na útlima aula trabalhamos recurso de camera passiva, nesta vamos fazer de nossa camera
				um ator dentro da ação, explorar movimentos e estudar ângulos impossíveis. Além de nossa
				animação, vamos usar o projeto do carro que criamos, onde usamos estruturas dinâmicas
				permitindo que a camera se mova em meio ao ambiente renderizado.
			</p>
			<p>
				Caso não tenha a disposição suas animações, crie um plano e um cubo, atribua <b>simulation
				tags rigid body</b> para o cubo e <b>collision body</b> para o plano, incline suavemente o plane para que
				o cubo possa deslizar igualmente em sua quantidade de quadros na timeline, possibilitando
				que o cubo deslize até o final do plane. Se achar necessário crie cópias do plane para que ele
				possa rolar em mais superfícies, sobreponha as cópias de maneira a manter o movimeto de
				queda e garantir que vai ter tempo de explorar os ângulos de camera.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit22/imagem_unit22_1.png') }}" alt="guia1">
				</figure>
			</div>
			<p><b>Estática no cenário</b></p>
			<p>
				Mesmo sendo ativa, nossa camera pode ficar parada em uma parte do cenário exibindo
				apenas uma área da cena e mudando de acordo com o cordenado na timeline. Com ajuda do
				professor faça alterações necessárias no carro para que ele possa percorrer um caminho 
				acidentado com objetos que façam seus amortecedores trabalhar.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit22/imagem_unit22_2.png') }}" alt="guia2">
				</figure>
			</div>
			<p>
				Distribua pelo caminho pequenos cubos com <b>simulation tags collions</b> e tome cuidado
				para que tenham altura o suficiente para o carro conseguir rolar sobre eles, no caminho que
				vai ser percorrido pelo nosso veículo coloque duas ou mais cameras, ative a opção <b>automatic
				keyfram</b>, vá mudando sua posição na timeline e no menu camera do painel <b>views</b>, em <b>user</b>
				camera ative uma camera e em outro ponto da timeline mude para outra camera usando o
				menu <b>camers</b> do painel <b>views</b>, isso vai criar uma navegação com cameras paradas porém ativas, 
				mostrando ângulos diferentes e inserindo cortes durante a renderização do vídeo.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit22/imagem_unit22_3.png') }}" alt="guia3">
				</figure>
			</div>
			<p>
				Um outro sistema que pode ser usado é ancorar a camera ao objeto que se move, a camera
				continuará parada, mas estará ativa dentro do movimento geral do cenário, acompanhado
				o objeto e mantendo o ângulo de visão pré estabelcido. Abra seu arquivo com a animação
				do carro, insira uma camera e vá no menu <b>character</b> em <b>commands</b> e escolha a opção <b>set
				parente</b>, click no objeto que será seguido, no caso o carro.
			</p>
			<p><b>Seguindo movimento</b></p>
			<p>
				Podemos também usar uma camera livre com a mesma animação, apague a camera atual,
				insira uma nova e posicione sua timeline no primeiro quadro. Pressione o botão keyframe para
				difinir a primeira posição e ative o <b>keyframe automático</b> para gravar os próximos movimentos. 
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit22/imagem_unit22_4.png') }}" alt="guia4">
				</figure>
			</div>
			<p>
				Dê play em sua animação dinâmica e observe o movimento, quando rolarem alguns quadros,
				pause e faça um movimento com a camera para se aproximar e mudar o ângulo de visão sobre
				o objeto. Feito isso, sua camera estará animada entre o pontos anterior ao presente executanto 
				um movimento fluído e sem cortes, faça as alterações necessárias no decorrer da timeline para que a camera siga o objeto, 
				ao final de seu movimento ela pode passar por cima, por
				baixo e por dentro sem qualquer restrição de movimentos a não ser os que você configurou,
				esse é um dos recursos mais explorados em animação longa metragem.
			</p>
			<p><b>Travando mira</b></p>
			<p>
				Cameras em primeira pessoa também se tornaram um recurso do cinema, ela permite
				uma posição subjetiva do espectador dentro da cena fazendo dele não mais um espectador
				e sim uma participante direto da ação, para isso precisamos criar um movimento de camera
				que simule o caminhar de uma pessoa, podemos usar o personagem que desenvolvemos em
				aulas anteriores e com todos os recursos de <b>character tag</b> configurados para conseguir esse
				feito com uma animação simples de caminhada pronta.
			</p>
			<p>
				Insira uma camera e posicione onde fica a cabeça de seu persongem, 
				com a camera selecionada click no menu <b>character</b> e em <b>command</b> vá até <b>set parent</b>, feito isso click no painel
				objetos e sobre o objeto que ela deve seguir, no caso a cabeça. Salve seu personagem, ele será
				muito útil em fases posteriores do curso para animá-lo no <b>Unity</b>.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
