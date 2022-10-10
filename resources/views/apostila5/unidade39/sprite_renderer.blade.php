@extends('layouts.template')
@section('titulo','Unit 39 | Sprite Renderer')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade39" data-etapa="sprite_renderer">
			<h3 class="barlow">UNIT 39</h3>
			<h5 class="barlow upper">Sprite Renderer</h5>
            <p>O componente Sprite Renderer renderiza o Sprite e controla como ele aparece visualmente
em um Cena para projetos 2D e 3D.</p>
<p>Quando você cria um Sprite <strong>( GameObject > 2D Objeto > Sprite ) </strong>, o Unity cria automaticamente
um GameObject com o componente Sprite Renderer anexado. Você também pode adicionar
o componente a um GameObject existente por meio do menu: <strong> Component > Rendering >
Sprite Renderer. </strong></p>

<h5 class="barlow upper">Conhecendo as propriedades</h5>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem01.png') }}" alt="guia1" style="width:55%;">
</figure>

<p style="margin-top:20px;"><strong> Sprite</strong>: Define qual textura/Sprite o compone nte deve renderizar. Você deve clicar no pequeno
ponto à direita para abrir a janela do seletor de objetos e selecione na lista de Assets Sprite
disponíveis.</p>

<p><strong>Color</strong>: Define a cor do vértice do Sprite, que tinge ou recolore a imagem do Sprite. Use o seletor
de cores para definir a cor do vértice da textura/Sprite renderizada.</p>
<p><strong>Flip</strong>: Inverte a textura Sprite ao longo do eixo verifi cado(y ou X). Isso não muda a posição de
transformação do GameObject.</p>
<p><strong>Material</strong>: Defina o material usado para renderizar a textura/Sprite.</p>
<p><strong>Draw Mode</strong>: Define como o Sprite é dimensionado quando suas dimensões mudam. Selecione
uma das seguintes opções na caixa suspensa.</p>

<ul>
    <li><strong>Simple</strong>: A imagem inteira é redimensionada quando suas dimensões mudam.
Esta é a opção padrão.</li>
<li><strong>Sliced</strong>: Selecione este modo se o Sprite tiver 9 fatias .</li>
<li><strong>Size</strong>: (‘Sliced’ ou ‘Tiles’) Insira a nova largura e altura do Sprite para dimensionar
o Sprite com 9 fatias corretamente.</li>
<li><strong> Tiled</strong>: Por padrão, este modo faz com que o meio do Sprite com 9 fatias se agrupe
ao invés de ser dimensionado quando suas dimensões mudam. Use o modo de tile/
mosaico para controlar o comportamento de Tile do Sprite.</li>
<li><strong>Continuous</strong>: Este é o modo de tile padrão . No modo Continuo, a seção mediana
é lado a lado uniformemente quando as dimensões do Sprite mudam.</li>
<li><strong>Adaptive</strong>: No modo Adaptive, a textura/Sprite estica quando suas dimensões
mudam, semelhante ao modo Simples. Quando a escala das dimensões alteradas
encontra o valor de alongamento, a seção intermediária começa a se agrupar.</li>
<li><strong>Stretch Value</strong>: Use o controle deslizante para definir o valor entre 0 e 1. O valor
máximo é 1, que representa o dobro da escala do Sprite original.</li>
</ul>

<p><strong>Sorting Layers</strong>: Define a camada de classificação do Sprite que controla sua prioridade durante
a Renderização. Selecione uma camada de classifi cação existente na caixa suspensa ou crie
uma nova camada de classifi cação.</p>
<p><strong>Order in layer</strong>: Define a prioridade de renderização do Sprite em sua camada de classificação.
Sprites com números mais baixos são renderizados primeiro, com Sprites com números mais
altos se sobrepondo aos abaixo ( é mostrado mais primeiro).</p>
<p><strong>Mask Interection</strong>: Define como o Sprite Renderer se comporta ao interagir
com uma Máscara Sprite .</p>
<p><strong>Sprite sort point</strong>: Escolha entre o Centro do Sprite ou seu Ponto Pivô ao calcular a distância
entre o Sprite e a Câmera.</p>

</div>
</div>

</main>

<script>
	activeMenu();
</script>

@endsection
