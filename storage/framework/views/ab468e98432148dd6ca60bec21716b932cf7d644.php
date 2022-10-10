<?php $__env->startSection('titulo','Unit 6 | Chroma Key'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade20" data-etapa="chroma-key">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 20 – Chroma Key</h5>
			<h5>Ultra key</h5>
			<p>
				O Premiere Pro possui um efeito de chromação poderoso, rápido e intuitivo chamado Ultra	key.
				O fluxo de trabalho é simples: Escolha uma cor que deseja tornar transparente e depois
				ajuste confi gurações para se adequar.
				O efeito Ultra Key, como todo o keyer greenscreen, gera dinamicamente um matte (definindo quais pixels devem ser transparentes) com base na
				seleção de cores. O matte é ajustável usando as configurações detalhadas do efeito Ultra Key.
			</p>
				<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit6/imagem_unit6_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<h5>Parametros Ultra key</h5>
			<p>
				No painel Effect Controls, altere o Output Set ngs do efeito Ultra Key para Alpha Channel.
				Neste modo, o efeito Ultra Key exibe o canal alfa como um imagem em tons de cinza, os pixels
				escuros serão transparentes e os bracos serão opacos.
			</p>
			<p>
			Os modos Default, Relaxed e Agressive modificam o Mat e Generat on, Mat e Cleanup e Spill
			Supression. Voce pode modifica-los individualmente para ober um melhor key de um clip que
			seja mais desafiador.
			</p>
			<h5>ATIVIDADES</h5>
			<ol class="unidade_6_5">
					<li>Criar uma composição de cena usando videos capturados na aula de gravação. </li>
					<li>Dar inicio a gravações para utilização no projeto final de curta metragem.</li>
			</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade6/chroma_key.blade.php ENDPATH**/ ?>