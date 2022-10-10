
<?php $__env->startSection('titulo','Unit 12 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade12" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 12 - TYPE TOOL & STYLE PANEL</h3>
				<p><b>Goal:</b>  Focus On Expressions Of Time And Future With Going To.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit12/vocabulary/vocabulary.wav')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>AVAILABLE</b></p></li>
					<li><p><b>CUSTOM</b></p></li>
					<li><p><b>A LOT</b></p></li>
					<li><p><b>STYLE</b></p></li>
					<li><p><b>CHOOSE</b></p></li>
					<li><p><b>SHADOW</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade12/vocabulary.blade.php ENDPATH**/ ?>