
<?php $__env->startSection('titulo','Unit 6 | ProvaTeórica'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade6" data-etapa="prova-teorica">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 24 – ProvaTeórica</h5>
			<p>
				Aplicar prova teórica baseada no conteúdo desenvolvido durante o curso e com base na revisão da aula anterior.
			</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade6/prova_teorica.blade.php ENDPATH**/ ?>