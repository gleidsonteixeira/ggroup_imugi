
<?php $__env->startSection('titulo','Unit 8 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade8" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 8</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 8/3. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>long i /??/</b></p>
				</li>
				<li>
					<p>Time</p>
				</li>
				<li>
					<p>Nine</p>
				</li>
				<li>
					<p>Five</p>
				</li>
				<li>
					<p>High</p>
				</li>
				<li>
					<p>Style</p>
				</li>
				<li>
					<p>China</p>
				</li>
			</ul>
			<p class="lista-inline" style="margin-top:32px">In Ch<b>i</b>na it’s, tim<b>e</b> for h<b>i</b>gh n<b>i</b>ne to f<b>i</b>ve st<b>y</b>le of work. </ol>
				<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade8/pronunciation.blade.php ENDPATH**/ ?>