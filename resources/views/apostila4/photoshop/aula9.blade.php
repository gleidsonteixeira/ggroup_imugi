@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 09 – Distorções e Perspectivas')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula9">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 09 – Distorções e Perspectivas</h5>
			<p>O Adobe Photoshop permite ajustar facilmente a perspectiva das imagens. Essas
			transformações são especialmente úteis para imagens que possuem linhas retas e
			superfícies planas – por exemplo, imagens arquitetônicas e imagens de prédios. Podemos usar essas transformações para objetos compostos com diferentes perspectivas em uma única imagem.</p>
			<h5 class="barlaw">Vanishing Point (Ponto de Fuga)</h5>
			<p>O Vanishing Point simplifica a edição correta em perspectiva de imagens que contêm
			planos de perspectiva - por exemplo, os lados de um edifício, paredes, pisos ou qualquer
			objeto retangular. No Vanishing Point, você especifica os planos em uma imagem e, em
			seguida, aplica edições como pintura, clonagem, cópia ou colagem e transformação. Todas as suas edições honram a perspectiva do plano em que você está trabalhando.</p>
			<p>Quando você retoca, adiciona ou remove conteúdo em uma imagem, os resultados são
			mais realistas porque as edições estão devidamente orientadas e dimensionadas para os
			planos de perspectiva. Depois de terminar de trabalhar no Vanishing Point, você pode
			continuar editando a imagem no Photoshop. Para preservar as informações do plano de
			perspectiva em uma imagem, salve o documento no formato PSD, TIFF ou JPEG.</p>
			<p>A caixa de diálogo do Vanishing Point se apresenta de modo independente com uma
			série de ferramentas para configurar e ajustar o recurso e para traçar a propria
			perspectiva no plano.</p>			
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem1.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>As ferramentas do Vanishing Point comportam-se como as suas contrapartes na caixa
			de ferramentas principal do Photoshop. Você pode usar os mesmos atalhos de teclado
			para configurar as opções da ferramenta. Selecionar uma ferramenta altera as opções
			disponíveis na caixa de diálogo Ponto de fuga.</p>
			<p><b>Edit Plane tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem2.PNG') }}" alt="guia"> - Seleciona, edita, move e redimensiona planos.</p>
			<p><b>Creaté Plane tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem3.PNG') }}" alt="guia"> - Define os quatro nós de canto de um plano, ajusta o tamanho e
			a forma do plano e rasga um novo plano.</p>
			<p><b>Marque tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem4.PNG') }}" alt="guia"> - Faz seleções quadradas ou retangulares, move ou clona seleções.</p>
			<p><b>Stamp tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem5.PNG') }}" alt="guia"> - Pinta com uma amostra da imagem. Ao contrário da ferramenta Clone
			Stamp, a ferramenta Stamp no Vanishing Point não pode clonar elementos de outra imagem.</p>
			<p><b>Brush tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem6.PNG') }}" alt="guia"> - Pinta uma cor selecionada em um plano.</p>
			<p><b>Transform tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem7.PNG') }}" alt="guia"> - Escalona, gira e move uma seleção flutuante movendo as alças da
			caixa delimitadora. Seu comportamento é semelhante ao uso do comando Free Transform em uma seleção de retângulo.</p>
			<p><b>Eyedropper tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem8.PNG') }}" alt="guia"> - Seleciona uma cor para pintar quando você clica na imagem de
			visualização.</p>
			<p><b>Measure tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem9.PNG') }}" alt="guia"> - Mede distâncias e ângulos de um item em um plano. Ver também
			Measure in Vanishing Point</p>
			<p><b>Hand tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem10.PNG') }}" alt="guia"> - Move a imagem na janela de visualização.</p>
			<p><b>Zoom tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem11.PNG') }}" alt="guia"> - Amplia ou reduz a visualização da imagem na janela de visualização.
			Trabalhando com Vanishing Point </p>
			<p>Para trabalhar com o Vanishing Point precisamos primeiramente observar alguns detalhes:</p>
			<p>• Para colocar os resultados de seu trabalho de Vanishing Point em uma camada
			separada, primeiro crie uma nova camada antes de escolher o comando Vanishing Point.
			Colocar os resultados do Vanishing Point em uma camada separada preserva sua imagem originale você pode usar o controle de opacidade da camada, os estilos e os modos
			de mesclagem.</p>
			<p>• Se você planeja clonar o conteúdo da imagem além dos limites do tamanho da
			imagem atual, aumente o tamanho da tela para acomodar o conteúdo adicional.</p>
			<p>• Se você planeja colar um item da área de transferência do Photoshop no Vanishing Point, copie o item antes de escolher o comando Ponto de Fuga. O item cópiado
			pode ser de um documento diferente do Photoshop. Se você estiver cópiando um texto,
			você deve rasterizar a camada de texto antes de copiar para a área de transferência.</p>
			<p>• Para limitar os resultados do Vanishing Point a áreas específicas da imagem,
			faça uma seleção ou adicione uma máscara à sua imagem antes de escolher o comando
			Vanishing Point.</p>
			<p>• Para copiar algo em perspectiva de um documento do Photoshop para outro,
			primeiro copie o item enquanto estiver no vanishing point de um documento. Quando
			você colar o item em outro documento enquanto no vanishing point, a perspectiva do
			item é preservada.</p>
			<p>Após criar uma nova camada, selecione-a e acesse o filtro Vanishing Point através do
			menu Filter – Vanishing Point, e em seguida:</p>
			<p>I. Usando a ferramenta Creaté Plane Tool, crie um plano de perspectiva para a
			imagem na janela do Vanishing Point.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem12.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Ao terminar a área do plano, cole o conteúdo cópiado para a área de transferência.</p>
			<p>III. Utilizando a ferramenta Transform tool, redimensione o conteúdo para caber
			no plano de perspectiva. Em seguida, arraste-o para cima do plano.</p>
			<h5 class="barlaw">Liquify</h5>
			<p>O filtro Liquify permite empurrar, puxar, girar, refletir, franzir e inchar qualquer área de
			uma imagem. As distorções que você cria podem ser sutis ou drásticas, o que torna o
			comando Liquify uma ferramenta poderosa para retocar imagens, além de criar efeitos
			artísticos. O filtro Liquify pode ser aplicado a imagens de 8 bits por canal ou de 16 bits
			por canal.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem13.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Ferramentas, opções e uma visualização de imagem para o filtro Liquify estão disponíveis
			na caixa de diálogo Liquify. Para exibir a caixa de diálogo, escolha Filter - Liquify. Selecione Modo Avançado (Advanced Mode) para acessar mais opções.
			Ferramentas de distorção do Liquify</p>
			<p>Várias ferramentas na caixa de diálogo Liquify distorcem a área do pincel ao manter
			pressionado o botão do mouse ou arrastar.</p>
			<p>Vejamos algumas:</p>
			<p>• <b>Forward Warp tool</b> <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem14.PNG') }}" alt="guia"> - Empurra os pixels para frente à medida que você
			arrasta.</p>
			<p>• <b>Reconstruct tool</b> <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem15.PNG') }}" alt="guia"> - Inverte a distorção que você já adicionou, enquanto
			segura o botão do mouse e arrasta.</p>
			<p>• <b>Twirl Clockwise tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem16.PNG') }}" alt="guia"> - Gira pixels no sentido horário, mantendo pressionado o botão do mouse ou arrastando. Para girar os pixels no sentido anti -horário,
			mantenha pressionada a tecla Alt enquanto mantém pressionado o botão do mouse ou
			arrasta.</p>
			<p>• <b>Pucker tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem17.PNG') }}" alt="guia"> - Move os pixels em direção ao centro da área do pincel ao
			manter pressionado o botão do mouse ou arrastar.</p>
			<p>• <b>Bloat tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem18.PNG') }}" alt="guia"> - Move os pixels para longe do centro da área do pincel ao manter pressionado o botão do mouse ou arrastar.</p>
			<p>• <b>Push Left tool</b><img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem19.PNG') }}" alt="guia"> - Move os pixels para a esquerda quando você arrasta a
			ferramenta para cima (os pixels movem para a direita se você arrasta para baixo). Você
			também pode arrastar no sentido horário em torno de um objeto para aumentar seu
			tamanho ou arraste no sentido anti -horário para diminuir seu tamanho. Para empurrar
			os pixels para a direita quando você arrasta para cima (ou para mover os pixels para a
			esquerda quando você arrasta para baixo), mantenha pressionada a tecla (Alt) enquanto arrasta.</p>
			<p>Opções de ferramentas de distorção</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem20.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Na área de opções de ferramentas da caixa de diálogo, defina as seguintes opções:</p>
			<p><b>• Brush Size</b> - Define a largura do pincel que você usará para distorcer a imagem.</p>
			<p><b>• Brush Density</b> - Controla como um pincel penas na borda. Um efeito é mais
			forte no centro do pincel e mais leve na borda.</p>
			<p><b>• Brush Pressure</b> - Define a velocidade na qual as distorções são feitas quando
			você arrasta uma ferramenta na imagem de visualização. Usar uma pressão de pincel
			baixa faz com que as mudanças ocorram mais lentamente, por isso é mais fácil pará-las
			exatamente no momento certo.</p>
			<p><b>• Brush Raté</b> - Define a velocidade na qual as distorções são aplicadas quando
			você mantém uma ferramenta (como a ferramenta Twirl) estacionária na imagem
			de visualização. Quanto maior o ajuste, maior a velocidade na qual as distorções são
			aplicadas.</p>
			<p><b>• Stylus Pressure</b> - Utiliza leituras de pressão de caneta de mesa digitalizadora. (Esta opção está disponível somente quando você está trabalhando com uma
			mesa digitalizadora.) Quando selecionado, a pressão da escova para as ferramentas
			é a pressão da caneta multiplicada pelo valor Pressão do pincel.</p>
			<h5 class="barlaw">Congelar e descongelar áreas</h5>
			<p>Podemos congelar áreas que não desejamos modificar ou descongelar áreas congeladas
			para torná-las editáveis novamente. Podemos também inverter as áreas congeladas e
			descongeladas.</p>
			<h5 class="barlaw">Congelar áreas</h5>
			<p>Ao congelar áreas da imagem de visualização, podemos proteger essas áreas de alterações. As áreas congeladas são cobertas por uma máscara que pintamos usando
			a ferramenta Freeze Mask <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem21.PNG') }}" alt="guia">. Podemos também usar uma máscara existente,
			seleção ou transparência para congelar áreas. Podemos exibir a máscara na imagem
			de visualização para ajudá-lo a aplicar distorções.</p>
			<h5 class="barlaw">Usando a ferramenta Freeze Mask</h5>
			<p>Selecione a ferramenta Freeze Mask e arraste sobre a área que você deseja proteger. Clique com a tecla Shift pressionada para congelar em uma linha reta entre o ponto
			atual e o ponto clicado anteriormente.</p>
			<h5 class="barlaw">Usando um canal de seleção, máscara ou transparência existente</h5>
			<p>Se você estiver aplicando o filtro Liquify a uma camada com uma seleção, uma máscara
			de camada, uma transparência ou um canal alfa, escolha Seleção, Máscara de camada,
			Transparência ou Máscara rápida em qualquer um dos menus pop-up de cinco ícones
			nas Opções de Máscara da caixa de diálogo. Isso determina como as áreas da imagem
			de visualização são congeladas ou máscaradas.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem22.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Congelar todas as áreas descongeladas</p>
			<p>Clique em Máscarar tudo na área Opções de máscara da caixa de diálogo.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem23.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Inverter áreas descongeladas e congeladas</p>
			<p>Clique em Invert all na área Opções de máscara da caixa de diálogo.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem24.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Mostrar ou ocultar áreas congeladas</p>
			<p>Selecione ou desmarque Show Mask na área Opções de Exibição da caixa de diálogo.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem25.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Mudando a cor das áreas congeladas</h5>
			<p>Escolha uma cor no menu pop-up Cor da Máscara na área Opções de Exibição da caixa
			de diálogo.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem26.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Descongelar áreas</h5>
			<p>Para tornar áreas congeladas em editáveis, faça o seguinte:</p>
			<p>I. Selecione a ferramenta Thaw Mask <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem27.PNG') }}" alt="guia"> e arraste sobre a área. Clique com a tecla Shift pressionada para descongelar em uma linha reta entre o ponto atual e o ponto
			clicado anteriormente.</p>
			<p>II. Ao descongelar todas as áreas congeladas, clicando no botão None na área
			Opções de máscara da caixa de diálogo.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem28.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Invertendo áreas congeladas e descongeladas, clicando em Invert all na área
			Opções de máscara da caixa de diálogo.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem29.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Opções de Máscara com o filtro Liquify</h5>
			<p>Quando temos uma seleção, transparência ou máscara existente em uma imagem, essa
			informação é mantida quando a caixa de diálogo Liquify é aberta. Podemos escolher
			uma das seguintes opções de máscara:</p>
			<p><b>• Replace Selection</b> <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem30.PNG') }}" alt="guia"> - Mostra a seleção, máscara ou transparência na imagem
			original.</p>
			<p><b>• Add To Selection</b> <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem31.PNG') }}" alt="guia"> - Mostra a máscara na imagem original, para que você possa
			adicionar à seleção usando a ferramenta Freeze Mask.</p>
			<p><b>• Subtract From Selection</b> <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem32.PNG') }}" alt="guia"> - Subtrai pixels no canal da área congelada atual.</p>
			<p><b>• Intersect With Selection</b> <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem33.PNG') }}" alt="guia"> - Usa somente pixels selecionados e atualmente congelados.</p>
			<p><b>• Invert Selection</b> <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem34.PNG') }}" alt="guia"> - Utiliza pixels selecionados para inverter a área congelada
			atual.</p>
			<p>Reconstruir distorções</p>
			<p>Depois de distorcer a imagem de visualização, podemos usar uma variedade de controles e modos de reconstrução para reverter as alterações ou refazer as alterações de novas maneiras. Reconstruções podem ser aplicadas de duas maneiras. Podemos aplicar uma reconstrução a toda
			a imagem, suavizando a distorção em áreas não congeladas, ou podemos usar a ferramenta de
			reconstrução para reconstruir áreas específicas. Também podemos impedir a reconstrução de
			áreas distorcidas, para isso podemos usar a ferramenta Freeze Mask.</p>
			<h5 class="barlaw">Reconstruir uma imagem inteira</h5>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem35.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Clique em Reconstruct na área opções de reconstrução da caixa de diálogo. Em seguida, na caixa
			de diálogo Revert Reconstruction, especifique um valor e clique em OK.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem36.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b> Criar perspectivas com vanishing point no ambiente de uma composição usando
			padrões de textura e sombras dos objetos.</p>
			<p><b>2.</b> Aplicar liquify em modelos para publicação em revista.</p>			
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
