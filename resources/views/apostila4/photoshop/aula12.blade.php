@extends('layouts.template')
@section('titulo','PHOTHOSHOP | Aula 12 - Pintura Digital')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula12">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 12 – Pintura Digital </h5>
			{{-- <span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila3/UNIT 7/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
            </audio> --}}
            <div class="clear"></div>
            <h5 class="barlow">Ferramentas de pintura</h5>
            <p style="margin-top: 16px">
                O Adobe Photoshop oferece diversas ferramentas de pintura e edição de cores de imagens. A Brush Tool e a Pencil funcionam como uma ferramenta de desenho tradicional,
                aplicando cores com pinceladas. Ferramentas como Borracha, Blur e Smudge modificam
                as cores existentes na imagem. Na barra de opções de cada uma dessas ferramentas, é
                possível definir a forma de aplicar a cor a uma imagem, bem como escolher pontas de
                pincéis predefinidas.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem1.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Predefinições de pincéis e ferramentas</b></p>
            <p>
                É possível salvar um conjunto de opções de pincel como uma predefinição para acessar rapidamente as características de pincel usadas com freqüência. O Photoshop inclui
                várias predefinições de pincel de amostra. É possível iniciar com essas predefinições e
                modificá-las para produzir novos efeitos. Muitas predefinições de pincel originais estão
                disponíveis para download na Web. Podemos escolher predefinições rapidamente no
                seletor de Predefinição de pincel, na barra de opções, que permite modificar temporariamente o tamanho e a dureza de uma predefinição de pincel. Podemos salvar as
                predefinições da ferramenta quando desejar salvar as características da ponta do pincel
                personalizadas juntamente com as configurações da barra de opções, como opacidade, fluxo e cor.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem2.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Opções de ponta do pincel</b></p>
            <p>
                Juntamente com as configurações da barra de opções, as opções da ponta do pincel controlam a aplicação das cores. Podemos aplicar cor gradualmente, com arestas suaves,
                com grandes traçados de pincel, com várias dinâmicas de pincel, com diferentes propriedades de mesclagem e com pincéis de várias formas. É possível aplicar uma textura
                com os traçados de pincel para simular a pintura em telas ou papéis artísticos. Também é
                possível simular pintura com spray usando um aerógrafo. Use o painel Pincel para definir
                as opções de ponta do pincel. Se trabalharmos com uma mesa digitalizadora, poderemos controlar a aplicação das cores usando a pressão, o ângulo e a rotação da caneta ou
                uma caneta digitalizadora. Podemos definir as opções dos digitalizadores de desenho no
                painel Pincel e na barra de opções.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem3.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Pintar com a Brush Tool ou com a Pencil Tool</b><i><img class="iconex" src="{{ asset('assets/img/photoshop/unit8/icone1.png') }}" alt="guia"></i></p>
            
            <p>
                As ferramentas Pincel e Lápis pintam uma imagem com a cor atual do primeiro plano. A
                ferramenta Pincel cria traçados suaves de cor. A ferramenta Lápis cria linhas com arestas
                sólidas. A ferramenta Rotação gira a tela de pintura e facilita a pintura.
            </p>
            <p>1. Escolha a cor do primeiro plano.</p>
            <p>2. Selecione a ferramenta Pincel ou Lápis.</p>
            <p>3. Escolha um pincel no seletor Predefinições do pincel.</p>
            <p>4. Configure as opções da ferramentas para modo, opacidade e assim por diante na barra de opções.</p>
                
            <p><b>Siga um ou mais destes procedimentos:</b></p>
            <ul class="lista-vertical">
                <li>
                    <p>
                        • Clique na imagem e arraste para pintar. Para traçar uma linha reta, clique em
                        um ponto inicial na imagem. Em seguida, mantenha a tecla Shift pressionada e clique em um ponto final.
                    </p>
                </li>
                <li>
                    <p>
                        • Quando usar a ferramenta Pincel como aerógrafo, pressione o botão do mouse
                        sem arrastar para intensificar a cor.
                    </p>
                </li>
            </ul>
            <p style="margin-top:32px">Opções da ferramenta de pintura</p>
            <p><b>Toggle the Brush Panel</b><i><img class="iconex" src="{{ asset('assets/img/photoshop/unit8/icone2.png') }}" alt="guia"></i></p>
            <p>
                Define uma das opções a seguir na barra de opções. As opções disponíveis variam de
                acordo com a ferramenta.
            </p>
            <p><b>Painting Mode</b></p>
            <p>
                Define o método de mesclagem da cor pintada com os pixels subjacentes existentes. Os
                modos disponíveis são alterados de acordo com a ferramenta selecionada no momento.
                Os modos de pintura são similares aos modos de mesclagem de camadas.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem4.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Set Opacity for Stroke</b><i><img class="iconex" src="{{ asset('assets/img/photoshop/unit8/icone3.png') }}" alt="guia"></i><p>
            <p> 
                Define a transparência da cor aplicada. Á medida que você pinta numa área, a opacidade não ultrapassa o nível definido, não importa quantas vezes o cursor é movido
                sobre a área, até que se solte o botão do mouse. Se você pintar novamente sobre a
                área, será aplicada uma cor adicional no equivalente à opacidade definida. O valor
                100% indica opaco.
            </p>
            <p><b>Flow</b><i><img class="iconex" src="{{ asset('assets/img/photoshop/unit8/icone4.png') }}" alt="guia"></i></p>
            <p>
                Define a taxa de aplicação da cor conforme o ponteiro é movimentado em uma área. 
                Ao pintar sobre uma área, mantenha o botão do mouse pressionado.A quantidade de cor
                aumenta com base na taxa de vazão até a opacidade definida. Por exemplo, ao definir a
                opacidade em 33% e a vazão em 33%, cada vez que você se mover sobre uma área, sua
                cor será movida 33% na direção da cor do pincel. O total não irá ultrapassar 33% a não
                ser que você solte o botão do mouse e trace a área novamente.
            </p>
            <p>
                Pressione uma única tecla numérica para definir a opacidade de uma ferramenta em
                múltiplos de 10% (pressionar 1 define-a como 10%; pressionar 0, como 100%). Pressione
                duas teclas numéricas para definir uma opacidade específica. Para definir fluxo, 
                pressione a tecla Shift e as teclas numéricas. 
            </p>
            <p><b>Enable Airbrush Style build-up effects</b></p>
            <p>
                Simula a pintura com um aerógrafo. À medida que movimenta o ponteiro em uma área,
                a tinta se concentra enquanto o botão do mouse é pressionado. As opções de dureza do
                pincel, opacidade e fluxo controlam a rapidez e a quantidade da tinta aplicada. Clique no
                botão para ativar ou desativar esta opção.
            </p>
            <p><b>Seleção de uma preferência</b><i><img class="iconex" src="{{ asset('assets/img/photoshop/unit8/icone5.png') }}" alt="guia"></i></p> 
            <p>
                As ferramentas de pintura têm três cursores possíveis: o cursor padrão (o ícone da caixa
                de ferramentas), um cursor de mira e um cursor que corresponde ao tamanho e à forma
                da ponta do pincel selecionada atualmente.
            </p>
            <p>1. Vá em Edit – Preferences – Cursors</p>
            <p>
                2. Selecione os cursores desejados na área Painting Cursors e na área Others cursors. Os cursores de amostra são alterados para refletir as suas escolhas. Para um cursor
                de ponta de pincel, escolha um tamanho e se desejar, incluir uma mira no cursor. A ponta
                do pincel Normal restringe o tamanho do cursor às áreas de traçado do pincel com 50%
                ou mais de opacidade. A ponta do pincel com Tamanho total redimensiona o cursor para
                a área inteira afetada pelo traçado do pincel. Para os pincéis macios, isso produz um tamanho de cursor maior do que a configuração normal para incluir as áreas do traçado do
                pincel com opacidade mais clara. Para combinar tipos diferentes de cursores, selecione
                Mostrar cursor de mira, em Ponta de pincel, ou Mostrar cursor de mira ao pintar. Ou,
                para as ferramentas Caneta e Pincel, pressione Caps Lock para alternar entre o cursor
                padrão e o cursor de mira.
            </p>
            <p><b>Criação e modificação de pincéis</b></p>
            <p>
                É possível criar pincéis que se aplicam à pintura de imagens de várias maneiras. 
                Selecione um pincel predefinido existente, uma forma de ponta de pincel ou crie uma ponta
                exclusiva a partir de parte de uma imagem. Escolha as opções do painel Pincel para especificar como a pintura é aplicada.
            </p>
            <p><b>Visão geral do Brush Panel</b></p>
            <p>
                No painel Pincel, é possível selecionar pincéis predefinidos no painel Brush Presets, mas
                também é possível modificar pincéis existentes e projetar novos pincéis personalizados.
                O painel Brush contém as opções de ponta de pincel que determinam como a pintura é
                aplicada a uma imagem.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem5.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Exibição do painel Brush e das opções de pincel</p>
            <p>
                1. Escolha Window - Brush. Ou selecione uma ferramenta de pintura, apagamento,
                coloração ou foco e clique no botão painel no canto direito da barra de opções.
            </p>
            <p>
                2. Selecione um conjunto de opções no lado esquerdo do painel. As opções disponíveis
                para o conjunto são exibidas no lado direito do painel.
            </p>
            <p>
                Clique na caixa de seleção localizada à esquerda do conjunto de opções para ativar ou
                desativar as opções sem visualizá-las.
            </p>
            <p><b>Criar uma ponta de pincel a partir de uma imagem</b></p>
            <p>
                1. Usando qualquer ferramenta de seleção, selecione a área de imagem que você quer
                usar como um pincel personalizado. A forma do pincel pode ter até 2500 por 2500 pixels de tamanho.
            </p>
            <p>
                Ao pintar, você não pode ajustar a rigidez de pincéis amostrados. Para criar um pincel
                com bordas nítidas, defina Pena como pixels zero.
            </p>
            <p>Para criar um pincel com bordas suaves, aumente a configuração de Pena.</p>
            <p>
                Se você seleciona uma imagem colorida, a imagem da ponta do pincel será convertida em tons de cinza. 
                Qualquer máscara de camada aplicada na imagem não afeta a definição da ponta da camada
            </p>
            <p>2. Escolha Edit Define brush preset.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem6.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            
            <p style="margin-top:32px">3. Nomeie o pincel e clique em OK.</p>
            <p>Opções de formato padrão da ponta do pincel</p>
            <p>Para pontas de pincel padrão, você pode definir as seguintes opções no painel Pincel:</p>
            <p><b>Size</b></p>
            <p>Controla o tamanho do pincel. Digite um valor em pixels ou arraste o controle deslizante.</p>
            <p><b>Flip X</b></p>
            <p>Altera a direção de uma ponta de pincel em seu eixo x.</p>
            <p><b>Flip Y</b></p>
            <p>Altera a direção de uma ponta de pincel em seu eixo y.<i><img class="iconex" src="{{ asset('assets/img/photoshop/unit8/icone6.png') }}" alt="guia"></i></p>
            <p><b>Angle</b></p>
            <p>
                Especifica o ângulo em que o eixo maior de um pincel elíptico ou de amostra é girado
                em relação à horizontal. Digite um valor em graus ou arraste o eixo horizontal na caixa
                de visualização
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem7.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Roundness</p>
            <p>
                Especifica a proporção entre os eixos maior e menor do pincel. Digite um valor percentual ou
                arraste os pontos na caixa de visualização. Um valor de 100% indica um pincel circular, um
                valor de 0% indica um pincel linear e valores intermediários indicam pincéis elípticos
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem8.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Hardness</b>/</p>
            <p>
                Controla o tamanho do centro duro do pincel. Digite um número ou use o controle deslizante para indicar um valor percentual do 
                diâmetro do pincel. Não é possível alterar a dureza de pincéis de amostra.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem9.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Spacing</b></p>
            <p>
                Controla a distância entre as marcas do pincel em um traçado. Para alterar o espaçamento, digite um número ou use o controle 
                deslizante para indicar um valor percentual do diâmetro do pincel. Quando essa opção não está selecionada, a velocidade do cursor determina o espaçamento.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem10.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                Ao usar um pincel predefinido, pressione a tecla “[“ para diminuir a largura do pincel ou
                a tecla ”]” para aumentar a largura. Para caligráficos, de círculos suaves ou de círculos
                sólidos, pressione a tecla “Shift + [“ para diminuir a dureza do pincel e “Shift + ]” para
                aumentá-la.pincéis.
            </p>
            <div class="metade esquerda">
                <p>Size</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem11.png') }}" alt="guia">
                </figure>
            </div>
            <div class="metade direita">
                <p>Flip X</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem12.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>

            <div class="metade esquerda" style="margin-top:16px">
                <p>Flip Y</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem13.png') }}" alt="guia">
                </figure>
            </div>
            <div class="metade direita" style="margin-top:16px">
                <p>Angle</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem14.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>

            <div class="metade esquerda" style="margin-top:16px">
                <p>Roundness</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem15.png') }}" alt="guia">
                </figure>
            </div>
            <div class="metade direita" style="margin-top:16px">
                <p>Harness</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem16.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <br>
            <p style="margin-top:16px"><b>Brush Scattering (Dispersão)</b></p>
            <p>A dispersão da escova determina o número e a colocação das marcas em um traçado.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem17.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Scatter and Control</b></p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem18.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                Especifica como as marcas de pincel são distribuídas em um traçado. Quando a opção
                Ambos os Eixos está selecionada, as marcas do pincel são distribuídas em uma direção
                radial. Quando a opção Ambos os Eixos não está selecionada, as marcas de pincel são
                distribuídas perpendicularmente ao demarcador do traçado.
            </p>
            <p>
                Para especificar a porcentagem máxima de dispersão, digite um valor. Para especificar
                como controlar a variação de dispersão das marcas de pincel, escolha uma opção no
                menu pop-up Controlar:
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem19.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Off</b></p>
            <p>Especifica que não há controle sobre a variação de dispersão das marcas de pincel.</p>
            <p><b>Fade</b></p>
            <p>
                Aténua a dispersão das marcas de pincel, de dispersão máxima até nenhuma dispersão,
                no número de etapas especificado.
            </p>
            <p><b>Pen Pressure, Pen Tilt, Stylus Wheel, Rotation</b></p>
            <p>
                Varia a dispersão das marcas de pincel entre 0 e 360 graus, com base na pressão, na
                inclinação, na posição do botão giratório ou na rotação da caneta.
            </p>
            <p><b>Count</b></p>
            <p>Especifica o número de marcas de pincel aplicadas em cada intervalo de espaçamento.</p>
            <p><b>Count Jitter and Control</b></p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem20.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                Especifica a variação do número de marcas de pincel em cada intervalo de espaçamento.
                Para especificar a porcentagem máxima de marcas de pincel aplicadas a cada intervalo
                de espaçamento, digite um valor. Para especificar como controlar a variação do total das
                marcas de pincel, escolha uma opção no menu pop-up Controlar:
            </p>
            <p><b>Off</b></p>
            <p>Especifica que não há controle sobre a variação do total das marcas de pincel.</p>
            <p><b>Fade</b></p>
            <p>Aténua o número de marcas de pincel, do valor de Total até 1, no número especificado de etapas.</p>
            <p><b>Pen Pressure, Pen Tilt, Stylus Wheel, Rotation</b></p>
            <p>Varia o número das marcas de pincel, com base na pressão, na inclinação, na posição do botão giratório ou na rotação da caneta.</p>
            <p><b>Organizando camadas para pintura</b></p>
            <p>
                Para trabalhar com pintura digital no Photoshop, devemos primeiramente preparar e organizar as camadas para facilitar o trabalho 
                a partir do modelo de desenho para pintura (lineart).
            </p>
            <p>
                Lineart é o desenho feito com poucos traços em um fundo branco. Esse efeito pode ser
                feito no photoshop. Tanto pode ter origem em fotos como desenhados a mão ou no
                tablet ou em programas que tenham ferramentas para desenhar.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem21.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                Um modo prático e ideal para organizar as camadas é manter a camada do lineart acima
                de todas no painel Layers e modificar seu modo de mesclagem (blending mode) para
                Multiply. Dessa forma, todas as camadas posicionadas abaixo desta na ordem do painel,
                poderão ser coloridas de acordo com a área da imagem e permanecerão visíveis na composição.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem22.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>

            <p style="margin-top:32px"><b>Criação da paleta de cores</b></p>
            <p>
                Podemos usar uma imagem como referência para as cores de nossa pintura digital, ou
                mesmo planejar todas as tonalidades envolvidas na pintura e deixar essas amostras 
                disponíveis para serem escolhidas a qualquer momento na tela do documento.
            </p>
            <p>
                Use o Eyedropper tool <i><img class="iconex" src="{{ asset('assets/img/photoshop/unit8/icone7.png') }}" alt="guia"></i> para coletar amostras de uma imagem de referências para
                sua pintura digital.
            </p>
            <p>
                Para isolar as amostras das demais camadas da composição, crie uma nova camada onde
                com a ferramenta Brush no modo Hardness 100%, você pode pincelar cada amostra de
                cor do projeto.
            </p>
            <figure class="metade esquerda">
                <img src="{{ asset('assets/img/photoshop/unit8/imagem23.png') }}" alt="guia">
            </figure>
            <figure class="metade direita">
                <img src="{{ asset('assets/img/photoshop/unit8/imagem24.png') }}" alt="guia">
            </figure>
            <div class="clear"></div>
            <p style="margin-top:32px">Outra forma de definir um grupo de cores como amostra para a pintura digital é através do painel Swatches.</p>       
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit8/imagem25.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Pode-se acessar o painel Swatches clicando em Window – Swatches.</p>
            <p>
                Este modo é mais prático, pois cada cor que capturamos com a ferramenta Eyedropper,
                é automaticamente adicionada na primeira linha deste painel que acumula as cores utilizadas 
                no documento atual.
            </p>       
            <p>
                Aconselha-se bloquear as camadas do Lineart e da amostra de cores. Isto evitará que
                alguma parte da imagem seja colorida equivocadamente nestas duas camadas.  
            </p>

            <h5 class="barlow upper center-align" style="margin-top:10%">A T I V I D A D E S</h5>
            <p style="margin-top:5%">
                1. Usar linearts para colorir as áreas usando as tecnicas apresentadas em sala de aula
            </p>
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
