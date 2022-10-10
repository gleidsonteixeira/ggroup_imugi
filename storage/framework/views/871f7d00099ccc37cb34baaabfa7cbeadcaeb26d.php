
<?php $__env->startSection('titulo','Unit 16 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade16" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 16</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 16/01_VOCABULARY/VOCABULARY_16.mp3')); ?>" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li><p><b>Like</b></p></li>
				<li><p><b>Organic Reach</b></p></li>
				<li><p><b>Paid Reach</b></p></li>
            </ul>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Since</b></p>
				</li>
				<li>
					<p><b>Random</b></p>
				</li>
				<li>
					<p><b>Upload</b></p>
				</li>
				<li>
					<p><b>Already</b></p>
				</li>
				<li>
					<p><b>Proud</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade16/vocabulary.blade.php ENDPATH**/ ?>