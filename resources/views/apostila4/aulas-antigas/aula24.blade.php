@extends('layouts.template')
@section('titulo','Unit 10 | Aula 24 – Automação, Exportação e Scripts')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade10" data-etapa="aula24">
			<h3 class="barlow">UNIT 10</h3>
			<h5 class="barlaw">Aula 24 – Automação, Exportação e Scripts</h5>
			<p><b>Photomerge</b></p>
			<p>O comando Photomerge™ combina várias fotografias em uma imagem contínua. Por
			exemplo, é possível tirar cinco fotografias sobrepostas do horizonte de uma cidade e,
			em seguida, montá-las em uma foto panorâmica. O comando Photomerge é capaz de
			montar fotos colocadas lado a lado tanto no sentido horizontal quanto no vertical.</p>			
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem14.PNG') }}" alt="guia">
                </figure>
            </div>
			<p><b>Tirar fotos para Photomerge</b></p>
			<p>As fotografias de origem têm uma função importante nas composições panorâmicas.
			Para evitar problemas, siga estas diretrizes ao tirar fotografias para uso com o Photomerge:</p>
			<p><b>Sobreponha suficientemente as imagens</b></p>
			<p>As imagens devem se sobrepor em aproximadamente 40%. Se a sobreposição for menor,
			talvez o Photomerge não consiga montar a panorâmica automaticamente. Entretanto,
			lembre-se de que as imagens não devem estar muito sobrepostas. Se as imagens forem
			sobrepostas por 70% ou mais, talvez o Photomerge não seja capaz de mesclar as imagens. Tente manter as fotos individuais pelo menos um pouco distintas entre si.</p>
			<p><b>Usar um comprimento focal</b></p>
			<p>Se você usar a lente do zoom, não altere o comprimento focal (aplicar mais ou menos
			zoom) enquanto tira as fotos.</p>
			<p><b>Mantenha o nível da câmera</b></p>
			<p>Embora o Photomerge possa processar pequenos giros entre as imagens, uma inclinação
			de muitos graus pode resultar em erro durante a montagem do panorama. O uso de um
			tripé com um cabeçote giratório ajuda a manter o alinhamento e o ponto de vista da
			câmera.</p>
			<p><b>Fique na mesma posição</b></p>
			<p>Evite mudar de posição ao tirar uma série de fotografias para que as imagens sejam
			originadas do mesmo ponto de vista. O uso do visor óptico com a câmera próxima ao
			olho ajuda a manter o ponto de vista constante. Ou tente usar um tripé para manter
			a câmera no mesmo local.</p>
			<p><b>Evite usar lentes de distorção</b></p>
			<p>As lentes de distorção podem interferir no Photomerge. No entanto, a opção de Auto
			ajuste para imagens obti das com lentes olho-de-peixe.</p>
			<p><b>Mantenha a mesma exposição</b></p>
			<p>Evite usar o flash em apenas algumas das fotografias. O recurso de mesclagem do Photomerge ajuda a suavizar exposições diferentes, mas diferenças extremas dificultam o
			alinhamento. Algumas câmeras digitais alteram as configurações de exposição automaticamente ao tirarem fotografias. Portanto, talvez seja necessário verificar as configurações da sua câmera para que todas as imagens tenham a mesma exposição.</p>
			<p><b>Criação de uma composição do Photomerge</b></p>
			<p>• Vá em File – Automaté – Photomerge</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem15.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Na caixa de diálogo do Photomerge, em Arquivos de origem, escolha uma das
			seguintes opções no menu Usar:</p>
			<p>• Arquivos: Gera a composição do Photomerge usando arquivos individuais.</p>
			<p>• Pastas: Usa todas as imagens armazenadas em uma pasta a fim de criar a composição do Photomerge.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem16.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Especifique quais imagens usar seguindo um destes procedimentos:</p>
			<p>• Para selecionar arquivos de imagem ou uma pasta de imagens, clique no botão
			Browse e navegue para os arquivos ou pasta.</p>
			<p>• Para usar as imagens atualmente abertas no Photoshop, clique em Add Opened
			Files.</p>
			<p>• Para remover imagens da lista de Arquivos de origem, selecione o arquivo e
			clique no botão Remove.</p>
			<p>• Especifique quais imagens usar seguindo um destes procedimentos:</p>
			<p>• Para selecionar arquivos de imagem ou uma pasta de imagens, clique no botão
			Browse e navegue para os arquivos ou pasta.</p>
			<p>• Para usar as imagens atualmente abertas no Photoshop, clique em Add Opened
			Files.</p>
			<p>• Para remover imagens da lista de Arquivos de origem, selecione o arquivo e
			clique no botão Remove.</p>
			<p>• Selecione uma opção de Layout:</p>
			<p>• Auto: O Photoshop analisa as imagens de origem e aplica um layout
			de Perspectiva, Cilíndrico ou Esférico, dependendo de qual produzir um photomerge melhor. </p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem17.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Perspective: Cria uma composição consistente especificando uma das imagens
			de origem (por padrão, a imagem do meio) como a imagem de referência. As outras
			imagens são então transformadas (reposicionadas, ajustadas ou inclinadas, conforme
			necessário) para que o conteúdo sobreposto em camadas seja correspondido.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem18.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Cilindrical: Reduz a distorção “gravata borboleta” que pode ocorrer com o layout Perspectiva, exibindo imagens individuais em um cilindro exposto. Sobrepor conteúdo entre arquivos é ainda correspondente. A imagem de referência é colocada no
			centro. Adequado para a criação de panoramas amplos.</p>
			<p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem19.PNG') }}" alt="guia">
                </figure>
            </div>
			</p>
			<p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem20.PNG') }}" alt="guia">
                </figure>
            </div>
			</p>
			<p>• Spherical: Alinha e transforma as imagens como se fossem mapeadas dentro
			de uma esfera, o que simula a sensação de visualizar um panorama de 360 graus. Se tiver
			tirado um conjunto de imagens que cubra 360 graus, use-o para obter panoramas de 360
			graus. Você também pode usar o Esférico para produzir ótimos resultados panorâmicos 
			com outros conjuntos de arquivo.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem21.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Collage: Alinha as camadas, faz a correspondência de conteúdo sobreposto e
			transforma (dimensiona ou gira) todas as camadas de origem.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem22.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Reposition: Alinha as camadas e corresponde o conteúdo sobreposto, mas não
			transforma (ajusta ou inclina) nenhuma das camadas de origem.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem23.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Selecione uma dessas opções:</p>
			<p>• Blend Images Together: Encontra as bordas ideais entre as imagens e cria
			emendas com base nessas bordas e nas cores que correspondam às imagens. Quando
			a opção Mesclar imagens juntas está desativada, é realizada uma mesclagem retangular
			simples. Isso pode ser preferível se você quiser retocar as máscaras de mesclagem à
			mão.</p>
			<p>• Vignett e Removal: Remove e executa compensação de exposição em imagens
			com bordas escurecidas causadas por falhas da lente ou sombreamento de lente inadequado.</p>
			<p>• Geometric Distortion Correction: Compensa a distorção para fora, para dentro
			ou olho de peixe.</p>
			<p>• Content Aware Fill Transparent Areas: Preenche as áreas transparentes de forma contínua com conteúdo similar de uma imagem próxima.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem24.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Clique em OK.</p>
			<p>O Photoshop cria uma imagem de várias camadas a partir das imagens de origem, adicionando máscaras de camada conforme necessário para criar a mesclagem ideal onde
			as imagens se sobrepõem. É possível editar as máscaras de camada ou adicionar camadas de ajuste para ajustar ainda mais as diferentes áreas do panorama.</p>
			<p><b>Statistics</b></p>
			<p>Uma pilha de imagens combina um grupo de imagens com um quadro de referência
			semelhante, mas diferenças de qualidade ou conteúdo em todo o conjunto. Uma vez
			combinado em uma pilha, você pode processar as imagens múltiplas para produzir uma
			exibição composta que elimina conteúdo indesejado ou ruído.</p>
			<p>Você pode usar pilhas de imagens para melhorar as imagens de várias maneiras:</p>
			<p>• Reduzir o ruído e a distorção da imagem em imagens forenses, médicas ou
			astrofotográficas.</p>
			<p>• Para remover objetos indesejados ou acidentais de uma série de fotos estacionárias ou uma série de quadros de vídeo. Por exemplo, você deseja remover uma
			figura caminhando através de uma imagem, ou remover um carro passando na frente do
			assunto principal.</p>
			<p>As pilhas de imagens são armazenadas como objetos inteligentes. As opções de processamento que você pode aplicar à pilha são chamadas de modos de pilha. A aplicação de um modo de pilha a uma pilha de imagens é uma edição não destrutiva.
			Você pode alterar modos de pilha para produzir efeitos diferentes; As informações
			da imagem original na pilha permanecem inalteradas. Para preservar as alterações
			depois de aplicar o modo de pilha, salve o resultado como uma nova imagem ou
			rasterize o objeto inteligente. Você pode criar uma pilha de imagens manualmente
			ou usando um script.</p>
			<p><b>Criar uma imagem Stack</b></p>
			<p>Para obter melhores resultados, as imagens contidas em uma pilha de imagens devem
			ter as mesmas dimensões e principalmente conteúdo semelhante, como um conjunto
			de imagens fixas tomadas de um ponto de vista fixo ou uma série de quadros de uma
			câmera de vídeo estacionária. O conteúdo de suas imagens deve ser semelhante o suficiente para permitir que você registre ou alinhe-as a outras imagens no conjunto.</p>
			<p>• Combine as imagens separadas em uma imagem de várias camadas.</p>
			<p>Você também pode combinar imagens usando um script (File – Scripts – Load Files into
			Stack).</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem25.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Escolha Select – All Layers.</p>
			<p>• Clique em Edit – Auto-Align Layers.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem26.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Selecione Auto como opção de alinhamento. Se Auto não criar um bom alinhamento para suas camadas, tente a opção Repositon.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem27.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Clique em Layer – Smart Object - Convert to Smart Object.</p>
			<p>• Clique em Layer – Smart Object – Stack Mode e escolha um Stack Mode.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem28.PNG') }}" alt="guia">
                </figure>
            </div>
			<p><b>Export Layers to files</b></p>
			<p>Podemos exportar as camadas de uma composição de modo isolado para um projeto
			em outro software ou para gerar arquivos para trabalhos na web.</p>
			<p><b>Para isso devemos:</b></p>
			<p>I. Clicar em File – Export – Layers to Files.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem29.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Na caixa de diálogo Export Layers to files, escolha:</p>
			<p>• Browse: Para localizar a pasta para onde deseja apontar os arquivos que serão
			criados a partir das camadas.</p>
			<p>• File name prefix: Para definir um nome de prefixo para os arquvios quando
			exportados e gerarem uma sequência numérica, precedidos desse nome.</p>
			<p>• File Type: Escolha entre as opções de tipos de arquivo de imagens.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem30.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Marcando a opção Visible Layers Only, permite que possamos exportar apenas as camadas que estão visíveis no painel Layers.</p>
			<p>IV. Marcando a opção Transparency, as camadas manterão o canal alpha de
			opacidade quando exportadas no formato PNG.</p>
			<p>V. Marcando a opão Trim Layers, o photoshop corta o arquivo no tamanho da
			camada, descartando o restante não preenchido.</p>		
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b> Capturar imagens do google maps e utilizar o photomerge para criar um mapa 360º.</p>			
			<p><b>2.</b>Remover elementos indesejados de imagens usando statistics. </p>			
			<p><b>3.</b>Usar técnicas de seleção para isolar elementos de uma composição finalizada em
			camadas.</p>			
			<p><b>4.</b>Exportar cada camada como arquivos.</p>			
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
