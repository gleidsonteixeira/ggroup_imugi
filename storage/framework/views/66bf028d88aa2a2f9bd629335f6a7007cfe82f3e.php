
<?php $__env->startSection('titulo','Unit 11 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade11" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 11</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/apostila3/LESSON 11/01_VOCABULARY/VOCABULARY_11.mp3')); ?>" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Caption</b></p></li>
					<li><p><b>Content Curation</b></p></li>
					<li><p><b>Chronological Feed</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/apostila3/UNIT 11/1. VOCABULARY/2. VOCABULARY.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Brainstorm</b></p></li>
					<li><p><b>Dive Into</b></p></li>
					<li><p><b>Pragmatic</b></p></li>
					<li><p><b>Meaningful</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Forget</b></p></li>
					<li><p><b>Such As</b></p></li>
					<li><p><b>Target</b></p></li>
					<li><p><b>Bring</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade11/vocabulary.blade.php ENDPATH**/ ?>