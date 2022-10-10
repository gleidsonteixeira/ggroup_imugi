
<?php $__env->startSection('titulo','Unit 10 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade10" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 10</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 10/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>long o /oʊ/</b></p>
				</li>
				<li>
					<p>Go</p>
				</li>
				<li>
					<p>Slow</p>
				</li>
				<li>
					<p>So</p>
				</li>
				<li>
					<p>Those Post</p>
				</li>
				<li>
					<p>Drove moment</p>
				</li>
			</ul>
			<p class="lista-inline" style="margin-top:32px">Don’t g<b><u>o</u></b> too sl<b><u>o</u></b>w. The m<b><u>o</u></b>ment you called, he dr<b><u>o</u></b>ve to the p<b><u>o</u></b>st. </ol>
				<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade10/pronunciation.blade.php ENDPATH**/ ?>