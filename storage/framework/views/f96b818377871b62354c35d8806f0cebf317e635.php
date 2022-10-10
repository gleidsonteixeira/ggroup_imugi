
<?php $__env->startSection('titulo','Unit 32 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade32" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 32</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 32/05_PRONUNCIATION/PRONUNCIATION_32.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 14</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">p</h5></td>
					<td><h5 class="barlow">f</h5></td>
				</tr>
				<tr>
					<td><p>poor</p></td>
					<td><p>four</p></td>
				</tr>
				<tr>
					<td><p>pair</p></td>
					<td><p>fair</p></td>
				</tr>
				<tr>
					<td><p>pine</p></td>
					<td><p>fine</p></td>
				</tr>
				<tr>
					<td><p>pill</p></td>
					<td><p>fill</p></td>
				</tr>
				<tr>
					<td><p>please</p></td>
					<td><p>fleas</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade32/pronunciation.blade.php ENDPATH**/ ?>