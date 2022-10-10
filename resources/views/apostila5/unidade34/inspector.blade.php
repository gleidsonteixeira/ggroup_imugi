@extends('layouts.template')
@section('titulo','Unit 34 | Inspector Window')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade34" data-etapa="inspector">
			<h3 class="barlow">UNIT 34</h3>
			<h5 class="barlow upper">Inspector Window</h5>
			<p>
			Os objetos do jogo s ão as coisas vivas em nossos jogos, e os diferentes componentes são os
que dão vida a um objeto do jogo de maneiras diferentes. Por exemplo, o componente Audio
Source permite que um objeto do jogo emita um som, enquanto um componente Script permite
que um objeto do jogo se comporte de forma inteligente ou responda à um código que
o usuário fez.
			</p>
			<p>Quando clicamos em um GameObject dentro de nossa cena, o Inspetor fornece informações
detalhadas sobre esse objeto. Ele exibe todos os componentes que foram adicionados ao
GameObject selecionado, como animações, colliders, scripts e assim por diante, bem como
todos os atributos dentro dos componentes. Isso nos permite modifi car diretamente seus
campos e seus respectivos valores no Inspector.</p>
			
            <div class="metade esquerda ">
            <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit34/imagem2.png') }}" alt="guia1" style="width:75%;">
				</figure>
            </div>
            <div class="metade direita">
            <p>Também podemos alterar os valores durante o
tempo de execução para testar o efeito em tempo
real durante a execução do jogo. No entanto,
isso é usado apenas para testar temporariamente
o efeito das alterações. Assim que pararmos
o jogo, os valores serão rever􀆟 dos para seus
valores anteriores.</p>
            </div>
			<div class="clear"></div>
			<h5 class="barlow upper" style="margin-top:20px;">Adicionando componentes</h5>
		    <p>Para adicionar um componente ao GameObject selecionado, clicamos no botão Adicionar
Componente. Quando clicamos em <strong>Add component </strong>, onde recebemos uma lista de componentes
que podemos criar, conforme mostrado na imagem a seguir:</p>
                <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit34/imagem3.png') }}" alt="guia1" style="width:75%;">
				</figure>
				<p style="margin-top:20px;">Também podemos remover um componente clicando nele com o botão direito do mouse no
Inspetor e selecionando Remova o componente.</p>
                <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit34/imagem4.png') }}" alt="guia1" style="width:35%;">
				</figure>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
