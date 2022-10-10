
<?php $__env->startSection('titulo','Unit 9 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade9" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 9/1. VOCABULARY/1. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - PREPOSITIONS</h5>
			<div style="margin-top: 36px">
				<figure class="manipulaimagem">
					<img src="<?php echo e(asset('assets/img/dominating/unit9/vocabulary.png')); ?>" alt="espiral">
				</figure>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Field</b></p>
				</li>
				<li>
					<p><b>Like</b></p>
				</li>
				<li>
					<p><b>Cleanest</b></p>
				</li>
				<li>
					<p><b>Worst</b></p>
				</li>
				<li>
					<p><b>Manage</b></p>
				</li>
				<li>
					<p><b>Still</b></p>
				</li>
				<li>
					<p><b>Absent</b></p>
				</li>
				<li>
					<p><b>Chance</b></p>
				</li>
				<li>
					<p><b>Coming</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade9/vocabulary.blade.php ENDPATH**/ ?>