
<?php $__env->startSection('titulo','Unit 41 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade41" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 41</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 41/1. VOCABULARY/1. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO THINK </b>/ once / twice / over and over</p>
				<p><b>TO TRY </b>/ to do something / something</p>
				<p><b>TO WASH </b>/ your clothes / your face / your car</p>
			</div>

			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 41/1. VOCABULARY/2. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Saw</b></p>
				</li>
				<li>
					<p><b>Funny</b></p>
				</li>
				<li>
					<p><b>Enjoyed</b></p>
				</li>
				<li>
					<p><b>Mouse</b></p>
				</li>
				<li>
					<p><b>Mouth</b></p>
				</li>
				<li>
					<p><b>Private</b></p>
				</li>
				<li>
					<p><b>Kidding</b></p>
				</li>
				<li>
					<p><b>Rich</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade41/vocabulary.blade.php ENDPATH**/ ?>