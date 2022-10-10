
<?php $__env->startSection('titulo','Unit 26 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade26" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
				<p><b>Goal:</b> Provide Students With A Better Understanding Of When To Apply Each Of The Tools Studied With Sarah.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit26/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>WAY</b></p></li>
					<li><p><b>YOUNG</b></p></li>
					<li><p><b>CANVAS</b></p></li>
					<li><p><b>CAPTURE</b></p></li>
					<li><p><b>SUNSET</b></p></li>
					<li><p><b>STEP</b></p></li>
					<li><p><b>CLOUD</b></p></li>
					<li><p><b>DELICACY</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade26/vocabulary.blade.php ENDPATH**/ ?>