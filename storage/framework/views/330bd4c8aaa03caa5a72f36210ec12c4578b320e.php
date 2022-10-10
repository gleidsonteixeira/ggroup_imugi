
<?php $__env->startSection('titulo','Unit 8 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade8" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 08 - REVIEW OF SOPHIA’S CLASSES</h3>
				<p><b>Lesson goal:</b>  Review the content studied in the last units during Sophia’s classes, explore more vocabulary and focus on text interpretation.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit8/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>LAST</b></p></li>
					<li><p><b>WANT</b></p></li>
					<li><p><b>DURING</b></p></li>
					<li><p><b>TAKE</b></p></li>
					<li><p><b>CAN</b></p></li>
					<li><p><b>DO</b></p></li>
					<li><p><b>MAKE</b></p></li>
					<li><p><b>BETWEEN</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade8/vocabulary.blade.php ENDPATH**/ ?>