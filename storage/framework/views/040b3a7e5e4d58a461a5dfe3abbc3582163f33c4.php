
<?php $__env->startSection('titulo','Unit 24 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade24" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 24</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 24/1. VOCABULARY/1. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO RUN </b>/ miles / along the beach / a class / a project / a software</p>
				<p><b>TO SLEEP </b>/ calmly / well </p>
				<p><b>TO TALK </b>/ to somebody / a lot / for hours</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 24/1. VOCABULARY/2. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>

			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>EVERYTHING</p></b>
				</li>
				<li>
					<p><b>DRAWER</p></b>
				</li>
				<li>
					<p><b>CLOSER</p></b>
				</li>
				<li>
					<p><b>ANYWAYS</p></b>
				</li>
				<li>
					<p><b>ALMOST</p></b>
				</li>
				<li>
					<p><b>DONE</p></b>
				</li>
				<li>
					<p><b>INSTALLING</p></b>
				</li>
				<li>
					<p><b>LOCKED</p>
				</li>
				<li>
					<p><b>SET UP</p></b>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade24/vocabulary.blade.php ENDPATH**/ ?>