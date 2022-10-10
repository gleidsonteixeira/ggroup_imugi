
<?php $__env->startSection('titulo','Unit 26 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade26" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 26</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 26/3. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>r sound /r/</b></p>
				</li>
				<li>
					<p>Ready</p>
				</li>
				<li>
					<p>Receive</p>
				</li>
				<li>
					<p>Group</p>
				</li>
				<li>
					<p>Friends</p>
				</li>
				<li>
					<p>Celebrate</p>
				</li>
				<li>
					<p>year</p>
				</li>
			</ul>

			<p style="margin-top:32px">We a<b><u>r</u></b>e ready to <b><u>r</u></b>eceive a g<b><u>r</u></b>oup of f<b><u>r</u></b>iends to celeb<b><u>r</u></b>ate the end of the yea<b><u>r</u></b>.</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade26/pronunciation.blade.php ENDPATH**/ ?>