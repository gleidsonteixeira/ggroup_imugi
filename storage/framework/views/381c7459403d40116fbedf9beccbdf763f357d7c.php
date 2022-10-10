
<?php $__env->startSection('titulo','Unit 30 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade30" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 30 - VIDEO EFFECTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit30/pronunciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Observe the difference in pronunciation between the sounds of “M” and “N”. Touch your lips to pronounce “M”.</h5>
				<ul class="lista-inline">
					<li><p><b>MAN</b></p></li>
					<li><p><b>GUN</b></p></li>
					<li><p><b>SUN</b></p></li>
				</ul>
				<ul class="lista-inline">
					<li><p><b>MA’AM</b></p></li>
					<li><p><b>GUM</b></p></li>
					<li><p><b>SUM</b></p></li>
				</ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade30/pronunciation.blade.php ENDPATH**/ ?>