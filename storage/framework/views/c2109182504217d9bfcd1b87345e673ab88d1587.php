<?php $__env->startSection('titulo','Unit 20 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade20" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 20 - Akira’S REVIEW</h3>
				<!-- <p><b>goal:</b>  Focus On Simple Past With Irregular Verbs. Contrast With The Present Form. Explore Differences Between Simple Present And Simple Past Auxilary Verbs.</p> -->
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit20/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>COME</b></p></li>
					<li><p><b>END</b></p></li>
					<li><p><b>HAVE</b></p></li>
					<li><p><b>ASK</b></p></li>
					<li><p><b>ENOUGH</b></p></li>
					<li><p><b>ACTUALLY</b></p></li>
					<li><p><b>REVIEW</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade20/vocabulary.blade.php ENDPATH**/ ?>