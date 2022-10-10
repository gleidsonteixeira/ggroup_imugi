@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 14 – Actions')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula14">
			<h3 class="barlow">PHOSTOHOP</h3>
			<h5 class="barlaw">Aula 14 – Actions</h5>
			<h5 class="barlaw">Sobre Actions</h5>
			<p>Uma ação é uma série de tarefas que você reproduz em um único arquivo ou um lote
			de arquivos - comandos de menu, opções do painel, ações da ferramenta e assim por
			diante. Por exemplo, você pode criar uma ação que altera o tamanho de uma imagem,
			aplica um efeito à imagem e salva o arquivo no formato desejado.</p>
			<p>As ações podem incluir etapas que permitem executar tarefas que não podem ser
			gravadas (por exemplo, usando uma ferramenta de pintura). As ações também podem incluir controles que permitem inserir valores em uma caixa de diálogo durante
			a execução de uma ação.</p>
			<p>No Photoshop, as ações são a base para droplets, que são pequenas aplicações que processam automaticamente todos os arquivos que são arrastados para o ícone.</p>
			<p>Photoshop e Illustrator vêm com ações predefinidas instaladas que nos ajudam a executar tarefas comuns. Podemos usar essas ações como estão, personalizá-las para aténder às nossas necessidades ou criar novas ações. As ações são armazenadas em conjuntos para ajudá-lo a organizá-los.</p>
			<p>Podemos gravar, editar, personalizar e processar em lote ações, e podemos gerenciar grupos de
			ações trabalhando com conjuntos de ação.</p>
			<h5 class="barlaw">Painel Actions</h5>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem1.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Usamos o painel Actions para gravar, reproduzir, editar e excluir ações individuais. Este
			painel também permite salvar e carregar arquivos de ação.</p>
			<p>Caso o painel Actions não esteja sendo exibido no Workspace do Adobe Photoshop,
			ative-o clicando em Window – Actions. Ou simplesmente combine as teclas ALT + F9.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem2.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Diretrizes para gravar ações</h5>
			<h5 class="barlaw">Tenha em mente as seguintes diretrizes ao gravar ações:</h5>
			<p>• Você pode gravar a maioria dos comandos, mas não todos, em uma ação.</p>
			<p>• Você pode gravar operações que você executa com as ferramentas Marquee,
			Move, Polygon, Lasso, Varinha Mágica, Cortar, Slice, Magic Eraser, Gradiente, Paint Bucket, Tipo, Forma, Notes, Eyedropper e Color Sampler. Você executa nos painéis História,
			Swatches, Color, Paths, Channels, Layers, Styles e Actions.</p>
			<p>• Os resultados dependem das variáveis de configuração de arquivo e programa,
			como a camada ativa ea cor de primeiro plano. Por exemplo, um desfoque gaussiano de
			3 pixels não criará o mesmo efeito em um arquivo de 72ppi como em um arquivo de 144
			ppi. Nem o Color Balance funcionará em um arquivo de escala de cinza.</p>
			<p>• Quando você grava ações que incluem a especificação de configurações em
			caixas de diálogo e painéis, a ação refletirá as configurações em vigor no momento da
			gravação. Se você alterar uma configuração em uma caixa de diálogo ou painel durante
			a gravação de uma ação, o valor alterado será gravado.</p>
			<p>• Operações e ferramentas modais - bem como ferramentas que registram
			posição - usam as unidades especificadas atualmente para a régua. Uma operação modal ou ferramenta é aquela que requer que você pressione Enter ou Return para aplicar
			seu efeito, como transformar ou cortar. As ferramentas que registram posição incluem
			as ferramentas Marquee, Slice, Gradient, Magic Wand, Lasso, Shape, Path, Eyedropper e
			Notes.</p>
			<p>• Você pode gravar o comando Reproduzir listado no menu do painel Ações para
			causar uma ação e jogar outra.</p>
			<h5 class="barlaw">Gravar uma Ação</h5>
			<p>Quando você cria uma nova ação, os comandos e ferramentas que você usa são adicionados à ação até que você pare de gravar</p>
			<p>• Abra um arquivo.</p>
			<p>• No painel Ações, clique no botão Creaté New Action</p>
			<p>• Digite um nome de ação, selecione um conjunto de ações e defina opções adicionais:</p>
			<p>• Function Key: Atribui um atalho de teclado à ação. Você pode escolher
			qualquer combinação de uma tecla de função, a tecla Ctrl e a tecla Shift (por
			exemplo, Ctrl + Shift + F3).</p>
			<p>• Color: Assigns a color for display in Button mode.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem3.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Clique em Record. O botão Begin Recording no painel Ações fica vermelho.</p>
			<p>• Execute as operações e os comandos que deseja gravar. Nem todas as tarefas
			nas ações podem ser registradas diretamente: No entanto, você pode inserir a maioria
			das tarefas não registráveis usando comandos no menu do painel Ações.</p>
			<p>• Para interromper a gravação, clique no botão Stop Playing/Recording ou
			escolha Parar Gravação no menu do painel Ações ou pressione a tecla Esc.</p>
			<p><b>Carregar uma Action</b></p>
			<p>Podemos carregar ações previamente criadas por nós no Adobe Photoshop, ou baixadas
			de outra fonte como na Internet.</p>
			<p>Para isso, devemos:</p>
			<p>I. Clicar no botão do menu do painel Actions e escolher a opção Load Actions.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem4.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Localizar o arquivo no formato .atn, onde ele estiver armazenado em disco.</p>
			<p>III. Em seguida clicar em Load.</p>
			<p><b>Redefinir ações Padrão</b></p>
			<p>Após carregar novas ações, podemos redefinir as ações do painel de Actions fazendo o
			seguinte:</p>
			<p>I. Clicar no menu do painel Actions e escolher a opção Reset Actions.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem5.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Clicar em OK na caixa de confirmação Replace the current actions.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem6.PNG') }}" alt="guia">
                </figure>
            </div>
			<p><b>Set de Actions</b></p>
			<p>Podemos criar diversas ações através do painel Actions. Porém para organizar essas açõe
			de acordo com a aplicação ou importância, podemos armazená-las em uma pasta ou
			grupo de ações definidos como Set de Actions. Para criar um Set de Actions devemos:</p>
			<p>I. Clicar no botão Creaté New Set localizado no canto inferior do painel Actions.</p>
			<p>II. Definir um nome para o set de actions na caixa de diálogo New Set.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem7.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. O ícone de uma pasta representando o set de actions surgirá no painel Actions.
			Daí por diante, basta arrastar para dentro da pasta as actions já criadas ou manter selecionada a pasta do set quando for criar uma nova action.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem8.PNG') }}" alt="guia">
                </figure>
            </div>
			<p><b>Organizando conteúdo e recursos usando o Adobe Bridge</b></p>
			<p>O Adobe Bridge, que faz parte do Adobe Creative Cloud, permite organizar os recursos
			que você usa para criar conteúdo para impressão, web e vídeo. O Adobe Bridge mantém
			arquivos nativos do Adobe (como PSD e PDF) e arquivos não-Adobe disponíveis para fácil
			acesso. Você pode arrastar recursos para seus layouts, projetos e composições conforme
			necessário, visualizar arquivos e até mesmo adicionar metadados (informações de arquivo), tornando os arquivos mais fáceis de localizar.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem9.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>File browsing: No Adobe Bridge você pode visualizar, pesquisar, classificar, filtrar,
			gerenciar e processar imagens, layout de página, PDF e arquivos de mídia dinâmicos. Você pode usar o Adobe Bridge para renomear, mover e excluir arquivos, Editar
			metadados; Girar imagens; E executar comandos em lote.</p>
			<p><b>Criando um lote para o Photoshop a partir do Adobe Bridge.</b></p>
			<p>O comando Batch executa uma ação em uma pasta de arquivos. Se você tiver uma
			câmera digital ou um scanner com um alimentador de documentos, também pode importar e processar várias imagens com uma única ação. Seu scanner ou câmera digital
			pode precisar de um módulo de plug-in de aquisição que ofereça suporte a ações.</p>
			<p>Ao processar arquivos em lote, você pode deixar todos os arquivos abertos, fechar e salvar as alterações nos arquivos originais ou salvar versões modificadas dos arquivos em
			um novo local (deixando os originais inalterados). Se você estiver salvando os arquivos
			processados em um novo local, talvez queira criar uma nova pasta para os arquivos processados antes de iniciar o lote.</p>
			<p>Para processar em lote usando múltiplas ações, crie uma nova ação que reproduza todas as outras ações e, em seguida, batch-process usando a nova ação. Para processar
			em lote várias pastas, crie aliases dentro de uma pasta para as outras pastas que deseja
			processar e selecione a opção Incluir todas as subpastas.</p>
			<p>• Selecione todos os arquivos da pasta que deseja aplicar a ação em lote.</p>
			<p><b>Clique em Tools – Photoshop – Batch</b></p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem10.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Especifique a ação que você deseja usar para processar arquivos nos menus
			pop-up Set e Action. Os menus exibem as ações disponíveis no painel Ações. Talvez você
			precise escolher um conjunto diferente ou carregar um conjunto no painel se você não
			vir sua ação.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem11.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Escolha os arquivos a serem processados no menu pop-up Origem:</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem12.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Folder: Processa arquivos em uma pasta que você especificar. Clique em
			Escolher para localizar e selecionar a pasta.</p>
			<p>•import: Processa imagens de uma câmera digital, scanner ou documento PDF.</p>
			<p>• Opened Files: Processa todos os arquivos abertos.</p>
			<p>• Bridge: Processa os arquivos selecionados no Adobe Bridge. Se nenhum arquivo for selecionado, os arquivos na pasta Ponte atual serão processados.</p>
			<p>• Defina as opções de processamento, salvamento e nomeação de arquivos.</p>
			<p>Para obter descrições das configurações da caixa de diálogo Lote.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit10/imagem13.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Clique em OK</p>
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b>  Criar ações com sequências de alterações para imagens com suporte a lotes, e salvá-las
			em um set de ações. </p>			
			<p><b>2.</b>  Exportar o set de ações gerando um arquivo que possa ser publicado e exibido para o
			professor.  </p>			
			<p><b>3.</b>Testar o set de ações em um lote e imagens.</p>			
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
