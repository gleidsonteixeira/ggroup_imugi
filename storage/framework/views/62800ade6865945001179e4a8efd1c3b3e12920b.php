
<?php $__env->startSection('titulo','Unit 31 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade31" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 31</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 31/05_PRONUNCIATION/PRONUNCIATION_31.mp3')); ?>" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 13</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">p</h5></td>
					<td><h5 class="barlow">b</h5></td>
				</tr>
				<tr>
					<td><p>pin</p></td>
					<td><p>bin</p></td>
				</tr>
				<tr>
					<td><p>pest</p></td>
					<td><p>best</p></td>
				</tr>
				<tr>
					<td><p>pig</p></td>
					<td><p>big</p></td>
				</tr>
				<tr>
					<td><p>pit</p></td>
					<td><p>bit</p></td>
				</tr>
				<tr>
					<td><p>poured</p></td>
					<td><p>bore</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade31/pronunciation.blade.php ENDPATH**/ ?>