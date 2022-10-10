
<?php $__env->startSection('titulo','Unit 5 |  Exportação de Arquivos'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade5" data-etapa="exportacao_arquivos">
			<h3 class="barlow">UNIT 5</h3>
			<h5 class="barlow upper">Aula 15 – Exportação de Arquivos</h5>
			<h5>Adobe Media Encoder</h5>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>
					O Premiere Pro e outros aplicativos utilizam o Adobe Media Encoder, um aplicativo independente de codificação.
					Ao especificar as configurações de exportação na caixa de diálogo Configurações de exportação e clicar em Exportar, o Premiere Pro envia a solicitação de exportação para o Adobe Media Encoder.
			</p>
			<p>
				Na caixa de diálogo Configurações de exportação, clique em Fila para enviar sequências do
				Premiere Pro para a fila do Adobe Media Encoder independente. A partir da fila, é possível
				codificar sequências em um ou mais formatos ou tirar proveito de outros recursos.
			</p>
			<p>
				Quando o Adobe Media Encoder independente está renderizando e exportando em segundo
				plano, você pode continuar a trabalhar no Premiere Pro. O Adobe Media Encoder codifica a
				versão salva mais recentemente de cada sequência na fila.
			</p>
			<p>Para exportar um vídeo no Adobe Media Encoder clique em File – Export – Media.</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_2.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>
				Ao clicar no botão Queue (Add to Adobe Media Encoder Queue), você opta por exportar o
				aquivo para uma fila de exportação. Com o Adobe Media Encoder instalado e já carregado, ele
				assume o gerenciamento dessa fila. Então, o Adobe Media Encoder é exibido com o vídeo e as
				configurações prévias já adicionado na fila de exportação.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_3.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>
				Caso o Adobe Media Encoder não esteja carregado quando o vídeo for adicionado a fila, ele
				será adicionado imediatamente quando o programa for carregado.
				Para concluir a exportação, basta clicar no botão Start Queue
				 <span style="display: inline-block"><img src="<?php echo e(asset('assets/img/video_edition/unit5/imagem_unit5_4.png')); ?>" alt="guia1"></span>
			</p>
			<h5>Formatos de Exportação</h5>
			<p>Para exportar um arquivo usando o Adobe Media Encoder, selecione um formato na caixa de diálogo
				</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade5/exportacao_arquivos.blade.php ENDPATH**/ ?>