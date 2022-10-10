
<?php $__env->startSection('titulo','Unit 29 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade29" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 29</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 29/05_PRONUNCIATION/PRONUNCIATION_29.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 11</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">w</h5></td>
					<td><h5 class="barlow">v</h5></td>
				</tr>
				<tr>
					<td><p>wine</p></td>
					<td><p>vine</p></td>
				</tr>
				<tr>
					<td><p>west</p></td>
					<td><p>vest</p></td>
				</tr>
				<tr>
					<td><p>while</p></td>
					<td><p>vile</p></td>
				</tr>
				<tr>
					<td><p>wet</p></td>
					<td><p>vet</p></td>
				</tr>
				<tr>
					<td><p>wary</p></td>
					<td><p>vary</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade29/pronunciation.blade.php ENDPATH**/ ?>