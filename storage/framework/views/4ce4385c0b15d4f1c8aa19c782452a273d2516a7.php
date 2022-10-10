<?php $__env->startSection('titulo','Unit 33 | Definindo favoritos'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade33" data-etapa="definindo_favoritos">
			<h3 class="barlow">UNIT 33</h3>
			<h5 class="barlow upper">Definindo favoritos</h5>
			<p>
			Assets usados com frequência podem ser definidos como favoritos clicando no botão estrela.
Para um acesso rápido e fácil, podemos pesquisá-los ou filtrá-los no menu suspenso Favoritos
no painel esquerdo.
			</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade33/definindo_favoritos.blade.php ENDPATH**/ ?>