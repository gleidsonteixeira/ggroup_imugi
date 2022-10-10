
<?php $__env->startSection('titulo','Unit 22 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade22" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 22</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 22/1. VOCABULARY/1. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO DRINK </b>/ water / juice / soft drink / tea / milk / coffee / alcoholic beverages</p>
				<p><b>TO EAT </b>/ a lot / like kings</p>
				<p><b>TO GO </b>/ home / to work / to school / to the club / to the church / shopping / camping / dancing</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 22/1. VOCABULARY/2. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>BEST</p></b>
				</li>
				<li>
					<p><b>DRAW</p></b>
				</li>
				<li>
					<p><b>DIGITIZE</p></b>
				</li>
				<li>
					<p><b>FELL IN LOVE</p></b>
				</li>
				<li>
					<p><b>ADD</p></b>
				</li>
				<li>
					<p><b>TREAT</p></b>
				</li>
				<li>
					<p><b>IMPROVED</p></b>
				</li>
				<li>
					<p><b>COUNT ON</p>
				</li>
			</ul>

		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade22/vocabulary.blade.php ENDPATH**/ ?>