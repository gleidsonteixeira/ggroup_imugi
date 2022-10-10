
<?php $__env->startSection('titulo','Unit 15 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade15" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 15</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/apostila3/LESSON 15/01_VOCABULARY/VOCABULARY_15.mp3')); ?>" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline upper">
					<li><p><b>Impressions</b></p></li>
					<li><p><b>Influencer</b></p></li>
					<li><p><b>Instagram Scheduling</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Content</b></p></li>
					<li><p><b>To be into</b></p></li>
					<li><p><b>Whatever</b></p></li>
					<li><p><b>Selfishness</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>To sound</b></p></li>
					<li><p><b>Close</b></p></li>
					<li><p><b>Manage</b></p></li>
					<li><p><b>Ya’lls</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade15/vocabulary.blade.php ENDPATH**/ ?>