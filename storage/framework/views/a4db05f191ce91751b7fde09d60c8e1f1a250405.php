
<?php $__env->startSection('titulo','Unit 26 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade26" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit26/pronunciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - Practice the pronunciation of the underlined words in the sentences.</h5>
				<div class="espacamento">
					<p>1 - I Used To Work With Her</p>
					<p>2 - We Were Talking On The Phone.</p>
					<p>3 - She Stopped The Car For The Children To Pass.</p>
					<p>4 - Did He Use To Go To Work By Bus?</p>
					<p>5 - Were They Watching Tv In The Afternoon?</p>
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade26/pronunciation.blade.php ENDPATH**/ ?>