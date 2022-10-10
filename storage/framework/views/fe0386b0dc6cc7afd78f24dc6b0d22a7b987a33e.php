
<?php $__env->startSection('titulo','Unit 6 | Prova Prática II'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade6" data-etapa="prova-pratica-dois">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 22 – Prova Prática II</h5>
			<p>
				Os alunos deveram dar continuidade a um projeto de curta metragem aplicando coneitos e técnicas abordados em todo o curso
			</p>
			<h5>ATIVIDADES</h5>
				<ol class="unidade_6_5">
					<li>Continuar desenvolvimento de projeto curta metragem.</li>
				</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade6/prova_pratica_dois.blade.php ENDPATH**/ ?>