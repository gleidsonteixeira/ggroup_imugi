<?php $__env->startSection('titulo','Unit 19 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade19" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 19 - TEXT FORMATING</h3>
				<!-- <p><b>goal:</b>  Focus On Simple Past With Irregular Verbs. Contrast With The Present Form. Explore Differences Between Simple Present And Simple Past Auxilary Verbs.</p> -->
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit19/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>DOUBT</b></p></li>
					<li><p><b>PRACTICE</b></p></li>
					<li><p><b>NOTICE</b></p></li>
					<li><p><b>BETWEEN</b></p></li>
					<li><p><b>FIX</b></p></li>
					<li><p><b>MENTION</b></p></li>
					<li><p><b>ON TOP OF</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade19/vocabulary.blade.php ENDPATH**/ ?>