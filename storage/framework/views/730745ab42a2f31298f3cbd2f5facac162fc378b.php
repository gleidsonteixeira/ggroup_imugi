<?php $__env->startSection('titulo','Unit 5 |  Multicamera e Estabilização'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade32" data-etapa="multicamera">
			<h3 class="barlow">UNIT 5</h3>
			<h5 class="barlow upper">Aula 16 – Multicamera e Estabilização</h5>
			<h5>Fluxo de trabalho de edição de multicâmera</h5>
			<p>
				O Premiere Pro permite criar uma sequência de origem de multicâmera usando clipes de várias origens da câmera.
				É possível sincronizar os clipes confi gurando manualmente pontos de entrada, pontos de saída ou marcadores de clipe.
				Em alternativa, é possível usar a sincronização com base em áudio para alinhar com precisão clipes em uma sequência de multicâmera.
				O modo Multicâmera no Monitor de programas permite editar clipes capturados em várias	câmeras de diferentes ângulos.
				Para exibir a interface de edição de multicâmera no Monitor de programas, selecione Multicâmera no menu pop-up do Monitor de programas.
				O modo Multicâmera do Monitor de programas exibe uma saída totalmente composta no modo normal de reprodução, exibindo todos os efeitos aplicados durante a reprodução.
			</p>
			<p>
				Confira abaixo a sequencia do fluxo para um projeto Multicâmera:
			</p>
			<ol class="unidade_6_5">
				<li>Criar um projeto</li>
				<li>Importar gravação</li>
				<li>Criar uma sequência de origem de multicâmera</li>
				<li>Criar uma sequência de destino de multicâmera</li>
				<li>Ativar edição de multicâmera no monitor de programas</li>
				<li>Ativar gravação de edição de multicâmera</li>
				<li>Editar a sequência de multicâmera</li>
				<li>Ajustar e refinar edições</li>
				<li>Exportar a sequência de multicâmera</li>
		</ol>
		<p>Caixa de diálogo Create Multi-Camera Source Sequence</p>
			<div class="container">
					<figure>
							<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_5.png')); ?>" alt="guia1">
					</figure>
			</div>
			<p>É possível criar uma sequência de origem de multicâmera das seguintes maneiras:</p>
			<ul class="unidade_6_5">
					<li>Selecione um compartimento que contenha ativos e escolha um método de sincronização na caixa de diálogo
						Criar uma sequência de origem de multicâmera.
						Todos os clipes no compartimento são processados com base no método de sincronização e ordenados de forma alfanumérica em cada sequência de origem resultante
					</li>
					<li>
						Selecione os ativos manualmente e escolha um método de sincronização na caixa de diálogo Criar uma sequência de origem de multicâmera. A ordem na qual você seleciona
						os clipes determina a ordem na sequência de origem resultante.
					</li>
				</ul>
				<h5>Nome da sequência de origem de multicâmera</h5>
				<p>É possível nomear a sequência de origem de multicâmera com o nome do videoclipe ou clipe de áudio principal da sequência. No menu pop-up, selecione a opção apropriada para adicionar “multicâmera” ou um nome personalizado para o vídeo ou áudio principal.
						Sincronizar ponto
				</p>
				<p>Antes de criar uma sequência de origem de multicâmera usando pontos de entrada, pontos
							de saída ou marcadores de clipe como ponto de sincronização, você deve marcar clipes para
							sincronização.
				</p>
				<p>Pontos de entrada, pontos de saída (Inpoints, OutPoints)
							Marque os pontos de sincronização usando os pontos de entrada ou de saída
							antes de criar a sequência de origem de multicâmera.
				</p>
				<h5>Timecode</h5>
				<p>Selecione a opção Timecode para sincronizar os clipes se tiverem sido gravados como timecode em sincronia entre eles</p>
				<ul class="unidade_6_5">
				<li>Selecione Ignorar horas se cada clipe tiver timecode que inicie em uma hora diferente mas, contrariamente, tenha o timecode sobreposto.
				</li>
				<li>
					Selecione os ativos manualmente e escolha um método de sincronização na caixa de diálogo Criar uma sequência de origem de multicâmera. A ordem na qual você seleciona
					os clipes determina a ordem na sequência de origem resultante.
				</li>
			</ul>
			<p>O Premiere Pro permite executar edições de multicâmera rapidamente com base no timecode de sincronização. Pressione a tecla modifi cadora Ctrl ao trocar os clipes de origem para corresponder o quadro ao timecode na posição atual do indicador de reprodução.</p>
			<h5>Marcador de clipe (Clipmarker)</h5>
			<p>Marque os pontos de sincronização usando os pontos de entrada ou de saída antes de criar a sequência de origem de multicâmera.</p>
			<h5>Áudio</h5>
			<p>Selecione a opção Áudio para sincronizar os clipes automaticamente com base nos áudios
						de forma de onda. É possível usar áudio gravado de uma origem secundária para sincronizar
						automaticamente e criar clipes mesclados e de multicâmera usando áudios de forma de onda</p>
			<h5>Predefinição de sequência</h5>
			<p>
					Selecione o menu pop-up Sequence Preset para selecionar a partir de uma lista com todas as
					predefinições de sequência salvas anteriormente.
			</p>
			<p>
					A predefinição de sequência Automatic é selecionada por padrão. Quando você seleciona a
					predefinição Automática, a predefinição de vídeo se baseia no formato de vídeo do clipe da
					Câmera um. Na maioria dos casos, a predefinição Automatic é a configuração apropriada. Para
					fluxos avançadas, como edição de uma sequência usando clipes do proxy, escolha uma predefinição na sequência. Em seguida, você pode usar clipes com resolução/tamanho de quadro
					maior para as edições finais.
			</p>
			<h5>Deslocar áudio e mover clipes de origem</h5>
			<p>
					Se uma faixa de áudio gravada separadamente estiver fora de sincronia com o videoclipe, é
					possível adicionar um deslocamento de quadro usando a opção Off set áudio by. É possível
					inserir quadros de vídeo no intervalo de -100 a +100 para o deslocamento de sincronização
					do clipe de áudio.
			</p>
			<p>
					Use a opção Move source clips to Processed Clips bin para mover os clipes de origem gerados
					para o compartimento Clipes processados. Se não existir um compartimento Clipes processados, o Premiere Pro criará um antes de mover os clipes para ele. Os clipes que não tiverem
					atendido aos critérios de sincronização serão deixados fora do compartimento Clipes processados. Essa opção torna fácil identificar os clipes que não foram usados na sequência
					de origem de multicâmera resultante.
			</p>
			<h5>Configurações de sequência de áudio (Audio sequence set ngs)</h5>
			<p>
				As configurações de sequência determinam como as faixas de áudio na sequência de origem
				são preenchidas, como as atribuições de deslocamento e canais são definidas e se estão silenciadas.
			</p>
			<p>
				Selecione Câmera 1 quando apenas o áudio da câmera 1 for usado na sequência de edição.
				A edição de multicâmera é permit da apenas para a parte de vídeo da sequência de origem.
				Selecione Selecione All cameras para usar todos os canais de áudio nos clipes de origem. Essa
				configuração é semelhante à configuração da Câmera 1. Apenas a parte de vídeo da sequência
				de origem é compativel com multicâmera. para usar todos os canais de áudio nos clipes de
				origem. Essa configuração é semelhante à configuração da Câmera 1. Apenas a parte de vídeo
				da sequência de origem é compativel com multicâmera.
			</p>
			<p>
				Selecione Alternate Audio quando desejar que o áudio alterne com seu vídeo vinculado.
				Essa configuração ativa o som de todo o áudio.
				Essa opção permite a edição de multicâmera no vídeo e no áudio da sequência de origem, quando a configuração
				O áudio segue o vídeo estiver ativada no Monitor de programas.
			</p>
			<h5>Audio Channel Preset</h5>
			<p>
				As Predefinições de canais de áudio determinam como a sequência de origem resultante é
				mapeada. Os detalhes incluem o tipo e o número de faixas de áudio que serão ignorados
				quando a sequência de origem for aninhada na sequência de edição.
				Automatic: lê o tipo de áudio do primeiro clipe e usa este mapeamento.
			</p>
			<p>Mono: mapeia os canais mono para quantos canais de saída houver na sequência de origem.
						Estereo: mapeia para as faixas estéreo com base no número de canais de saída na sequência
						de origem
			</p>
			<p>
				5.1: mapeia para faixas <br>
				5.1 com base no número de canais de saída na sequência de origem. <br>
				Adaptive: mapeia para Adaptável com base no número de canais de saída na sequência de origem.
			</p>
			<h5>Camera Names</h5>
			<p>
				As Predefinições de canais de áudio determinam como a sequência de origem resultante é
				mapeada. Os detalhes incluem o tipo e o número de faixas de áudio que serão ignorados
				quando a sequência de origem for aninhada na sequência de edição.
			</p>
			<p>
				Ao criar uma sequência de origem de mult câmera, é possível exibir os nomes das câmeras como nomes de clipe ou nomes de faixas. Essas opções estão disponíveis além da opção padrão dos nomes enumerados de câmeras câmera 1, câmera 2.
			</p>
			<p>Dependendo da opção Camera Names selecionada, os ângulos da câmera são exibidos como
						nomes de faixa, nomes de clipe ou números de câmera no Source Monitor. Para exibir a sequência de várias câmeras no Source Monitor, clique com o botão direito do mouse na sequência
						e selecione Multicamera.
			</p>
			<p>
				Organizar e selecionar ângulos de câmera para exibição no modo de multicâmera do monitor
				O Premiere Pro permite organizar e selecionar os ângulos para visualização no modo de multicâmera do Source Monitor.
			</p>
			<div class="container">
					<figure>
							<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_6.png')); ?>" alt="guia1">
					</figure>
			</div>
			<p>
				No menu pop-up do Source Monitor, selecione Edit Cameras.
			</p>
			<p>
				Na caixa de diálogo Edit Cameras, todos os clipes são listados na ordem original na qual
				foram organizadas nas faixas de sequência. É possível arrastar e soltar clipes para alterar
				a ordem da sequência. Também é possível ativar ou desativar os clipes selecionando-os
				ou desmarcando-os.
			</p>
			<p>
				Em várias páginas, é possível organizar e selecionar câmeras na exibição de multicâmeras.
				É possível definir o número de origens de câmera por página e navegar entre páginas conforme necessário. Você não pode arrastar e soltar câmeras em páginas diferentes ou dentro
				de uma única página, mas pode usar a caixa de diálogo Edit Cameras para mudar a ordem de
				câmeras em uma sequência de multicâmera, e as páginas serão reorganizadas de acordo.
			</p>
				<div class="container">
					<figure>
							<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_7.png')); ?>" alt="guia1">
					</figure>
			</div>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade5/multicamera.blade.php ENDPATH**/ ?>