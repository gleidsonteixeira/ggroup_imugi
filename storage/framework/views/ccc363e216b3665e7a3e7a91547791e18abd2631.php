
<?php $__env->startSection('titulo','Unit 5 |  Multicamera e Estabilização'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade5" data-etapa="sequencia_destino">
			<h3 class="barlow">UNIT 5</h3>
			<h5 class="barlow upper">Aula 16 – Multicamera e Estabilização</h5>
			<h5>Criar uma sequência de destino de multicâmera</h5>
			<p>
				Edite a sequência de origem de multicâmera em uma sequência de destino. Para isto, clique
				com o botão direito na sequencia de origem que o Premiere Pro criou apartir da configuração
				da caixa de diálogo Create Multi-Camera Source Sequence escolha New Sequence From Clip.
			</p>
			<p>
			Ativar edição de multicâmera no monitor de programas
			</p>
			<p>Para ativar a sequência de dest no de multicâmera para editar várias câmeras, escolha Toggle
						Multi-Camera View no menu pop-up do Program Monitor. No modo Multicâmera, é possível
						exibir a gravação de todas as câmeras simultaneamente e alternar entre as câmeras para escolher a gravação para a sequência final.
			</p>
			<div class="container">
					<figure>
							<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_8.png')); ?>" alt="guia1">
					</figure>
			</div>
			<div class="container">
					<figure>
							<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_9.png')); ?>" alt="guia1">
					</figure>
			</div>
			<h5>Ativar gravação de edição de multicâmera</h5>
			<p>Clique no botão de alternar Multi-Camera Record On/Off Toggle. Se o botão não estiver visível
						na barra de botões, clique em “+” no canto inferior direito do Program Monitor para abrir o
						Editor de botões. Arraste o botão Multi-Camera Record On/Off Toggle até a barra de botões.
			</p>
			<h5>Sobre o timecode</h5>
			<p>
				Muitas filmadoras e plataformas de vídeo de última geração gravam timecode, que marca
				quadros específicos com endereços exclusivos. O timecode é essencial para a captura de quadros que foram anteriormente identificados ou capturados, como nas tarefas abaixo:
			</p>
			<ul class="unidade_6_5">
					<li>Você deseja registrar clipes antes de capturá-los.</li>
					<li>Você planeja capturar clipes usando a captura em lote (automatizada).</li>
					<li>Você deseja recapturar os clipes porque os arquivos originais foram corrompidos ou excluídos.</li>
					<li>Você planeja exportar sequências para outro sistema usando EDL.</li>
					<li>Você está usando um sistema em que edita rapidamente com capturas em baixa
								resolução e, posteriormente, recaptura os clipes na qualidade e resolução máximas
								para a versão final.</li>
					<li> Você planeja sincronizar o vídeo capturado com o áudio gravado separadamente.
									Acesse o painel Essent al Graphics através do menu Window – Essent al Graphics.</li>
					<li>Para procurar modelos em suas bibliotecas do Creative Cloud ou sua unidade local,
								clique na guia Procurar no painel Essent al Graphics.</li>
				</ul>
				<p>Diferentemente dos números em contadores de tempo encontrados em VCR, o timecode é
						gravado na fita de vídeo como parte do sinal de vídeo. Se a gravação não t ver timecode, é possível adicioná-lo copiando-o com uma câmera ou plataforma que grave timecode. Em seguida,
						é possível registrar ou capturar o vídeo desse dispositivo.
					</p>
				<p>Para obter melhores resultados, o timecode deve ser executado continuamente do início até
							o fim da fita; ele não deve reiniciar do zero em nenhum lugar intermediário. Na edição, se registrar um ponto de captura como 00:00:01:09, mas esse número ocorrer na fita duas ou três
							vezes devido a reinícios do timecode, o Premiere Pro não poderá determinar qual 00:00:01:09
							é o local para iniciar a captura. Com um timecode descontinuo, é possível capturar os clipes
							incorretos de fitas.
				</p>
				<p>
					Para garantir um timecode continuo, é necessário filmar continuamente ou listrar a fita com ele antes da filmagem.
				</p>
					<div class="container">
					<figure>
							<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_10.png')); ?>" alt="guia1">
					</figure>
			</div>
				<div class="container">
					<figure>
							<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_11.png')); ?>" alt="guia1">
					</figure>
			</div>
				<p>Estabilizar com o efeito Warp Stabilizer</p>
				<ol class="unidade_6_5">
					<li>Para estabilizar o movimento usando o efeito Warp Stabilizer, faça o seguinte:</li>
					<li>Selecione o clipe que deseja estabilizar</li>
					<li>No painel Efeitos, escolha Distort – Warp Stabilizer, e aplique o efeito clicando duas vezes ou arrastando o efeito para o clipe na Linha de tempo ou no painel Controles do efeito.</li>
				</ol>
				<p>Depois que o efeito é adicionado, a análise do clipe começa imediatamente em segundo plano. Quando a análise começa, o primeiro de dois banners é exibido no painel Projeto, indicando que a análise está sendo executada. Quando a análise é concluída, o segundo banner exibe
							uma mensagem de que a estabilização está sendo executada.
				</p>
					<div class="container">
						<figure>
								<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_12.png')); ?>" alt="guia1">
						</figure>
					</div>
				<p>
					É possível trabalhar livremente com a gravação ou em qualquer outra parte do projeto
					enquanto essas etapas estão sendo executadas.
				</p>
					<div class="container">
						<figure>
								<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_13.png')); ?>" alt="guia1">
						</figure>
					</div>
			<h5>Mercalli V4</h5>
			<p>O ProDAD Mercalli é um aplicativo que permite que você remova os efeitos da vibração da
						câmera, sacudidas e tremores das sequências de vídeos gravados. Também melhora sua filmagem ao suavizar disparos irregulares de panorâmicas ou zoom.
			</p>
			<p>O Mercalli V4 emprega uma revolucionária estabilização 3D, Que estabiliza de forma independente o eixo da câmera X, Y e Z, oferecendo impressionantes resultados de estabilização de
						vídeo - muito melhor do que qualquer outro produto no mercado.
			</p>
			<div class="container">
					<figure>
							<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_14.png')); ?>" alt="guia1">
					</figure>
				</div>
				<h5>ATIVIDADES</h5>
				<ol class="unidade_6_5">
						<li>Criar sequancia com mudanças de planos de uma mesma gravaçao com cameras diferentes.
						</li>
						<li>Aplicar o timecode effect e a mudança de camera exibindo na tela.
									Estabilizar videos e tratar correçao de cores e cortar a tela se necessário.
						</li>
				</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade5/sequencia_destino.blade.php ENDPATH**/ ?>