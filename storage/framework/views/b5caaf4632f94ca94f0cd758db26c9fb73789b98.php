
<?php $__env->startSection('titulo','Unit 50 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade50" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 50</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 50/1. VOCABULARY/1. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO SET </b>/ the table / a time / a date / the alarm clock</p>
				<p><b>TO UNDERLINE </b>/ a word / a sentence</p>
				<p><b>TO WAIT </b>/ just a second / for an hour / for hours</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 50/1. VOCABULARY/2. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>RESTING</b></p>
				</li>
				<li>
					<p><b>WAR</b></p>
				</li>
				<li>
					<p><b>FOLLOWED</b></p>
				</li>
				<li>
					<p><b>IMPROVED</b></p>
				</li>
				<li>
					<p><b>RELEASE</b></p>
				</li>
				<li>
					<p><b>FEATURE</b></p>
				</li>
				<li>
					<p><b>REMARKABLE</b></p>
				</li>
				<li>
					<p><b>MIND-BLOWING</p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade50/vocabulary.blade.php ENDPATH**/ ?>