<?php $__env->startSection('titulo','Unit 32 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade32" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 32 - VICTOR’S REVIEW</h3>
				<p><b>Goal: </b>Talk To Students About An Overview Of Video Editing On Photoshop. Go Over All Of The Tools Studied.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit32/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>WONDERFUL</b></p></li>
					<li><p><b>FAR</b></p></li>
					<li><p><b>WRAP UP</b></p></li>
					<li><p><b>ADJUSTMENT</b></p></li>
					<li><p><b>BRILLIANT</b></p></li>
					<li><p><b>LITTLE</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade32/vocabulary.blade.php ENDPATH**/ ?>