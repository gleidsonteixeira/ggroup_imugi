
<?php $__env->startSection('titulo','Unit 05 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade5" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 5</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/apostila3/LESSON 05/01_VOCABULARY/VOCABULARY_05.mp3')); ?>" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>On the other hand</b></p></li>
					<li><p><b>To deal with</b></p></li>
					<li><p><b>To be smashed</b></p></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>To Make</b></p></li>
					<li><p><b>Channel</b></p></li>
					<li><p><b>Crucify</b></p></li>
					<li><p><b>Appealing</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Private</b></p></li>
					<li><p><b>Haters</b></p></li>
					<li><p><b>Criticize</b></p></li>
					<li><p><b>Side Effect</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade5/vocabulary.blade.php ENDPATH**/ ?>