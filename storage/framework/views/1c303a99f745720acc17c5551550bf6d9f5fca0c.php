
<?php $__env->startSection('titulo','Unit 52 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade52" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 52</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 52/3. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>n sound</b> /n/ </p>
				</li>
				<li>
					<p>Negative</p>
				</li>
				<li>
					<p>Note</p>
				</li>
				<li>
					<p>Annual Dinner Creation</p>
				</li>
				<li>
					<p>Woman</p>
				</li>
			</ul>
			<p style="margin-top:32px">
				There’s a negative note in the newspaper saying that the annual dinner to celebrate the
				best Creator is not gonna happen. That woman is crazy to say that.
			</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade52/pronunciation.blade.php ENDPATH**/ ?>