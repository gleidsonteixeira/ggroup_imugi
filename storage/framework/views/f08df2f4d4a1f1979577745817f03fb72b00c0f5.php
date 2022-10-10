
<?php $__env->startSection('titulo','Unit 20 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade20" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 20</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 20/05_PRONUNCIATION/PRONUNCIATION_20.mp3')); ?>" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 02</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">ɜ:</h5></td>
					<td><h5 class="barlow">ɔ:</h5></td>
					<td><h5 class="barlow">æ</h5></td>
					<td><h5 class="barlow">e</h5></td>
				</tr>
				<tr>
					<td><p>work</p></td>
					<td><p>walk</p></td>
					<td><p>bat</p></td>
					<td><p>bet</p></td>
				</tr>
				<tr>
					<td><p>bird</p></td>
					<td><p>bored</p></td>
					<td><p>dad</p></td>
					<td><p>dead</p></td>
				</tr>
				<tr>
					<td><p>fur</p></td>
					<td><p>for</p></td>
					<td><p>pack</p></td>
					<td><p>peck</p></td>
				</tr>
				<tr>
					<td><p>shirt</p></td>
					<td><p>short</p></td>
					<td><p>sad</p></td>
					<td><p>said</p></td>
				</tr>
				<tr>
					<td><p>sir</p></td>
					<td><p>saw</p></td>
					<td><p>tan</p></td>
					<td><p>ten</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade20/pronunciation.blade.php ENDPATH**/ ?>