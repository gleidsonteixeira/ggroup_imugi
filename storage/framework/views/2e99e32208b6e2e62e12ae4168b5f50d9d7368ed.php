<?php $__env->startSection('titulo','Unit 20 | After Effects CC - ROTOSCOPIA E MATTE PAINTING'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade20" data-etapa="rotoscopia">
			<h3 class="barlow">UNIT 20 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 22 - ROTOSCOPIA</h5>

			<p>Separar um objeto de primeiro plano, como um ator, de um fundo é um passo crucial em muitos efeitos visuais e fluxos de trabalho de composição. Quando você criou um matt e que isola um objeto, você pode substituir o plano de fundo, aplicar seletivamente os efeitos ao primeiro plano e muito mais.</p>

			<h5>Ferramentas de Roto Brush & Refine Edge</h5>
			<p>A ferramenta Roto Brush e a ferramenta Refine Edge fornecem um fluxo de trabalho alternativo e mais rápido para segmentação e criação de um matte.</p><br>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit20/imagem_unit20_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>A. Roto Brush B. Refine Edge</p>

			<h5>Roto Brush</h5>
			<p>Use esta ferramenta para criar a matte inicial para separar um objeto de seu plano de fundo. Com a ferramenta Roto Brush, você desenha traços em áreas representativas do primeiro plano e elementos de fundo. Em seguida, o after usa essa informação para criar um limite de segmentação entre os elementos de primeiro plano e do plano de fundo.</p>
			<p>Os traçados ajudam o after a diferenciar entre o primeiro plano e o plano de fundo em quadros adjacentes. Várias técnicas são usadas para rastrear regiões ao longo do tempo, e essas informações são usadas para propagar a segmentação para frente e para trás no tempo. Cada traçado é usado para melhorar os resultados em quadros próximos. Mesmo que um objeto se mova ou mude de forma de uma moldura para a próxima, o limite de segmentação se adapta para combinar o objeto.</p>

			<h5>Refine Edge tool</h5>
			<p>Use a ferramenta Refine Edge para melhorar a matte existente, criando transparências parciais ao longo de áreas que contêm detalhes finos como cabelo ou pêlo. Depois clique no botão Congelamento, no canto inferior do painel layer para armazenamento em cache, bloqueio e salvamento das informações de propagação do roto brush e do refine edge.</p>
			<p>Quando o menu exibir no painel layer esti ver configurado para Roto Brush & Refine Edge, um botão Freeze aparece no canto inferior direito do painel layer. Clique neste botão para armazenar em cache e bloquear a segmentação para todos os limites de Roto Brush & Refine Edge para a layer dentro da área de trabalho da composição. Isso preserva o mate e o salva como projeto, evitando que o efeito Roto Brush & Refine Edge seja repropagado na segmentação quando você abrir o projeto novamente ou fazer alterações.Se o after já tiver calculado informações de segmentação para uma moldura ao clicar no botão congelar, essas informações serão armazenadas em cache. Se a segmentação não tiver sido calculada para uma moldura dentro de uma extensão Roto Brush & Refine Edge, o after deve calcular a segmentação antes do congelamento.</p>
			<p>Os frames com informações de segmentação congeladas (em cache e bloqueadas) são representados por barras azuis na vista Roto Brush & Refine Edge span no painel layer. Para descongelar a segmentação Roto Brush & Refine Edge, clique no botão congelar novamente.</p>
			<p>Quando a segmentação de Roto Brush & Raio de Limitação está congelada, você pode colocar o ponteiro sobre o botão congelar para ver uma dica de ferramenta que informa quando as informações em cache foram criadas.</p>
			<p>Quando a segmentação Roto Brush & Refine Edge está congelada, o ponteiro para as ferramentas Roto Brush & Refine Edge tem uma barra diagonal. Isso indica que novos traços não afetarão o resultado até você descongelar.</p>
			<p>A informação que está em cache e bloqueada é o resultado de traços de Roto Brush & Refine Edge e as propriedades no grupo de propriedades Roto Brush Propagation do efeito Roto Brush & Refine Edge.</p>
			<p>Fazer alterações em qualquer um desses itens (por exemplo, desenhando novos traços de Roto Brush ou modificando propriedades no grupo de propriedades Roto Brush Propagation) não influenciou o resultado do efeito Roto Brush & Refine Edge até descongelar a segmentação. As propriedades dos grupos de propriedade Roto Brush Matte e Refine Edge Matte não estão congeladas.</p>
			<p>As informações de segmentação Frozen Roto Brush & Refine Edge são armazenadas em cache e bloqueadas enquanto o aplicativo está sendo executado e as informações em cache são salvas com o projeto.</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
						<p style="margin-top: 16px"><b>01.</b> Criar máscaras para retirar pessoas ou objetos de cenário para inclusão em diferentes cenas da composição.</p>

			<h5 class="barlow upper">AULA 23 - MATTE PAINTING</h5>
			<p>Fazer atividade baseado nos capítulos passados de Matte Painting, incorporando personagens a um cenário.</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>01.</b> Aplicar efeito de Matte Painting para compor um vídeo para inclusão de pessoas em cenário fictício.</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade20/rotoscopia.blade.php ENDPATH**/ ?>