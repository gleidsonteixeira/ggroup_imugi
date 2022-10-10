
<?php $__env->startSection('titulo','Unit 6 | Revisao Prova'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade6" data-etapa="revisao-prova">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 22 – Revisao Prova</h5>
			<p>
				Revisão direcionada abordando os tópicos inclusos na prova teórica.
			</p>
			<h5>ATIVIDADES</h5>
				<ol class="unidade_6_5">
					<li>Desenvolver práticas rápidas dos tópicos que os alunos apresentarem maiores dúvidas.</li>
				</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade6/revisar_prova.blade.php ENDPATH**/ ?>