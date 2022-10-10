
<?php $__env->startSection('titulo','Unit 22 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade22" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 22</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 22/05_PRONUNCIATION/PRONUNCIATION_22.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 04</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">ʃ</h5></td>
					<td><h5 class="barlow">S</h5></td>
					<td><h5 class="barlow">S</h5></td>
					<td><h5 class="barlow">Z</h5></td>
				</tr>
				<tr>
					<td><p>ship</p></td>
					<td><p>sip</p></td>
					<td><p>sip</p></td>
					<td><p>zip</p></td>
				</tr>
				<tr>
					<td><p>she</p></td>
					<td><p>sea</p></td>
					<td><p>sue</p></td>
					<td><p>zoo</p></td>
				</tr>
				<tr>
					<td><p>sure</p></td>
					<td><p>sore</p></td>
					<td><p>place</p></td>
					<td><p>plays</p></td>
				</tr>
				<tr>
					<td><p>shoot</p></td>
					<td><p>suit</p></td>
					<td><p>rice</p></td>
					<td><p>rise</p></td>
				</tr>
				<tr>
					<td><p>shy</p></td>
					<td><p>sigh</p></td>
					<td><p>ice</p></td>
					<td><p>eyes</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade22/pronunciation.blade.php ENDPATH**/ ?>