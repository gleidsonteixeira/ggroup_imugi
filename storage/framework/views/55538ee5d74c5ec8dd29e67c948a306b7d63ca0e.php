
<?php $__env->startSection('titulo','Unit 64 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade64" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 64</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 64/1. VOCABULARY/1. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO DECIDE </b>/ something / to do something</p>
				<p><b>TO DISCOVER </b>/ a secret / how to do something</p>
				<p><b>TO ENJOY </b>/ swimming / dancing</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 64/1. VOCABULARY/2. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Journey</b></p>
				</li>
				<li>
					<p><b>Willing</b></p>
				</li>
				<li>
					<p><b>Sharing</b></p>
				</li>
				<li>
					<p><b>Findings</b></p>
				</li>
				<li>
					<p><b>Failures</b></p>
				</li>
				<li>
					<p><b>Souls</b></p>
				</li>
				<li>
					<p><b>Wish</b></p>
				</li>
				<li>
					<p><b>Feel</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade64/vocabulary.blade.php ENDPATH**/ ?>