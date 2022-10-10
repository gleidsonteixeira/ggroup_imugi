@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 07 – Blending modes e máscara de corte')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula7">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 07 – Blending modes e máscara de corte</h5>
			<h5 class="barlow">Blending Modes (Modos de mesclagem)</h5>
			<p>O modo de mesclagem de uma camada determina como seus pixels são mesclados com
			pixels subjacentes da imagem. É possível criar diversos efeitos especiais, usando os modos de mesclagem. Vejamos a seguir alguns dos modos:</p>
			<p><b>Normal</b> – A edição ou preenchimento de cada pixel resulta na cor exata. Esse é o modo
			padrão.</p>
			<p><b>Dissolve</b> - A edição ou preenchimento de cada pixel resulta na cor exata. No entanto, a
			cor de resultado é uma substituição aleatória dos pixels com a cor base ou a cor de mesclagem, dependendo da opacidade em qualquer local de pixel.</p>
			<p><b>Multiply</b> - Observa as informações de cor em cada canal e multiplica a cor base pela
			cor de mesclagem. A cor do resultado é sempre uma cor mais escura. Multiplicar
			qualquer cor com preto produz preto. Multiplicando qualquer cor com branco deixa
			a cor inalterada.</p>
			<p><b>Darken</b> - Observa a informação de cor em cada canal e seleciona a cor da base ou da
			mistura - o que for mais escuro - como a cor do resultado. Os pixels mais claros do
			que a cor da mistura são substituídos e os pixels mais escuros do que a cor da mistura não são alterados.</p>
			<p><b>Color Burn</b> - Observa as informações de cor em cada canal e escurece a cor base para
			refletir a cor de mistura, aumentando o contraste entre os dois. Misturar com branco
			não produz mudanças.</p>
			<p><b>Linear Burn</b> - Observa as informações de cor em cada canal e escurece a cor base para refletir a cor de mistura, diminuindo o brilho. Misturar com branco não produz mudanças.</p>
			<p><b>Lighten</b> - Observa as informações de cor em cada canal e seleciona a cor da base ou da
			mistura, no caso a que for mais clara, como a cor de resultado. Pixels mais escuros do
			que a cor da mistura são substituídos, e os pixels mais claros do que a cor da mistura não
			mudam.</p>
			<p><b>Screen</b> - Observa as informações de cores de cada canal e multiplica o inverso das cores
			de mistura e base. A cor do resultado é sempre uma cor mais clara. A seleção com folhas
			pretas deixa a cor inalterada. O rastreio com branco produz branco. O efeito é semelhante à projeção de vários slides fotográficos em cima uns dos outros.</p>
			<p><b>Color Dodge</b> - Observa a informação da cor em cada canal e ilumina a cor da base para
			refletir a cor da mistura diminuindo o contraste entre os dois. Misturar com preto não
			produz nenhuma mudança.</p>
			<p><b>Linear Dodge (Add)</b> - Observa a informação da cor em cada canal e ilumina a cor baixa
			para refletir a cor da mistura aumentando o brilho. Misturar com preto não produz nenhuma mudança.</p>
			<p><b>Overlay</b> - Multiplica ou exibe as cores, dependendo da cor base. Padrões ou cores sobrepõem os pixels existentes, preservando os destaques e sombras da cor base. A cor
			base não é substituída, mas misturada com a cor da mistura para refletir a luminosidade
			ou escuridão da cor original.</p>
			<p><b>Soft Light</b> - Escurece ou clarifica as cores, dependendo da cor de mistura. O efeito é semelhante ao brilho de um foco difuso na imagem. Se a cor da mistura (fonte de luz) for
			mais clara que 50% de cinza, a imagem será iluminada como se estivesse esquivada.</p>
			<p><b>Hard Light</b> - Multiplica ou exibe as cores, dependendo da cor da mistura. O efeito é semelhante ao brilho de um foco áspero na imagem. Se a cor de mistura (fonte de luz) for
			mais clara do que 50% cinza, a imagem é iluminada, como se estivesse selecionada. Isso
			é útil para adicionar destaques a uma imagem. Se a cor da mistura estiver mais escura
			do que 50% de cinza, a imagem fica escura, como se fosse multiplicada. Isso é útil para
			adicionar sombras a uma imagem. Pintura com puro preto ou branco resulta em preto
			ou branco puro.</p>
			<p><b>Vivid Light</b> - Queima ou desvia as cores aumentando ou diminuindo o contraste, dependendo da cor da mistura. Se a cor da mistura (fonte de luz) for mais clara do que cinza
			de 50%, a imagem é iluminada pela diminuição do contraste. Se a cor da mistura estiver
			mais escura do que 50% cinza, a imagem é escurecida aumentando o contraste.</p>
			<p><b>Linear Light</b> - Queima ou desvia as cores diminuindo ou aumentando o brilho, dependendo da cor da mistura. Se a cor da mistura (fonte de luz) for mais clara do que cinza de
			50%, a imagem é iluminada aumentando o brilho. Se a cor da mistura estiver mais escura
			do que 50% cinza, a imagem é escurecida diminuindo o brilho.</p>
			<p><b>Pin Light</b> - Substitui as cores, dependendo da cor da mistura. Se a cor da mistura (fonte
			de luz) for mais clara do que 50% de cinza, os pixels mais escuros do que a cor da mistura
			serão substituídos e os pixels mais claros do que a cor da mistura não serão alterados.
			Se a cor da mistura for mais escura do que 50% de cinza, os pixels mais claros que a cor
			da mistura serão substituídos e os pixels mais escuros do que a cor da mistura não serão
			alterados. Isso é útil para adicionar efeitos especiais a uma imagem.</p>
			<p><b>Hard Mix</b> - Adiciona os valores de canal vermelho, verde e azul da cor de mesclagem aos
			valores RGB da cor base. Se a soma resultante para um canal for 255 ou maior, recebe
			um valor de 255; Se menor que 255, um valor de 0. Portanto, todos os pixels misturados
			têm valores de canal vermelho, verde e azul de 0 ou 255. Isso altera todos os pixels para
			cores de aditivo primário (vermelho, verde ou azul), branco ou preto.
			<p><b>Difference</b> - Observa as informações de cor em cada canal e subtrai a cor de mistura da
			cor de base ou a cor de base da cor de mistura, dependendo de qual tem o maior valor
			de brilho. A mistura com branco inverte os valores de cor de base; Mistura com preto
			produz nenhuma mudança.</p>
			<p><b>Exclusion</b> - Cria um efeito semelhante ao, mas menor em contraste do que o modo Diferença. A mistura com branco inverte os valores da cor de base. Misturar com preto não
			produz nenhuma mudança.</p>
			<p><b>Subtract</b> - Observa as informações de cor em cada canal e subtrai a cor de mistura da cor
			base. Em imagens de 8 e 16 bits, quaisquer valores negativos resultantes são recortados
			para zero.</p>
			<p><b>Divide</b> - Observa as informações de cor em cada canal e divide a cor de mistura da cor
			base.</p>
			<p><b>Hue</b> - Cria uma cor de resultado com a luminância e saturação da cor de base e a tonalidade da cor de mistura.</p>
			<p><b>Saturation</b> - Cria uma cor de resultado com a luminância e tonalidade da cor base e a
			saturação da cor de mistura. A pintura com este modo em uma área sem saturação (0)
			(cinza) não causa alteração.</p>
			<p><b>Color</b> - Cria uma cor de resultado com a luminância da cor base e a matiz e saturação da
			cor de mistura. Isso preserva os níveis de cinza na imagem e é útil para colorir imagens
			monocromáticas e para colorir imagens coloridas.</p>
			<p><b>Luminosity</b> - Cria uma cor de resultado com a matiz e saturação da cor base e a luminância da cor da mistura. Este modo cria o efeito inverso do modo Cor.</p>
			<p><b>Lighter Color</b> - Compara o total de todos os valores de canal para a cor de mistura e base
			e exibe a cor de maior valor. A cor mais clara não produz uma terceira cor, que pode resultar da mistura Lighten, porque escolhe os valores de canal mais altos da cor base e da
			mistura para criar a cor do resultado.</p>
			<p><b>Darker Color</b> - Compara o total de todos os valores de canal para a cor de mistura e base
			e exibe a cor de menor valor. Darker Color não produz uma terceira cor, que pode resultar da mistura Darken, porque ele escolhe os valores de canal mais baixos da base e da
			cor de mesclagem para criar a cor de resultado.</p>
			<p><b>Layer group</b> (Grupo de camadas) - ferramenta layer group permite que possamos
			agrupar camadas no painel a fim de organizá-las entre as demais camadas.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem100.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Para criar um grupo usando camadas selecionadas, podemos:</p>
			<p>I. Selecionar de modo sequencial ou alternado as camadas desejadas, e clicar no
			botão New Layer Group.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem101.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Selecionar de modo sequencial ou alternando as camadas desejadas, e clicar na
			opção New Group. </p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem102.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Selecionar de modo sequencial ou alternando as camadas desejadas, e combinar as teclas CTRL+G.</p>
			<p>É importante lembrar que para um grupo de camadas, as consequências de uma camada de
			ajuste e estilos de camada serão repassadas para todas as camadas desse grupo.</p>
			<h5 class="barlaw">Layer Opacity (Opacidade da camada)</h5>
			<p>As camadas podem ser encaradas como planos transparentes que quando preenchidos parcialmente ou em sua totalidade, podem sobrepor-se para criar uma composição. Sendo assim,
			quando necessário, estas áreas preenchidas ou opacas, podem ter sua opacidade reduzida para
			que possamos enxergar as demais camadas abaixo desta.</p>
			<p>Para reduzir ou aumentar a opacidade de uma camada podemos:</p>
			<p>I. No painel camadas, clicar no controle deslizante da opção Opacity.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem103.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Selecionar a camada e com a ferramenta Move selecionada, digitar no teclado numérico o número correspondente ao índice de opacidade, que varia entre 0
			e 9, onde ” 0 ” corresponde a 100% de opacidade e os demais, variam entre 10% e
			90%.</p>
			<h5 class="barlaw"> Clipping Mask (Máscara de corte)</h5>
			<p>A máscara de corte torna-se bastante útil no Adobe Photoshop, pois com ela temos
			a possibilidade de usar uma camada para delimitar a área de visibilidade de outra. A
			partir daí, não apenas camadas de pixels, como camadas de forma (shape layers) ou
			camadas ajuste, poderemos exibir somente a área que queremos, de acordo com a
			que aplicará a máscara.</p>
			<p>Porém, quando essa máscara de corte é aplicada entre duas camadas de pixels, ou entre
			uma camada de pixels e uma de forma, ela ocorre de modo diferente a da camada de
			ajuste.</p>
			<p>Podemos criar uma camada de corte ou clipping mask entre camadas de pixels e camadas de pixels com camadas de formas, através das formas abaixo:</p>
			<p>I. No painel layers, posicione a camada que será cortada diretamente acima da
			camada que servirá como camadas de corte.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem104.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Em seguida, posicione o cursor na linha entre as duas camadas e ao aparecer o ícone,
			<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit2/imagem105.PNG') }}" alt="guia">clique com o botão esquerdo do mouse.</p>
			<p>II. No painel layers, posicione a camada que será cortada diretamente acima da
			camada que servirá como camadas de corte. Em seguida, escolha a opção Creaté Clipping Mask no menu do painel de layers.</p>
			<p>Ao inserir uma camada de ajuste para uma composição, esta tem a função de repassar
			esse ajuste para todas as camadas abaixo dela no painel de layers. Porém, quando precisarmos delimitar a aplicação desse ajuste somente a camada diretamente abaixo do
			ajuste, podemos utilizar o clipping mask da seguinte forma:</p>
			<p>III. Clicando na camada e escolhendo a camada de ajuste clicando no botão</p>
			<p><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit2/imagem106.PNG') }}" alt="guia">. E em seguida clicando no botão This adjustment clips to the Layer.</p>
			<p><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit2/imagem107.PNG') }}" alt="guia">.</p>
			<h5 class="barlaw"> Auto-Blend Layers</h5>
			<p>Use o comando Auto-Blend Layers para costurar ou combinar imagens com transições suaves
			na imagem final composta. Auto-Blend Layers aplica máscaras de camada conforme necessário
			a cada camada para máscarar áreas ou diferenças de conteúdo subexpostas. As camadas Auto-Blend estão disponíveis somente para imagens RGB ou Grayscale. Ele não funciona com objetos inteligentes, camadas de vídeo, camadas 3D ou camadas de plano de fundo.</p>
			<p>Entre os muitos usos do comando Auto-Blend Layers, você pode misturar várias imagens de uma
			cena com diferentes áreas em foco para obter uma imagem composta com uma profundidade de
			campo estendida. Da mesma forma, você pode criar um composto misturando várias imagens de
			uma cena com diferentes iluminações. Além de combinar imagens de uma cena, você pode unir
			imagens em um panorama. (Embora, talvez seja melhor usar o comando Photomerge para produzir
			panoramas a partir de várias imagens.)</p>
			<p>Para combinar camadas usando o recurso Auto-Blend Layers devemos:</p>
			<p>I. Selecionar uma área que desejamos combinar com a área de outra camada e recortar para
			uma nova camada. Podemos usar os comandos Layer via Cut ou Layer via Copy do menu exibido
			através do clique com o botão direito do mouse sobre a seleção. </p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem108.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Usando a mesma seleção, realizar a exclusão (DELETE) dos pixels do conteúdo da
			camada que desejamos combinar com a que recortamos anteriormente.</p>
			<p>III. Em seguida, selecionar as duas camadas no painel Layers com o auxilio da tecla
			SHIFT.IV. Clicar no menu Edit - Auto-Blend Layers.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem109.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>V. Escolha Panorama para um ajuste automático que combine as duas imagens.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem110.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b> Utilizando as técnicas abordadas nesse capítulo, crie uma composição estilo
			Fantasy, com a orientação de seu professor.</p>
			<p><b>2.</b> Utilizando o Recurso Auto-Blend Layers, combine rostos de personagens distintos para criar uma foto-montagem.</p>			            
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
