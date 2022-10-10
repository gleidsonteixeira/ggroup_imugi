
<?php $__env->startSection('titulo','Unit 28 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade28" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 28</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 28/3. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<table class="metade center-align" style="margin-top:16px">
				<tr>
					<td colspan="2">
						<h5 class="barlow">Improving pronunciation - / r / / h /</h5>
					</td>
				</tr>
				<tr>
					<td>
						<p><b>H</b>ome - <b>R</b>ome</p>
					</td>
					<td>
						<p><b>H</b>ole - <b>R</b>ole</p>
					</td>
				</tr>
				<tr>
					<td>
						<p><b>H</b>abit -<b>R</b>abbit</p>
					</td>
					<td>
						<p>To <b>H</b>ide – To <b>R</b>ide</p>
					</td>
				</tr>
				<tr>
					<td>
						<p><b>H</b>ead - <b>R</b>ed</p>
					</td>
					<td>
						<p><b>H</b>ay – <b>R</b>ay</p>
					</td>
				</tr>
				<tr>
					<td>
						<p><b>H</b>at - R<b>a</b>t</p>
					</td>
					<td>
						<p><b>H</b>ear - Rear</p>
					</td>
				</tr>
			</table>
			<div class="clear"></div>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade28/pronunciation.blade.php ENDPATH**/ ?>