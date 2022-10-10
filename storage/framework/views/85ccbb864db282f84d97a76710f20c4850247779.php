
<?php $__env->startSection('titulo','Unit 10 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade10" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit10/vocabulary/vocabulary.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>TELL</b></p></li>
					<li><p><b>LAST</b></p></li>
					<li><p><b>DANCE</b></p></li>
					<li><p><b>SING</b></p></li>
					<li><p><b>FOOD</b></p></li>
					<li><p><b>COOK</b></p></li>
					<li><p><b>CLASS</b></p></li>
					<li><p><b>GO</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade10/vocabulary.blade.php ENDPATH**/ ?>