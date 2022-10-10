
<?php $__env->startSection('titulo','Unit 14 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade14" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit14/vocabulary/vocabulary.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>ABOUT</b></p></li>
					<li><p><b>REVIEW</b></p></li>
					<li><p><b>REMEMBER</b></p></li>
					<li><p><b>OTHER</b></p></li>
					<li><p><b>SAVE</b></p></li>
					<li><p><b>GIVE</b></p></li>
					<li><p><b>FORGET</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade14/vocabulary.blade.php ENDPATH**/ ?>