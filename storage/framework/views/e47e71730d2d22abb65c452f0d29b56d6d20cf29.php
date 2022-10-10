
<?php $__env->startSection('titulo','Unit 7 | After Effects CC - APRESENTAÇÃO DO PROGRAMA'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade7" data-etapa="apresentacao_affect_effects">
			<h3 class="barlow">UNIT 7 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 01 - APRESENTAÇÃO DO PROGRAMA</h5>

			<h5>Apresentação</h5>
			<p>
				O Adobe After Effects CC fornece um conjunto abrangente de ferramentas 2D e 3D para composição, 
				animação e efeitos que os profissionais de Motion Graphics, artistas de efeitos visuais, 
				web designers e profissionais de filmes e vídeos precisam. Aft er Eff ects é amplamente utilizado 
				para pós-produção digital de filmes, vídeos, DVD e a web. Você pode compilar camadas
				de várias maneiras, aplicar e combinar sofisticados efeitos visuais e de áudio e animar objetos	e efeitos.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit7/imagem_unit7_1.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Workspace After Effects</h5>

			<p>
				O After Effects oferece uma área de trabalho personalizável de acordo com as necessidades
				do usuário. A workspace possui várias janelas predefinidas que otimizam o trabalho. Sendo
				possível criar e personalizar sua própria workspace, organizando painéis da forma que melhor
				se adaptem ao seu fluxo de trabalho.
			</p>

			<p>
				Para acessar as áreas de trabalho padrão ou personalizadas é preciso clicar na nova barra do
				espaço de trabalho que fica no lado direito do painel ferramentas.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit7/imagem_unit7_2.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Para escolher uma workspace:
			</p>

			<p>
				• Acesse janela > espaço de trabalho e selecione a workspace que deseja ou<br/>
				• Escolha uma workspace no menu espaço de trabalho no painel ferramentas ou<br/>
				• Caso o espaço de trabalho tenha um atalho de teclado atribuído, pressione Shift +F10, Shift +F11 ou Shift +F12.
			</p>


			<p>
				Para atribuir um atalho de teclado a workspace atual, acesse janela > atribuir atalho a (nome
				da workspace) espaço de trabalho.
			</p>

			<p>
				Para salvar de forma permanente uma workspace personalizada, organize os quadros e painéis 
				como desejado e, em seguida, acesse janela > espaço do trabalho > novo espaço de trabalho. 
				Digite um nome para sua workspace e clique em ok.<br/>
				Para excluir uma workspace acesse janela > espaço de trabalho > excluir espaço de trabalho.
				Escolha a workspace que você deseja excluir e clique em ok. Lembrando que não é possível
				excluir o espaço de trabalho que esteja ativo no momento.
			</p>

			<h5>Projects</h5>

			<p>
				O painel projects armazena composições e referências a todos os arquivos de origem usados
				pelos itens de gravação nesse projeto. Composições são capazes de conter e combinar os mesmos 
				tipos de arquivos de imagem, vídeo e aplicar efeitos.<br/>
				A extensão do arquivo de projeto é .aep ou .aepx. Um arquivo de projeto com extensão .aep
				é arquivo de projeto binário, um arquivo de projeto com extensão .aepx é um arquivo XML
				baseado em texto. O nome do projeto atual aparece na parte superior da janela do aplicativo.
				Sendo que somente um projeto pode ser aberto por vez. Depois de criar um projeto é possível
				importar a gravação para o projeto:
			</p>

			<p>
				Para criar um projeto, acesse arquivo > novo > novo projeto.<br/>
				Para abrir um projeto, acesse arquivo > abrir projeto, localize-o e clique em abrir.<br/>
				Para salvar um projeto, acesse arquivo > salvar.
			</p>

			<h5>Painel de Ferramentas</h5>

			<p>
				O painel de ferramentas fica no canto superior esquerdo da workspace. As ferramentas ficam
				disponíveis assim que uma composição for criada. Com as ferramentas é possível modificar
				elementos da composição.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit7/imagem_unit7_3.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				A. Selection<br/>
				B. Hand<br/>
				C. Zoom<br/>
				D. Rotation<br/>
				E. Camera Tools<br/>
				F. Pan Behind<br/>
				G. Mask and Shape Tools<br/>
				H. Pen Tools<br/>
				I. Type Tools<br/>
				J. Brush<br/>
				K. Clone Stamp<br/>
				L. Eraser<br/>
				M. Roto Brush and Refine Edge Tools<br/>
				N. Puppet Tools
			</p>
			
			<p>
				Ao passar o ponteiro do mouse sobre qualquer ícone no painel ferramentas, uma dica irá identificar 
				essa ferramenta e seu atalho de teclado. Um pequeno triângulo no canto inferior direito
				do ícone da ferramenta indica que uma ou mais ferramentas adicionais estão escondidas atrás
				desse mesmo ícone. Clique e segure sobre o triângulo no canto inferior do ícone da ferramenta 
				para exibir as ferramentas ocultas e, em seguida, selecione a ferramenta que deseja usar.
			</p>

			<h5>Composição</h5>
		
			<p>
				Cada composição possui sua própria linha do tempo. Uma composição de forma geral possui
				várias camadas que podem corresponder, por exemplo, a áudio, vídeo, gráficos animados de
				texto, vetor imagens, luzes. Uma composição no After Effects é semelhante a uma sequência
				no Premiere Pro. O usuário renderiza uma composição para criar os quadros de um filme de
				saída final, que é codificado e exportado para vários formatos. Projetos simples podem incluir
				apenas uma composição, enquanto que projetos complexos podem incluir centenas de composições 
				para organizar grandes quantidades de gravação ou vários efeitos. Cada composição
				tem uma entrada no painel projeto. Clique duas vezes em uma entrada de composição no
				painel projeto para abrir a composição na timeline.
			</p>

			<p>
				Para selecionar uma composição no painel projeto, clique com o botão direito do mouse no
				painel composição ou no painel timeline da composição e selecione revelar composição no
				projeto no menu de contexto. Para visualizar uma composição, use o painel composição. Para
				criar uma composição, acesse composição > nova composição ou pressione Ctrl+N.<br/>
				O painel composição contém o quadro de composição e um espaço de trabalho fora do quadro 
				que você pode usar para mover camadas para dentro e para fora do quadro da composição. 
				As partes que não estão no quadro de composição (extensões externas das camadas) são
				mostradas como contornos retangulares. Somente a área dentro do quadro de composição é
				renderizada para visualização e saída final.
			</p>

			<p>
				Para facilitar o trabalho do usuário em um projeto complexo é possível organizar o projeto colocando 
				uma ou mais composições em outra composição. Desse modo o usuário pode criar uma
				composição de qualquer número de camadas pré-compondo as mesmas. Ao terminar de alterar
				algumas camadas da composição, você pode fazer a pré-composição dessas camadas e depois
				pré-renderizar a pré-composição, substituindo a por um filme renderizado.
			</p>

			<p>
				É possível alterar as configurações da composição a qualquer momento, no entanto, deve-se pensar 
				acerca do tamanho do quadro quando criar a composição, tendo a saída final em mente.
			</p>
			
			<h5>Timeline</h5>

			<p>
				Cada composição tem sua própria timeline. É possível usar o painel timeline para executar várias
				tarefas como, por exemplo, animar propriedades de camada, organizar camadas no tempo e configurar 
				modos de mesclagem. No lado esquerdo do painel timeline temos as colunas dos controles
				para camadas, já no lado direito temos o gráfico de tempo que contém uma escala de tempo,
				marcadores, quadros-chave, expressões, barras de duração de camadas (no modo de barra de
				camada) e o editor de gráfico (no modo editor de gráfico).
			</p>

			<p>
				As primeiras camadas a serem renderizadas, são as camadas na parte inferior da ordem de camadas 
				no painel timeline. Para avançar entre os painéis da timeline, pressione Alt+Shift +ponto (.).
				Para se deslocar para trás, pressione 100. Para o início observação, pressione Alt+Shift +vírgula (,).
				Para saber o tempo atual de uma composição, veja o CTI (indicador de tempo atual) representado
				pela linha vermelha vertical do gráfico de tempo. Esse tempo também aparece na exibição do
				tempo atual no canto superior esquerdo do painel Linha de tempo.
			</p>

			<h5>Visualização de vídeo e áudio</h5>

			<p>
				No after effects é possível visualizar toda a sua composição ou parte dela conforme o usuário trabalha, 
				sem render para a saída final. Assim, o usuário pode usar a pré-visualização para reproduzir
				vídeo e áudio. Muitos dos controles para essa pré-visualização estão no painel de visualização.
			</p>

			<p>
				Vale lembrar que o número de quadros que podem ser armazenados para reprodução em tempo
				real depende da quantidade de RAM disponível e das configurações no painel de visualização.
			</p>

			<p>
				Para reproduzir uma pré-visualização o after effects aloca a RAM para reproduzir vídeo e áudio
				no painel Timeline, Layer ou Footage em tempo real. O comportamento padrão de visualização é
				configurado para produzir uma visualização que representa uma reprodução em tempo real.
			</p>

			<p>
				No entanto, existem outras formas de visualização, sendo o modo mais básico de visualizar quadros: 
				movendo ou arrastando o indicador de tempo atual (CTI).
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit7/imagem_unit7_4.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Time Ruler</h5>

			<p>
				A time ruler representa visualmente a dimensão do tempo de uma composição, uma camada
				ou um item de metragem. Em um painel layer ou footage, a time ruler aparece perto da parte
				inferior do painel.<br/>
				Para um painel composição, a time ruler aparece no painel timeline correspondente. A regra
				de tempo em um painel de camada ou filme representa a duração do conteúdo deste painel.
				A time ruler no painel Timeline representa a duração de toda a composição. Na time ruler, o
				indicador de tempo atual indica o quadro que você está visualizando ou modificando.
			</p>

			<h5>Fast Previews</b>

			<p>
				As opções Fast Previews variam de qualidade superior com desempenho inferior (off ), a baixa
				qualidade com desempenho alto (wireframe). Não é possível fazer pré-visualizações rápidas
				com qualidade final, se deseja visualizar a qualidade final da sua composição use a resolução
				adaptativa.
			</p>

			<p>
				A resolução adaptável tenta reduzir a gravação enquanto arrasta uma camada ou depurar um
				valor de propriedade. Para as composições 3D traçadas por raios, a resolução adaptável reduzirá 
				a qualidade do traçado com base na resolução adaptativa atual.
			</p>
					
			<p>
				• Em 1/2, a qualidade é cortada pela metade;<br/>
				• Em 1/4, é reduzido até 4;<br/>
				• Em 1/8 ou 1/16, é reduzido até 2.
			</p>

			<p>
				É possível alterar o limite de resolução adaptativa em editar > preferências > pré-visualizações.
			</p>

			<p>
				Rascunho: disponível apenas em composições de 3D traçados por raio (reduz a qualidade de
				traçado de raio a 1). Rascunho rápido: em composições em 3D traçadas por raio, esse modo
				renderiza as camadas com chanfro, extrusão e 3D curvadas ( a cena será reduzida para acelerar 
				o carregamento das texturas para a GPU). O fator de redução fica definido para 1/4, e os
				efeitos e os tons foscos de controle serão ativados.
			</p>

			<p>
				Wireframe: esse modo é útil para configurar e visualizar composições complexas.
			</p>

			<h5>Work Area</h5>

			<p>
				A área de trabalho da Timeline é a parte da duração de uma composição que é renderizada
				para visualizações ou resultados finais. No painel Timeline, a área de trabalho aparece em
				uma tonalidade mais clara de cinza. Esta área de trabalho (Work Area) indica que parte da
				composição será renderizada durante a visualização da timeline dentro do aft er eff ects.
			</p>
						
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade7/apresentacao_affect_effects.blade.php ENDPATH**/ ?>