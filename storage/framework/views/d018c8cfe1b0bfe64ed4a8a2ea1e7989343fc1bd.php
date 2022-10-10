
<?php $__env->startSection('titulo','Unit 24 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade24" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit24/pronunciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - Notice how the verb to be is contracted in the pronounced form of the verb there to be.</h5>
				<div class="espacamento umterco">
					<p>There is</p>
					<figure>
						<img src="<?php echo e(asset('assets/img/playgo/RS.jpg')); ?>" alt="there is">
					</figure>
					<p>There are</p>
					<figure>
						<img src="<?php echo e(asset('assets/img/playgo/RARE.jpg')); ?>" alt="there are">
					</figure>
					<p>“There are many trees in the forest.”</p>
					<p>“There is a lot of money in the bank.”</p>
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade24/pronunciation.blade.php ENDPATH**/ ?>