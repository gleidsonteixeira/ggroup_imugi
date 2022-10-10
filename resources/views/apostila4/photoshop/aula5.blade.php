@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 05 – Ajustes destrutivos e Histórico')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula5">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 05 – Ajustes destrutivos e Histórico</h5>
            <p style="margin-top: 16px">Podemos dividir os ajustes e edições de uma imagem 
            no Adobe Photoshop de dois
            modos: Ajuste Destrutivo ou Ajuste Não-Destrutivo.</p>
            <p style="margin-top: 16px">Um Ajuste Destrutivo ocorre 
            quando realizamos uma modificação na imagem sem que
            possamos desfazer ou editar essa alteração, 
            após salvarmos e fecharmos ele. Isso se dá
            por conta desses ajustes dependerem somente 
            da área selecionada para ser realizados
            e não de uma camada.</p>
            <p style="margin-top: 16px">O menu Image – Adjustments 
            se encaixa nessa descrição destrutiva de edição, 
            pois todos seus ajustes são realizados diretamente na 
            imagem, acumulando os ajustes a cada
            aplicação.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem15.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Principais ajustes</h5>
            <p style="margin-top: 16px">Alguns ajustes são indispensáveis para o 
            equilíbrio da cor ou brilho da imagem. Já outros
            podem trabalhar de modo mais inteligente, fazendo 
            com que possamos criar efeitos
            especiais na imagem.</p>
            <p style="margin-top: 16px">Vejamos alguns dos principais:</p>
			<h5 class="barlow upper">Brightness / Contrast</h5>
            <p style="margin-top: 16px">É um dos mais comuns ajustes que se 
            faz necessário quando uma foto tirada em câmera
            digital ou telefone não se apresenta com o brilho correto para exposição.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem16.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Levels</h5>
            <p style="margin-top: 16px">Assim como o Brightness / Contrast, 
            o Levels permite um ajuste inicial no brilho da imagem, 
            porém este apresenta mais opções permitindo trabalhar 
            com altas luzes ajustando
            o meio tom do brilho das imagens. 
            Ele ainda apresenta uma lista de presets 
            (pré-definições) que podem ser uti lizadas 
            como modelo para o início de um ajuste personalizado.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem17.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">No Levels, ao arrastar o slider (controle deslizante) 
            das áreas de sombra para o centro,
            estamos clareando somente as áreas de sombra num geral.
            Porém, ao trabalhar nos sliders (controles deslizantes) 
            de sombras, meios-tons e altas luzes, vamos trabalhar o 
            contraste da imagem, deixando as sombras mais escuras, 
            e as altas luzes mais claras.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem18.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Curves</h5>
            <p style="margin-top: 16px">O Ajuste de curvas permite ajustar pontos 
            em todo um intervalo de tons de uma imagem. 
            Inicialmente, a tonalidade da imagem é representada como 
            uma linha diagonal
            direta em um gráfico. No ajuste de uma imagem RGB, 
            a área superior direita do gráfico
            representa os realces, e a área inferior esquerda, 
            as sombras. O eixo horizontal do gráfico
            representa os níveis de entrada 
            (valores de imagem originais), e o vertical, os níveis de
            saída (novos valores ajustados). 
            Conforme você adiciona pontos de controle à linha e
            move-os, a forma da curva muda, refletindo os seus 
            ajustes de imagem. As seções mais
            excessivas da curva representam áreas de maior contraste, 
            enquanto as seções mais
            achatadas representam áreas de menor contraste. 
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem19.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Outra vantagem do Curves é a opção de clicar e arrastar 
            clicando no ícone da mãozinha
            e clicando numa determinada área da imagem</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem20.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Hue / Saturation</h5>
            <p style="margin-top: 16px">O ajuste Hue / Saturation (Mati z/Saturação) 
            permite ajustar o matiz, a saturação e o brilho de um componente de cor 
            específico em uma imagem ou ajustar simultaneamente
            todas as cores em uma imagem. Esse ajuste é especialmente bom 
            para fazer ajustes
            finos de cores em uma imagem CMYK de forma que elas fiquem 
            dentro do gamut de um
            dispositivo de saída. </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem21.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Marcando a opção Colorize da 
            janela Hue / Saturati on, podemos re-colorir uma imagem
            em tons de cinza para criar um efeito monocromático.</p>
            <p style="margin-top: 16px">Também podemos acessar a janela
            de ajustes do Hue/Saturati on combinando as teclas
            CTRL+U.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem22.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Color Balance</h5>
            <p style="margin-top: 16px">O comando Color Balance (Equilíbrio de Cores) 
            altera a mistura geral de cores em uma
            imagem para uma correção generalizada de cor 
            adicionando cores na imagem inteira.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem23.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Podemos escolher ajustar entre 
            Meio-tons (Midtones), Destaques (Highlights) e Sombras 
            (Shadows) para equilibrar especificamente nessas áreas 
            da imagem. Mantendo a
            opção Preserve Luminosity marcada, podemos equilibrar 
            o nível de ajuste de uma área
            com as demais, impedindo a exposição excessiva 
            do tom de cor ajustado.</p>
            <p style="margin-top: 16px">Também podemos acessar a janela 
            de ajustes do Color Balance combinando as teclas
            CTRL+B.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem24.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Vibrance</h5>
            <p style="margin-top: 16px">Vibrance (vibratilidade) 
            ajusta a saturação para que o corte seja minimizado 
            quando as
            cores atingem a saturação completa. Esse ajuste 
            aumenta a saturação de cores menos
            saturadas mais que as cores que já estão saturadas.
            A Vibratilidade também previne os
            tons de pele de se tornarem muito saturados.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem25.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Black and White</h5>
            <p style="margin-top: 16px">O ajuste Preto e Branco permite 
            converter uma imagem colorida em escala de cinza,
            mantendo o controle total sobre como as cores 
            individuais são convertidas. 
            </p>
            <p style="margin-top: 16px">Tambem podemos acessar a 
            janela de ajustes do Black and White combinando as teclas
            ALT+SHIFT+CTRL+B.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem26.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Invert</h5>
            <p style="margin-top: 16px">O Invert (Inverter) funciona como um 
            filtro que expõe a imagem como negativo de foto
            ou seja, invertendo as cores da imagem. 
            Ao inverter uma imagem, o valor de brilho de
            cada pixel nos canais é convertido para o valor 
            inverso na escala de valores de cor de 256
            níveis.
            </p>
            <p style="margin-top: 16px">Também podemos usar o ajuste 
            Invert através da combinação de teclas CTRL + I .
            </p>
			<h5 class="barlow upper">Posterize</h5>
            <p style="margin-top: 16px">O ajuste Posterize (Póster) permite 
            especificar o número de níveis tonais 
            (ou valores de
            brilho) para cada canal em uma imagem e, 
            em seguida, mapeia os pixels para o nível de
            correspondência mais próximo. Por exemplo, 
            escolher dois níveis tonais em uma imagem 
            RGB dá seis cores: duas para o vermelho, 
            duas para o verde e duas para o azul.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem27.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Threshold</h5>
            <p style="margin-top: 16px">O ajuste Threshold converte imagens em tons 
            de cinza ou em cores para imagens
            preto-e-branco de alto contraste. Você pode especificar 
            um certo nível como um
            limite. Todos os pixels mais claros do que o limiar 
            são convertidos para branco;
            Todos os pixels mais escuros são convertidos para preto.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem28.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Gradient Map</h5>
            <p style="margin-top: 16px">O ajuste de Mapa de Gradiente mapeia 
            o intervalo de escala de cinza equivalente de
            uma imagem para as cores de um preenchimento de 
            gradiente especificado. Se você
            especificar um preenchimento de gradiente de duas cores, 
            por exemplo, as sombras
            na imagem são mapeadas para uma das cores do 
            color stop (controle parada de cor)
            de extremidade do preenchimento de gradiente, 
            já os destaques são mapeados para
            a outra cor do color stop (controle de parada de cor) 
            de extremidade e os tons médios
            são mapeados para as gradações intermediárias.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem29.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Mesmo escolhendo uma das pre-definiçoes 
            de mapas gradiente oferecidos por padrão,
            ainda é possivel re-configurar os controles de 
            parada de cor (color stop) ou mesmo os
            controles de parada de opacidade (opacity stop) 
            para definir um novo padrão apartir de um pré-definido; 
            Para isto, basta dar um clique sob a barra da cor gradiente 
            escolhida
            para que a janela Gradient Editor apareça.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem30.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Selective Color</h5>
            <p style="margin-top: 16px">Com o Selective Color 
            (Cor seletiva) você pode modificar a quantidade de 
            uma cor de
            processo em qualquer cor primária seletivamente - 
            sem afetar as outras cores primárias.
            Por exemplo, você pode usar correção seletiva de 
            cores para diminuir drasticamente o
            ciano no componente verde de uma imagem enquanto 
            deixa o ciano no componente
            azul inalterado.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem31.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Shadow/Highlights</h5>
            <p style="margin-top: 16px">O ajuste Shadow / Highlight é um 
            método para corrigir fotos com imagens em silhueta
            devido a forte retroiluminação ou corrigir assuntos 
            que foram ligeiramente desbotados
            porque estavam muito próximos do flash da câmera. 
            O ajuste também pode ser usado
            para iluminar áreas de sombra em uma imagem bem 
            iluminada. O comando Shadow /
            Highlight não limpa ou escurece uma imagem; 
            Ilumina ou escurece com base nos pixels
            circundantes (vizinhança local) nas sombras ou realces. 
            Por esta razão, há controles separados das sombras e 
            dos destaques. Os padrões são definidos para corrigir 
            imagens
            com problemas de retroiluminação.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem32.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Desaturaté</h5>
            <p style="margin-top: 16px">O comando Desaturaté remove toda 
            a saturação de cor apartir dos canais de cores RGB,
            mas não exclui os próprios canais. Como resultado, 
            você ainda pode manipular canais
            separadamente à exposição e afinar contraste. 
            Cada pixel na imagem mantém o mesmo
            valor resultante em uma luminância que corresponde 
            ao original.
            Também podemos usar o ajuste Invert através da 
            combinação de teclas SHFT+CTRL +U.
            </p>
			<h5 class="barlow upper">Duplicando Camadas</h5>
            <p style="margin-top: 16px">O comando para duplicar camadas 
            poderá ser bastante útil em diversas ocasiões nas
            quais desejamos não apenas repetir apenas o conteúdo 
            da camada selecionada para
            uma nova, como trazer com ela ajustes, estilos 
            e filtros já aplicados na original.
            </p>
            <p style="margin-top: 16px">Existem diferentes formas de 
            duplicar uma camada selecionada, confira a seguir as 
            principais:
            </p>
            <p style="margin-top: 16px">I. Clicando no menu Layer e 
            escolhendo a opção Duplicaté Layer
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem33.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">II. Clicando no menu do painel 
            camadas e escolhendo Duplicaté Layer.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem34.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">III. Clicando com o botão 
            direito do mouse sob a faixa de seleção do ícone 
            da camada e escolhendo Duplicaté Layer.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem35.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">IV. Clicando com o botão 
            esquerdo do mouse sob o ícone de miniatura da camada
            , mas arrastando-o para cima do botão Creaté New 
            Layer localizado no canto
            inferior direito do painel camadas.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem36.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">V. Combinando as teclas CTRL+J 
            estando a camada desejada selecionada.
            </p>
			<h5 class="barlow upper">Seleção com a ferramenta Quick Selection</h5>
            <p style="margin-top: 16px">Podemos usar a ferramenta Seleção Rápida 
            para “pintar” rapidamente uma seleção
            usando uma ponta de pincel redonda ajustável. 
            Conforme você arrasta, a seleção se
            expande para fora e automaticamente encontra 
            e segue arestas definidas na imagem.
            </p>
            <p style="margin-top: 16px">A configuração da ponta 
            do pincel pode ser realizada através da caixa de 
            configuração
            Brush picker que surgirá ao clicarmos no 
            ícone da ponta do pincel localizada na barra de
            propriedades da ferramenta.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem37.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">I. Size diameter – Altera o 
            diâmetro da ponta do pincel, ampliando assim a 
            possibilidade da área a ser selecionada. 
            Podemos arrastar o controle deslizante para
            esquerda para reduzir o diâmetro ou para direita 
            para aumentar.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem38.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Porém, uma boa dica para acelerar 
            esse procedimento seria usar as teclas de
            atalho “ ] ” (Colchete fechando) para aumentar o 
            diâmetro da ponta, ou “ [ ”
            (Colchete abrindo) para diminuir.
            </p>
            <p style="margin-top: 16px">II. A opção Hardness 
            ou Dureza do pincel pode ser configurada 
            para suavizar os
            limites da seleção.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem39.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Durante o processo de seleção, podemos escolher criar uma seleção nova, adicionar ou
            remover áreas selecionadas. Na barra de propriedades da ferramenta Quick Selection
            temos os botões abaixo:
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem40.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">I. New Selecti on - Cria uma nova seleção em outra área da imagem.</p>
            <p style="margin-top: 16px">II. Add to selecti on – Adiciona uma área a uma seleção já existente.</p>
            <p style="margin-top: 16px">III. Subtract from selecti on – Remove uma área de uma seleção já existente.</p>
			<h5 class="barlow upper">History Panel (Painel Histórico)</h5>
            <p style="margin-top: 16px">Com o painel histórico, podemos retroceder etapas de nosso trabalho na seção atual do
            Photoshop para que possamos corrigir alguma edição, tendo a possibilidade de realizar
            uma nova alteração ou refazê-la novamente.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem41.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Para isto, basta escolher na lista de etapas do histórico qual destas desejamos retroceder. Ao clicar, o Photoshop nos leva ao estado em que a imagem se encontrava
            quando realizamos aquela alteração.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem42.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Porém, devemos ficar cientes que quando retornarmos àquela etapa e realizarmos
            uma nova alteração a partir desta, todo o histórico após esta etapa será perdido.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem43.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Configurando etapas do Painel Histórico</h5>
            <p style="margin-top: 16px">Outro cuidado que devemos ter com as etapas do histórico é o limite destas. Por padrão,
            o Adobe Photoshop apresenta apenas 20 etapas para que possamos retroceder no histórico. E quando esse limite é ultrapassado, as primeiras etapas vão sendo excluídas e as
            novas vão ocupando seu lugar no final da lista. Dependendo da situação, podemos precisar que esse limite seja maior e para isso podemos alterá-lo na janela de preferências
            Performance (Desempenho) do menu Edit.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem44.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">A opção History Statés apresenta um controle deslizante que permite alterar a quantidade de etapas do histórico.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem45.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">A opção History Statés apresenta um controle deslizante que 
            permite alterar a quantidade de etapas do histórico.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem46.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Vale lembrar que podemos expandir essa quantidade somente 
            até um limite de 1000
            etapas.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem47.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper">Atalhos para desfazer e refazer 
            etapas no histórico</h5>
            <p style="margin-top: 16px">Acessar o painel Histórico pode ser bastante útil para escolher qual etapa desejamos
            retornar, onde ela pode ser uma especificamente há 10, 15 ou 20 etapas de onde nos encontramos. Mas podemos tornar 
            o trabalho mais rápido usando teclas de atalhos combinadas para que tenhamos acesso ao retrocesso nas etapas e o 
            avanço nas mesmas.
            Para isso podemos:</p>
            <p style="margin-top: 16px">I. Combinar as teclas CTRL+ALT+Z para retroceder 
            no histórico.</p>
            <p style="margin-top: 16px">II. Combinar as teclas CTRL+SHIFT+Z 
            para avançar no histórico.</p>
			<h5 class="barlow upper">History Snapshots (Instantâneos do histórico)</h5>
            <p style="margin-top: 16px">Como temos um limite de apenas 1000 etapas a expandir 
            no histórico do Adobe Photoshop, e mesmo que essas 1000 possam parecer uma 
            grande quantidade para alguns,
            vale lembrar que trabalhos que utilizam muito o pincel como pintura digital 
            ou retoques
            de imagens, estes facilmente perderão seu registro no histórico devido a 
            quantidade de
            cliques necessários para esses tipos de trabalhos.
            Uma boa resposta a essa limitação seria o hábito de criar em cada 
            decisão importante
            em seu trabalho um Snapshot (instantâneo).</p>
            <p style="margin-top: 16px">Para isso vá ao menu do painel do histórico e escolha New Snapshot.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem48.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">A janela de new snapshot surge ao solicitar um 
            novo snapshot. Mas desta vez você fornecerá o nome do 
            snapshot.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem48.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow upper center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b> Utilizando técnicas de seleção e ajustes de imagens, crie um pôster pop art de
            uma foto.</p>
            <p style="margin-top: 16px"><b>2.</b> Utilizando técnicas de seleção e ajustes de imagens, crie um pôster com o 
            efeito Posterize de uma foto. </p>            
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
