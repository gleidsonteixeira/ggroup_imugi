<?php $__env->startSection('titulo','Unit 1 | Apresentação'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade1" data-etapa="apresentacao">
			<h3 class="barlow">UNIT 1</h3>
			<h5 class="barlow upper">Aula 01 – Apresentação do Adobe Premiere e Cortes no painel Source</h5>

			<h5>Apresentação</h5>
			<p>
				O Adobe Premiere Pro CC é um sistema de edição de videos que oferece suporte às cameras e
				tecnologias mais atuais com poderosas ferramentas e fáceis de usar que se integram 
				perfeitamente com cada fonte de aquisição de vídeo.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_1.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Atualmente existe uma enorme demanda por conteúdo de vídeo de alta qualidade, e os produtores
				e editores trabalham em uma constante mudança de tecnologias antigas para novas.
				Apesar de toda essa mudança rápida, no entanto, o objetivo da edição de vídeo é o mesmo:
				você quer capturar suas filmagens e moldá-las , guiado por sua visão original, para que você
				possa se comunicar com seu público.
			</p>

			<h5>Janela New Project e criação do projeto inicial</h5>

			<p>
				Um arquivo de projeto do Premiere Pro armazena links para todos os arquivos de vídeo e som
				no seu projeto Premiere Pro. Você também criará pelo menos uma seqüência - ou seja, uma
				série de clipes que tocam, um após o outro, com efeitos especiais, tí tulos e som, para formar
				seu trabalho criativo concluído. Você escolherá quais partes de seus clipes usar e em que ordem
				serão tocados. A beleza da edição com o Premiere Pro é que você pode mudar sua mente
				sobre quase qualquer coisa.
			</p>

			<p>
				Os arquivos de projeto do Premiere Pro têm a extensão de arquivo .prproj. Iniciar um novo
				projeto do Premiere Pro é simples. Você cria um novo arquivo de projeto, escolhe uma Seqüência
				predefinida e inicia a edição.
			</p>

			<h5>Configurando um projeto</h5>

			<p>
				Para configurar um novo projeto no Adobe Premiere Pro você precisa:<br/>
				1.Iniciar o Adobe Premiere Pro para que a janela de Boas-Vindas apareça.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_2.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				O cabeçalho Recent lista arquivos de projetos abertos previamente.<br/>
				Nessa janela, veremos alguns botõs importantes:<br/>
				<b>New Project</b>: Clique nesse botão para abrir a caixa de diálogo New Project.
			</p>

			<p>
				<b>Open Project</b>: Clique nesse botão para abrir um arquivo de projeto do Adobe Premiere 
				previamente salvo, e continuar a editá-lo.
			</p>

			<p>
				2.Clicar em New Project para abrir a caixa de diálogo New Project.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_3.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Essa caixa de diálog contém duas abas: General e Scratch Disks. Todas as configurações nessa
				caixa de diálogo podem ser modificadas posteriormente. Na maioria dos casos, você irá 
				preferir daixá-las como estão.
			</p>

			<h5>Video rendering and playback settings</h5>

			<p>
				Equanto estiver trabalhando com clips de vídeo em suas sequencias, é bem provável que você
				queria aplicar alguns efeitos visuais. Alguns efeitos podem ser executados imediatamente,
				combinando seu vídeo original com o efeito e exibindo os resultados assim que você clica em
				Play. Quando isso acontece, chamamos de Real-Time Playback.<br/>
				O Real-time playback é preferível pois você pode exibir assistir os resultados de suas decisões
				criativas imediatamente.
			</p>

			<p>
				Se você usa alguns efeitos ou usa efeitos que não foram projetados para o real-time playback,
				seu computador pode não ser capaz de exibir os resultados na taxa de quadros completa.<br/>
				Entao, o Adobe Premiere Pro irá tentar exibir seus clips de vídeo combinados com os efeitos,
				mas não mostrará cada quadro por segundo. Quando isso acontece, chamamos de dropping
				frames.
			</p>
			<p>
				O Premiere Pro exibe linhas coloridas ao longo do topo da timeline, para mostrar quando um
				trabalho extra é requerido para tocar seu vídeo.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_4.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Caso na caixa de diálogo New Project, o menu Render estiver disponível, significa que você
				tem um hardware de gráficos em seu computador, que encontra o mínimo de requerimento
				para aceleração da GPU (graphics processing unit), e está instalado corretamente.
			</p>

			<h5>Este menu contém duas opções</h5>

			<p>
				Mercury Playback Engine GPU Acceleration: Se você escolher essa opção, o Adobe Premiere
				Pro irá mandar muitas tarefas de playback para o hardware gráfico em seu computador, dando
				muitos efeitos real-time e fáceis playbacks de formatos mistos em suas sequencias.
			</p>

			<p>
				Mercury Playback Engine Soft ware Only: Este é ainda uma maior forma de desempenho e
				performance, usando nessa performance, todo poder disponível do computador para esse
				playback. Se você não tiver acelação de gráficos poderodos o suficiente em seu computador,
				somente essa opção estará disponível nesse menu, e você não será capaz de clicar nesse
				menu.
			</p>

			<h5>Video/Audio Display Format settings</h5>

			<p>
				As próximas duas opções, informa ao Premiere Pro como o tempo de seus clips de vídeo e
				áudio serão medidos.<br/>
				Na maioria dos cados, você escolherá as opões padrão: Timecode for video and Samples for
				audio. Essas configurações não mudam a forma com que o Premier Pro executa os clips de
				áudio e ou vídeo, apenas a forma com que serão medidos.
			</p>

			<h5>Capture Format settings</b>

			<p>
				É mais comum gravar vídeos como arquivos de dados com os quais você pode trabalhar imediatamente. 
				Contudo, se você estiver trabalhando com material de arquivo, talvez seja necessário
				capturar a fita de vídeo. O Capture Format Settings indica ao Premiere Pro qual formato
				de fita de vídeo você está usando.
			</p>

			<h5>Project item names and label colors</b>

			<p>
				Uma caixa de verificação na parte inferior da caixa de diálogo New Project, se marcada, permite 
				você exibir o nome do item do projeto e a cor do rotulo para todas as instancias.
			</p>

			<h5>Scratch Disks settings</h5>

			<p>
				Stratch disks representam os locais onde os arquivos do projeto serão armazenados. Eles podem 
				estar em discos separados, mas o Scratch Disks, sugere um local ou pasta em comum, ou
				unidades separadas para estabelecer a ligação com o projeto. Caso você esteja trabalhando
				com mídias com grande espaço de armazenamento, seria apropriado manter os arquivos do
				projeto em mídias separadas para garantir uma melhor performance, dependendo do seu
				fluxo de trabalho e requisitos de hardware.
			</p>

			<h5>Project Files settings</h5>

			<p>
				Além de escolher onde os novos arquivos de mídia são criados, o Premiere Pro permite escoclher 
				o local de armazenamento dos arquvos de salvamento automatico. Eles são copias
				adicionais do seu projeto que são criadas durante seu trabalho.<br/>
				CC Libraries Downloads: O painel Premiere Pro Libraries permite que você baixe arquivos de
				mídia e arquivos compartilhados com você. Por exemplo, você pode baixar logos ou elementos 
				graficos e incorporá-los em sua sequencia.
			</p>

			<p>
				Using a project-based setup: Por padrão, o Premiere Pro mantém qualquer mídia recém-criada 
				em conjunto com o arquivo de projeto (essa opção é a mesma do local do projeto). Manter
				tudo junto dessa maneira, torna a procura de arquivos associados ao projeto mais simples.
				Você pode ficar ainda mais organizado movendo quaisquer arquivos de mídia que você pretende 
				importar para o seu projeto para a mesma pasta antes de importá-los. Quando você
				terminar com seu projeto, você pode remover tudo do seu sistema excluindo a pasta em que
				seu arquivo de projeto é armazenado.
			</p>

			<p>
				Ao lado de cada opção, o botão Browse, é exibido com o intuito de apontar qual pasta será
				a localização do Scratch Disk configurado. Na maioria dos casos, você pode deixar o valor
				Same as Project que atribuià mesma pasta do projeto configurada na aba anterior. Porem, ao
				indicar uma pasta especifica na primeira opçao, basta verificar se as demais apontam para o
				mesmo diretório e em seguida, clicar em OK.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_5.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Workspace do Adobe Premiere</h5>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_6.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				O Workspace Editing é o padrão e mais apropriado para projetos em geral. Porém, outros
				workspaces para trabalhos específicos, são apresentados como opção. Em todos os casos, o
				ajuste dos paineis do Adobe Premiere é possivel para costumizar a ampliação ou redução destes, 
				visando uma forma de trabalho mais apropriada de acordo com o tamanho de sua tela.
			</p>

			<p>
				Você personaliza o workspace organizando painéis no layout que melhor se adeque ao seu
				estilo de trabalho. À medida que você reorganiza os painéis, os outros painéis dimensionam
				automaticamente para caber na janela. Você pode criar e salvar vários workspaces personalizados 
				para tarefas diferentes, por exemplo, um para edição e outro para visualização.<br/>
				Redimensionar grupos de painéis
			</p>

			<p>
				Quando você posiciona o ponteiro sobre divisórias entre grupos de painéis, os ícones de 
				redimensionamento aparecem.
			</p>

			<p>
				Quando você arrasta esses ícones, todos os grupos que compartilham o divisor são redimensionados. 
				Por exemplo, suponha que seu espaço de trabalho contenha três grupos de painéis
				empilhados verticalmente. Se você arrastar o divisor entre os dois grupos inferiores, eles são
				redimensionados, mas o grupo mais alto não muda.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_7.png')); ?>" alt="guia1">
				</figure>
			</div>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_8.png')); ?>" alt="guia1">
				</figure>
			</div>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_9.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Salvar ou Resetar Workspaces</h5>

			<p>
				À medida que você personaliza um Workspace , o aplicativo rastreia suas alterações, armaze-
				nando o layout mais recente. Para armazenar um layout específico de forma mais permanente, 
				salve um workspace personalizado.<br/>
				Personalizados salvos aparecem no menu workspace, onde você pode retornar e redefini-los.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_10.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Encaixar, agrupar ou flutuar painéis</h5>

			<p>
				Você pode encaixar painéis juntos, movê-los para dentro ou para fora dos grupos e desancálos
				para que eles fl utuem acima da janela do aplicativo.<br/>
				À medida que você arrasta um painel, zonas de encaixe - áreas nas quais você pode mover o
				painel – ficam destacadas. A zona de encaixe que você escolhe determina onde o painel está
				inserido, e é encaixado e agrupado com outros painéis.
			</p>

			<h5>Zonas de Encaixe</h5>

			<p>
				Existem zonas de encaixe nas bordas de um painel, grupo ou janela. Encaixar um painel
				coloca-o perto do grupo existente, redimensionando todos os grupos para acomodar o
				novo painel.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_11.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>Arrastando o painel (A) até a zona de encaixe (B), para encaixar com o (C).</p>

			<h5>Zonas de Agrupamento</h5>

			<p>
				As zonas de agrupamento existem no meio de um painel ou grupo e ao longo da área da aba
				dos painéis. Soltar um painel em uma zona de agrupamento empilha com outros painéis.
			</p>
			
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_12.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>Arrastando o painel (A) para a zona de agrupamento (B), para agrupá-lo com os paineis existentes.</p>

			<h5>Usando o Painel Project</h5>

			<p>
				Qualquer coisa que você importe no seu projeto Adobe Premiere Pro CC aparecerá no Project
				Panel. Além de oferecer excelentes ferramentas para navegar em seus clipes e trabalhar com
				seus metadados, o Project Panel possui pastas especiais, chamadas de bins, que você pode
				usar para o projeto ficar organizado.<br/>
				Qualquer coisa que apareça em uma seqüência deve estar no Project Panel. Se você excluir
				um clipe no Project Panel que já é usado em uma seqüência, o clipe será automaticamente
				removido da sequência. O Premiere Pro avisará se a exclusão de um clipe afetará uma seqüência existente.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_13.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Trabalhando com Bins</h5>

			<p>
				Os Bins (compartimentos) permitem organizar os clipes dividindo-os em grupos.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_14.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Assim como pastas em seu disco rígido, você pode ter vários Bins dentro de outros Bins , criando 
				uma estrutura de pastas tão complexa quanto seu projeto requer.
			</p>

			<h5>Atribuindo Rótulos</h5>

			<p>
				Cada item no painel do Project possui uma cor de rótulo. Na exibição de lista, a coluna Rótulo
				mostra a cor do rótulo para cada clipe. Quando você adiciona clipes a uma seqüência, eles são
				exibidos no painel da timeline com esta cor do rótulo.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_15.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Para alterar a cor de um rótulo, clique com o botão direito do mouse sob o icone do rótulo e
				escolha Label para alterar para uma cor disponível.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_16.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Importando Arquivos</h5>

			<p>
				Quando você importa itens em um projeto Premiere Pro, você está criando um link do arquivo
				de mídia original para um item que reside dentro do projeto. Isso significa que você não está
				realmente modificando os arquivos originais, você está apenas manipulando-os em um gerenciamento
				 não-destrutivo. Por exemplo, se você optar por editar apenas parte de um clipe em
				sua sequência, você não está jogando fora a midia não utilizada.
			</p>

			<p>
				Para importar uma mídia para o Adobe Premiere temos quatro formas principais:<br/>
				- O Modo Padrão através do Menu File – Import;<br/>
				- Usando o painel Media Browser;<br/>
				- Através de um clique duplo na<br/>
				- Combinando as teclas de atalho CTRL+I.
			</p>


			<h5>Configurando uma sequência</h5>

			<p>
				Nos seus projetos do Premiere Pro você criará seqüências, nas quais você colocará o videoclipe, 
				clipes de áudio e gráficos. Se necessário, o Premiere Pro adapta vídeos e clipes de áudio
				que você colocou em uma seqüência para que eles correspondam as configurações para essa
				seqüência.
			</p>

			<p>
				Cada seqüência em seu projeto pode ter configurações diferentes e você irá escolher configurações 
				que correspondam à mídia original tão precisamente quanto possível. Isso reduz o trabalho que seu sistema deve fazer para reproduzir seus clipes, melhorar o desempenho em
				tempo real e maximizar a qualidade.
			</p>

			<p>
				Criando uma seqüência que combina automaticamente com sua fonte
				Se você não tem certeza de quais configurações de seqüência você deve escolher, não se preocupe, 
				o Premiere Pro CC tem um atalho especial para criar uma sequência baseada em sua
				mídia original.
			</p>

			<p>
				Na parte inferior do painel Project há um menu New Item
				Você pode usar este menu Para criar novos itens, como seqüências e títulos.
				Para criar automaticamente uma sequência que corresponde à sua mídia, arraste e solte qualquer
				 clipe (ou multiplos clips) no painel Project até esse New Item.
			</p>

			<p>
				Outra forma de criar uma nova sequencia combinando autimaticamente com sua fonte é escolhendo
				 a opção New Sequence form Clip, clicando com o botão direito do mouse sob o ícone
				da mídia no painel Project.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_17.png')); ?>" alt="guia1">
				</figure>
			</div>
			
			<h5>PEscolhendo a predefinição correta</h5>

			<p>
				Se você sabe exatamente quais configurações você precisa, o Premiere Pro oferece acesso a
				todas as opções para configurar uma seqüência. Se você não tem tanta certeza, pode escolher
				uma lista de Presets.
			</p>

			<p>
				Clique no menu New Item
				no painel Project e escolha Sequence.<br/>
				A caixa de diálogo New Sequence possui três guias: Sequence Presets, Settings e Tracks.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_18.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				A aba Sequence Presets torna a configuração de uma sequência muito mais fácil. Quando você
				escolhe um Preset, o Premiere Pro escolhe as configurações para sua seqüência que se aproximam 
				de um determinado formato de vídeo e áudio. Depois de escolher uma predefinição,
				você pode ajustar essas configurações na aba Settings.
			</p>
			<p>
				Você encontrará uma ampla gama de opções de configuração predefinidas para os mais usados
				 Tipos de mídia suportados. Essas configurações são organizadas com base em formatos
				de câmera (com configurações específicas dentro de uma pasta com o nome do formato de
				gravação).
			</p>

			<h5>Personalizando a Sequência</h5>

			<p>
				Uma vez que você selecionou a predefinição de seqüência que mais se aproxima do seu vídeo
				de origem, você pode querer ajustar as configurações para se adequar às especificidades de
				sua seqüência.
			</p>

			<p>
				Para começar a fazer ajustes, clique na aba Settings e escolha as opções que melhor se adequam 
				à como você gostaria do Premiere Pro para reproduzir seus arquivos de vídeo e áudio.
				Lembre-se, O Premiere Pro irá adaptar automaticamente os clipes que você adiciona à sua
				Timeline para que ele corresponda suas configurações de seqüência, dando-lhe uma taxa de
				quadros padrão e tamanho de moldura, independentemente da Formato original. Este processo
				 é chamado de conformidade.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_19.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Usando o painel Source</h5>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_20.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				No lado superior esquerdo do workspace Editing do Adobe Premiere Pro, encontramos o painel 
				Source (painel Origem). Podemos usar esse painel para escolher dentre toda a sequência,
				intervalos pre-definidos através de marcações de Entrada e Saida definidos na Timeline deste
				painel para arrastá-los para uma sequÊncia.<br/>
				Mark In – O botão Mark In, determina a entrada do intervalo que desejamos inserir
				na sequência. Ou usar a tecla de atalho “I”.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_21.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Mark Out – O botão Mark Out, determina a saída do intervalo que desejamos inserir na
				sequência. Ou usar a tecla de atalho “O”.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_22.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Uma vez que você pre-definiu as marcações de entrada e saída para os intervalo, podemos
				inserí-lo na Timeline de uma sequência já criada ou criar uma nova sequência, apenas arrastando 
				esse trecho para o painel Timeline ainda sem sequência.
				Porém, existem diferentes formas de inserir esse trecho na timeline:
			</p>

			<p>
				Drag Vídeo and Áudio – Essa forma é a padrão que permite inserirmos o trecho com as tracks
				de áudio e vídeo na Timeline. Para isso, basta apenas clicar na imagem do vídeo no painel
				Source, manter o botão do mouse pressionado, arrastá-lo e soltá-lo na timeline quando o
				ícone com o sinal de mão com o sinal de adição aparecer.
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_23.png')); ?>" alt="guia"><br/>
				Drag Vídeo Only – Essa forma permite inserirmos apenas o vídeo na timeline, sem que a track
				de áudio o acompanhe. Podemos utilizar essa técnica para trabalhar com outro áudio na sequência, 
				não importando o original do vídeo.

			</p>

			<p>
				Para arrastar apenas o vídeo, devemos clicar no ícone Drag Vídeo Only
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_24.png')); ?>" alt="guia">, 
				localizado na parte inferior da tela do painel source, arrastá-lo e soltá-lo na timeline quando o ícone com o
				sinal de mão com o sinal de adição aparecer.
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_23.png')); ?>" alt="guia"><br/>
				Drag Áudio Only – Essa forma permite inserirmos apenas o áudio na timeline, sem que a
				track de vídeo o acompanhe. Podemos utilizar essa técnica para aproveitar o áudio em
				outros clipes de vídeo.
			</p>

			<p>
				Para arrastar apenas o áudio, devemos clicar no ícone Drag Áudio Only
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_25.png')); ?>" alt="guia">
				, localizado na	parte inferior da tela do painel source, arrastá-lo e soltá-lo na timeline quando o ícone com o
				sinal de mão com o sinal de adição aparecer.
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_23.png')); ?>" alt="guia">
			</p>

			<h5>Marcando trechos para definir intervalos</h5>

			<p>
				Os botões Mark In e Mark Out permitem definir apenas um intervalo por vez, podemos predefinir 
				os pontos desses intervalos através de marcadores personalizados, que nos permitem navegar até 
				extamente os ponto para em seguida, definir as marcações de entrada e saída.
			</p>

			<p>
				Esses marcadores personalizados chamamos de Markers
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_26.png')); ?>" alt="guia">.<br/>
				Para inserir um Marker em um ponto na timeline devemos:<br/>
				1.Arrastar o ponteiro marcador de tempo da timeline para o ponto que desejar, e em
				seguida clicar no botão Add Marker
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_27.png')); ?>" alt="guia"> 
				localizado na parte inferior do painel Source.
				Entretanto, para que os markers inseridos não se tornem confusos, podemos personali-
				zá-los afim de que indiquem atraves de uma cor e, ou um rótulo, o intervalo que iremos
				marcar.
			</p>

			<p>
				<b>Para personalizar o Marker com cores ou rótulos, devemos:</b><br/>
				1.Clicar com o botão direito do mouse sobre o ícone do Marker na timeline e escolher
				a opção Add Chapter Marker.<br/>
				2.Na caixa de diálogo do Marker indicando o tempo na timeline que este ocupa, podemos
				digitar um nome para o chapter, adicionar uma descrição ou comentário e escolher uma
				cor no grupo Chapter color.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_28.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Limpando Marcações de Entrada e Saída e excluindo Markers.</h5>

			<p>
				Uma vez que você já tenha arrastado o intervalo definido para a timeline, poderá limpar a
				marcação de entrada, saída ou ambas, para definir novas marcações ou manter a origem do
				vídeo sem marcações.
			</p>
			<p>
				Para limpar entradas ou saídas de marcações devemos:<br/>
				1. Clicar com o botão direito do mouse na timeline do painel source e escolher:<br/>
				a. Clear In: Para limpar a marcação do trecho de entrada do intervalo;<br/>
				b. Clear Out: Para limpar a marcação do trecho de saída do intervalo;<br/>
				c. Clear In and Out: Para limpar ambas marcações de uma vez.
			</p>

			<h5>Entendendo track types</h5>

			<p>
				Quando você adiciona um vídeo ou um clipe de áudio a uma seqüência, você colocá-lo em
				uma faixa. As tracks ou trilhas, são áreas horizontais na sequência que mantêm os clipes em
				uma posição específica no tempo. Se você tem mais de uma faixa de vídeo, todos os clipes de
				vídeo colocados em uma faixa superior aparecerão na frente de clipes em uma faixa inferior.
				Por exemplo, se você tiver um texto ou um gráfico no seu segundo vídeo faixa e um clipe de
				vídeo em sua primeira faixa de vídeo, você os verá na frente do vídeo.
			</p>
			<p>
				Todas as faixas de áudio são reproduzidas ao mesmo tempo, criando uma mistura de
				áudio completa. Para criar um mix de audio, posicione seus clipes de áudio em faixas
				diferentes, alinhados no tempo. Narrações, efeitos de audio, musicas, podem ser posisionados 
				em diferentes tracks. Você pode renomear faixas, tornando mais fácil encontrar sua
				localização na sequência.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_29.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Navegação</h5>

			<p>
				Para executar o playback de uma sequence no Program Monitor ou de um clipe no Source 
				Panel, podemos usar barras de controle de playback. Essas barras, além de permitir
				executar o, pausar, retroceter, avançar ou ir aos próximo e anterior quadros, podem ser
				personalizadas com botões adicionais para realizar marcações e inserções, bem como fotografar frames e outras opções.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_30.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				A navegação na timeline pode ser realizada usando o Playhead ou o TimeCode, que se diferenciam 
				entre o posicionamento geral, ou um posicionamento por um tempo especifico na
				linha de tempo.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_31.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Porém, para ter uma maior agilidade na navegação pode-se optar por usar teclas de atalho
				para navegar das mesma forma que na barra de controle de playback:<br/>
				- <img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_32.png')); ?>" alt="guia"> 
				Botão Play-Stop – Teclar a barra de espaços.<br/>
				- <img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_33.png')); ?>" alt="guia"> 
				Botão Step Back 1 Frame – Teclar a seta para esquerda.<br/>
				- <img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_34.png')); ?>" alt="guia"> 
				Botão Step Forward 1 Frame – Teclar a seta para direita.
			</p>

			<p>
			Podemos ainda retroceder a execução e avançar, combinando três teclas proximas para	facilitar o controle do video:<br/>
			- Tecla “J” – Retrocede a execução, onde a cada toque na tecla, acelera o retrocesso.<br/>
			- Tecla “L” – Avança a execução, onde a cada toque na tecla, acelera o avanço.<br/>
			- Tecla “K” – Pausa a execução entre o avanço e o retrocesso.
			</p>

			<h5>Exportando sequências</h5>

			<p>
				Para exportar a sequência editada, podemos inicialmente, usar o comando File – Export. Nele
				podemos configurar o formato de saída, igualar a resolução do vídeo e escolher o local de
				exportação.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_35.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Após escolher um preset na caixa Format, as configurações desse formato são exibidas como
				um padrão desse preset. As opções de exportação do audio e ou vídeo são disponibilizadas
				logo abaixo do link com o nome do arquivo, que permite escolher o local de exportação.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_36.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				A escolha da melhor opção de preset para formato de saída pode resultar em tamanho
				ou qualidade diferente em relação a mídia original. Portanto. É aconselhável optar pelas
				configurações básicas de vídeo desse preset.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit1/imagem_unit1_37.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Contudo, mesmo que a escolha adequada para o formato de saída seja pre-definida corretamente, 
				é comum ainda termos resultados com tamanhos elevados de arquivo. A solução
				para essa otmização, termos acesso em capitulos posteriores, onde trataremos da exportação
				usando o Adobe Media Encoder como aplicativo principal de renderização.
			</p>

			<h5>Salvar Projeto</h5>

			<p>
				Salvar um projeto economiza suas decisões de edição, referências a arquivos de origem e a
				disposição mais recente dos painéis. Proteja seu trabalho salvando com freqüência.<br/>
				− Para salvar o projeto atual, vá em Save – Project.<br/>
				− Para salvar uma copia do projeto atual, vá em File - Save as, especifique o local e o
				nome do arquivo e clique em Save.<br/>
				− Para salvar uma copia do projeto atual e continuar trabalhando no projeto original, vá
				em File - Save a Copy, especifique o local e o nome do arquivo e clique em Save.

			</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b> Capturar videos com a camera e fazer a importaçao para um projeto.</p>
            <p style="margin-top: 16px"><b>2.</b> Criar uma sequencia apartir de tracks de video obtidos no pré-corte.</p>            
			
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade1/apresentacao.blade.php ENDPATH**/ ?>