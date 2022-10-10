@extends('layouts.template')
@section('titulo','Unit 40 | Tilemap')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade40" data-etapa="tilemap">
			<h3 class="barlow">UNIT 40</h3>
			<h5 class="barlow upper">Tilemap</h5>
            <p>O sistema Tilemap da Unity facilita a criação e a interação de ciclos de design de nív eis de jogos, permite que artistas e designers façam protótipos rapidamente ao construir mundos de
jogos 2D. </p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem07.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">O Tilemap Editor é instalado por meio do Package Manager. Um Tilemap consiste em uma
sobreposição de grade e vários outros componentes trabalhando juntos.</p>
<p>Todo o sistema permite pintar níveis usando tiles e ferramentas de pincel e definir regras de 
comportamento dos tiles. Com o Tilemaps, você pode criar plataformas com bordas dinâmicas, tiles animados, posicionamentos de tiles aleatórios e muito mais.</p>
<p>O sistema Tilemap da Unity é perfeito para projetos 2D que contêm níveis de jogabilidade,
pois permite ao usuário prototipar níveis que podem ser imediatamente testados no motor
de jogo.</p>
<h5 class="barlow upper">Instalando o Editor de Tilemap</h5>
<p>Na lista suspensa da janela, selecione <strong>Package Manager</strong>,</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem08.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">Na coluna esquerda do Package Manager, clique em 2D Tilemap Editor e, em seguida, clique
em Install no canto inferior direito.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem09.png') }}" alt="guia1" style="width:55%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Crie um Tilemap</h5>
<p>Clique com o botão direito em Hierarchy View e selecione 2D <strong>Objects> Tilemap</strong>. </p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem10.png') }}" alt="guia1" style="width:55%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Sobre o sistema Tilemap</h5>
<p>Um Tilemap consiste em duas coisas: uma grade e o Tilemap real. </p>
<p>O editor Tilemap funciona em um relacionamento de um para muitos; há apenas uma grade
na cena, mas pode haver vários Tilemaps. A grade cria o layout para a Scene/cena da qual os
Tilemaps dependem. Selecionar a grade em sua <strong>Hierarchy</strong> abrirá as propriedades da grade
no <strong>Inspetor</strong>.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem11.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">Olhando para o Inspetor, existem quatro coisas que você pode alterar diretamente sobre
como a grade organiza e exibe os tiles. Além do Layout da célula, você normalmente deseja
deixar essas confi gurações em seus valores padrão:</p>
<p><strong>Cell Size</strong>: determina o tamanho de cada quadrado da grade. Esta mudança se aplica a todos
os Tilemaps dentro da grade.</p>
<p><strong>Cell Gap</strong>: determina o espaço entre cada quadrado da grade. Muito parecido com o tamanho
da célula, isso se aplica a todos os Tilemaps dentro da grade. </p>
<p><strong>Cell Layout</strong>: determina o layout dos tiles na grade. As opções incluem Retângulo, Hexagonal,
Isométrico e Isométrico Z como Y.</p>
<p><strong>Cell Swizzle</strong>: determina para qual direção a grade está voltada. As direções que você pode
selecionar são XYZ, XZY, YXZ, YZX, ZXY e ZYX.</p>
<h5 class="barlow upper">Configurando o Tilemap</h5>
<p>Selecionando o Tilemap abaixo da grade no painel Hierarchy. Ele exibirá dois componentes:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem12.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:40px;">Com o componente Tilemap, você pode alterar como o Tilemap se comporta e como os tiles
dentro dele funcionam. Abaixo está uma rápida análise das configurações do Tilemap:</p>
<p><strong>Animation Frame Rate</strong>: Isso afeta a velocidade de quaisquer tiles animados no Tilemap.</p>
<p><strong>Color</strong>: você pode definir não apenas a cor, mas também os valores de transparência dos tiles.
Isso é particularmente útil com tiles como nuvens ou água.</p>
<p><strong>Tile Anchor</strong>: é onde cada tiles será ancorado na grade. Por padrão, é definido para que os tiles
fiquem ancorados no centro de cada espaço da grade.</p>
<p><strong>Orientation</strong>: Semelhante à Grid Direction da grade, esta opção controla a direção em que os
tiles estarão voltados. Isso é útil quando você está trabalhando em um ambiente 3D e não 2D.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem13.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">Você também notará o <strong>Tilemap Renderer</strong>, permite alterar a forma como cada tile é renderizado e sua ordem de classificação.</p>
<ul>
    <li><strong>Sort Order</strong>: Você pode alterar a ordem de classifi cação das peças selecionando
quais são renderizadas primeiro. Você tem as seguintes opções: Inferior esquerdo,
Inferior direito, Superior esquerdo e Superior direito.</li>
<li>
<strong>Mode</strong>: define o modo de renderização dos tiles. As opções são Chunk (o padrão) ou
Individual.
 <ul>
     <li>No modo Chunk, Sprites em um Tilemap são renderizados em lotes, com
cada lote sendo tratado como um único item de classifi cação na Fila Transparente 2D. O número de chamadas de desenho é reduzido, resultando em
melhor desempenho, mas outros renderizadores não podem ser colocados
em camadas ou renderizados entre qualquer parte do Tilemap, o que impede o entrelaçamento de outros Sprites como Tilemap. O modo Chunk é ideal
para uma camada de base de terreno ou qualquer mapa que fique em uma
única profundidade na cena.</li>
<li>No Modo Individual, os Sprites são classifi cados com base em sua posição
no Tilemap e na Ordem de Classifi cação e renderizados de uma maneira que
permite o entrelaçamento de Sprites. Isso permite que um personagem fi que
atrás de outros Sprites, como entre árvores em uma fl oresta.</li>
 </ul>
</li>
<li><strong>Detect Chunk Culling</strong>: O Renderizador Tilemap pode detectar os limites de tiles
automaticamente ou os limites podem ser defi nidos manualmente nas próximas
opções.</li>
<li><strong>Chunk Culling Bounds</strong>: Isto permite a extensão dos limites para abate
no modo Chunk.</li>
<li><strong>Mask Interection</strong>: O tilemap pode, opcionalmente, ser visível apenas dentro ou fora
de uma máscara de Sprite. </li>
<li><strong>Material</strong>: Você pode alterar o material usado para renderizar cada tile.</li>
<li><strong>Sorting Layer</strong>: Esta é a Layer/camada que define a prioridade de sobreposição dos
Sprites durante a renderização.</li>
<li><strong>Order Layer</strong>: Use esta opção quando você tiver mais de um objeto em uma camada
de classificação. Ajuda a determinar qual camada é renderizada primeiro. Isso é útil
para renderizar.</li>
</ul>




</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
