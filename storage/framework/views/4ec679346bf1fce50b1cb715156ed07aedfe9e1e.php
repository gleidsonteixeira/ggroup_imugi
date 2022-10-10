
<?php $__env->startSection('titulo','Unit 55 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade55" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 55</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 55/3. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>v sound</b> /v/ </p>
				</li>
				<li>
					<p>Version</p>
				</li>
				<li>
					<p>Video Develop</p>
				</li>
				<li>
					<p>Deliver Creative</p>
				</li>
				<li>
					<p>Improve</p>
				</li>
			</ul>
			<p style="margin-top:32px">
				The agency developed a new version of the video to be delivered next week.
				It’s more creative. They improved it a lot.
			</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade55/pronunciation.blade.php ENDPATH**/ ?>