<?php $__env->startSection('titulo','Unit 5 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade5" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
				<p><b>Goal:</b> To learn what Burn Tool is used for while focusing on adjectives in their comparative forms.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit5/vocabulary/vocabulary.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>THINK</b></p></li>
					<li><p><b>BRIGHT</b></p></li>
					<li><p><b>DARK</b></p></li>
					<li><p><b>WANT</b></p></li>
					<li><p><b>KNOW</b></p></li>
					<li><p><b>MAKE</b></p></li>
					<li><p><b>BRUSH</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade5/vocabulary.blade.php ENDPATH**/ ?>