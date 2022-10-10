
<?php $__env->startSection('titulo','Unit 37 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade37" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 37</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 37/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper">
				<li>
					<p><b>g sound /g/ </b></p>
				</li>
				<li>
					<p>Glad</p>
				</li>
				<li>
					<p>Garden</p>
				</li>
				<li>
					<p>Agree</p>
				</li>
				<li>
					<p>Ago</p>
				</li>
				<li>
					<p>Dog</p>
				</li>
				<li>
					<p>Drag</p>
				</li>
			</ul>

			<p style="margin-top:32px">I’m <b>g</b>lad you a<b>g</b>reed that the do<b>g</b> would dra<b>g</b> the ra<b>g</b> all over the <b>g</b>arden.</p>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade37/pronunciation.blade.php ENDPATH**/ ?>