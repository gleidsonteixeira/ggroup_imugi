
<?php $__env->startSection('titulo','Unit 7 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade7" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
				<p><b>Goal:</b> Teach students verb conjugation in the simple present; Focus on pronunciation of plurals.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit7/vocabulary/vocabulary.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>SAY</b></p></li>
					<li><p><b>REMEMBER</b></p></li>
					<li><p><b>ADJUSTMENT</b></p></li>
					<li><p><b>UTILIZE</b></p></li>
					<li><p><b>GIVE</b></p></li>
					<li><p><b>EFFECT</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade7/vocabulary.blade.php ENDPATH**/ ?>